<?php

namespace App\Http\Controllers\Admin\AcademicTitle;

use App\Http\Controllers\Controller;
use App\Models\AcademicTitle;

class DeleteController extends Controller
{
    public function __invoke(AcademicTitle $academic_title)
    {
        $academic_title->delete();
        return redirect()->route('admin.academic_title.index');
    }
}
