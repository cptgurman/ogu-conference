<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\ConferenceStatus;
use App\Models\EventType;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Список всех факультетов
        $conferences = Conference::all();
        $statuses = ConferenceStatus::all()->pluck('name', 'id')->toArray();
        $event_types = EventType::all()->pluck('name', 'id')->toArray();
        return view('admin.conference.index', compact('conferences', 'statuses', 'event_types'));
    }
}
