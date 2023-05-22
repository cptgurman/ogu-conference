<?php

namespace App\Http\Controllers\Admin\AcademicTitle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AcademicTitle\UpdateRequest;
use App\Models\AcademicTitle;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, AcademicTitle $academic_title)
    {
        $data = $request->validated();
        $academic_title->update($data);
        return redirect()->route('admin.academic_title.show', compact('academic_title'));
    }
}
