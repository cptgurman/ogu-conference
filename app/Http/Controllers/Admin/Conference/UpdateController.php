<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Models\Conference;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Conference\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Conference $conference)
    {
        $data = $request->validated(); //данные пришедшие в случае успешной валидации

        $sections = $data['section_names'];
        unset($data['section_names']);

        $data['conf_date'] = Carbon::parse($data['conf_date']);
        $data['reg_date_start'] = Carbon::parse($data['reg_date_start']);
        $data['reg_date_end'] = Carbon::parse($data['reg_date_end']);

        if (!empty($data['preview_image'])) {
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }

        if (!empty($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }

        // Обновляем конференцию
        $conference->update($data);

        // Обновляем секции
        $conference->section()->delete(); //Удаляем предыдущие секции

        foreach ($sections as $value) {
            $conference->section()->create(['name' => $value]);
        }

        return redirect()->route('admin.conference.index');
    }
}
