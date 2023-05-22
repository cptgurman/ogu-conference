<?php

namespace App\Http\Controllers\Admin\AcademicDegree;

use App\Http\Controllers\Controller;
use App\Models\AcademicDegree;

class CreateController extends Controller
{
    public function __invoke()
    {
        $academic_degree = AcademicDegree::all();
        return view('admin.academic_degree.create', compact('academic_degree'));
    }
}
