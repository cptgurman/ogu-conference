<?php

namespace App\Http\Controllers\Admin\Application;

use App\Models\EventType;
use App\Models\Conference;
use App\Models\Application;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Application $application)
    {
        $event_types = EventType::all();
        $conferences = Conference::whereDate('created_at', '=', date('2023-05-27'));

        return view('admin.application.edit', compact('application', 'event_types', 'conferences'));
    }
}
