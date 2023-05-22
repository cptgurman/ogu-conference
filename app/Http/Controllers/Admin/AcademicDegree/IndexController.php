<?php

namespace App\Http\Controllers\Admin\AcademicDegree;

use App\Http\Controllers\Controller;
use App\Models\AcademicDegree;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Список всех факультетов
        $academic_degrees = AcademicDegree::all();
        return view('admin.academic_degree.index', compact('academic_degrees'));
    }
}
