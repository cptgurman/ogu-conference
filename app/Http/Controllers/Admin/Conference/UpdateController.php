<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Conference\UpdateRequest;
use App\Models\AcademicTitle;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, AcademicTitle $conference)
    {
        $data = $request->validated();
        $conference->update($data);
        return redirect()->route('admin.conference.show', compact('conference'));
    }
}
