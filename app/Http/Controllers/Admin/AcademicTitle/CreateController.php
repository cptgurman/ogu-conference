<?php

namespace App\Http\Controllers\Admin\AcademicTitle;

use App\Http\Controllers\Controller;
use App\Models\AcademicTitle;

class CreateController extends Controller
{
    public function __invoke()
    {
        $academic_title = AcademicTitle::all();
        return view('admin.academic_title.create', compact('academic_title'));
    }
}
