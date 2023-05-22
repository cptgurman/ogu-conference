<?php

namespace App\Http\Controllers\Admin\AcademicDegree;

use App\Http\Controllers\Controller;
use App\Models\AcademicDegree;

class DeleteController extends Controller
{
    public function __invoke(AcademicDegree $academic_degree)
    {
        $academic_degree->delete();
        return redirect()->route('admin.academic_degree.index');
    }
}
