<?php

namespace App\Http\Controllers\Admin\EventType;

use App\Http\Controllers\Controller;
use App\Models\EventType;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Список всех факультетов
        $event_types = EventType::all();
        return view('admin.event_type.index', compact('event_types'));
    }
}
