<?php

namespace App\Http\Controllers\Admin\Faculty;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Список всех факультетов
        $faculties = Faculty::all();
        return view('admin.faculty.index', compact('faculties'));
    }
}
