<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Models\Conference;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Список всех факультетов
        $conferences = Conference::all();
        return view('admin.conference.index', compact('conferences'));
    }
}
