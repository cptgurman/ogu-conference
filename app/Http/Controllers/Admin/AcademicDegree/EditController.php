<?php

namespace App\Http\Controllers\Admin\AcademicDegree;

use App\Http\Controllers\Controller;
use App\Models\AcademicDegree;

class EditController extends Controller
{
    public function __invoke(AcademicDegree $academic_degree)
    {
        return view('admin.academic_degree.edit', compact('academic_degree'));
    }
}
