<?php

namespace App\Http\Controllers\Admin\AcademicTitle;

use App\Http\Controllers\Controller;
use App\Models\AcademicTitle;

class EditController extends Controller
{
    public function __invoke(AcademicTitle $academic_title)
    {
        return view('admin.academic_title.edit', compact('academic_title'));
    }
}
