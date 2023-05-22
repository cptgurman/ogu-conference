<?php

namespace App\Http\Controllers\Admin\AcademicTitle;

use App\Http\Controllers\Controller;
use App\Models\AcademicTitle;

class ShowController extends Controller
{
    public function __invoke(AcademicTitle $academic_title)
    {
        return view('admin.academic_title.show', compact('academic_title'));
    }
}
