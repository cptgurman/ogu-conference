<?php

namespace App\Http\Controllers\Admin\AcademicDegree;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AcademicDegree\UpdateRequest;
use App\Models\AcademicTitle;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, AcademicTitle $academic_degree)
    {
        $data = $request->validated();
        $academic_degree->update($data);
        return redirect()->route('admin.academic_degree.show', compact('academic_degree'));
    }
}
