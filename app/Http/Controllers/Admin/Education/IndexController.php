<?php

namespace App\Http\Controllers\Admin\Education;

use App\Http\Controllers\Controller;
use App\Models\Education;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Список всех факультетов
        $educations = Education::all();
        return view('admin.education.index', compact('educations'));
    }
}
