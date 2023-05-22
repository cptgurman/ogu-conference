<?php

namespace App\Http\Controllers\Admin\AcademicTitle;

use App\Http\Controllers\Controller;
use App\Models\AcademicTitle;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Список всех факультетов
        $academic_titles = AcademicTitle::all();
        return view('admin.academic_title.index', compact('academic_titles'));
    }
}
