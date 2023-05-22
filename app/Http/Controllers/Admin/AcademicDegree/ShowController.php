<?php

namespace App\Http\Controllers\Admin\AcademicDegree;

use App\Http\Controllers\Controller;
use App\Models\AcademicDegree;

class ShowController extends Controller
{
    public function __invoke(AcademicDegree $academic_degree)
    {
        return view('admin.academic_degree.show', compact('academic_degree'));
    }
}
