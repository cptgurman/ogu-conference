<?php

namespace App\Http\Controllers\Admin\Application;

use App\Models\Application;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Application\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated(); //данные пришедшие в случае успешной валидации

            // Возможно ключевые слова будут в другой таблице (для поиска?)
            // $keywords = $data['keywords'];
            // unset($data['keywords']);

            $data['file'] = Storage::disk('public')->put('/application', $data['file']);

            // Добавляем заявку
            $application = Application::firstOrCreate($data);

            return redirect()->route('admin.conference.index');
        } catch (\Exception $exception) {
            abort(404);
        }
    }
}
