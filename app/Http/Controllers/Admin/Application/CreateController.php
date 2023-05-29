<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\EventType;
use App\Models\Section;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke()
    {
        // $conferences = Conference::whereDate('created_at', '=', date('2023-05-27'));
        $conferences = Conference::all();
        $users = User::all();
        $event_types = EventType::all();
        $conference_sections = Section::all();
        return view('admin.application.create', compact('event_types', 'conferences', 'users', 'conference_sections'));
    }
}
