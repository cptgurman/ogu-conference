<?php

namespace App\Http\Controllers\Admin\Application;

use App\Models\User;
use App\Models\EventType;
use App\Models\Conference;
use App\Models\Application;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $applications = Application::orderByDesc('id')->paginate(10);
        $users = User::all()->pluck('name', 'id')->toArray();
        $conferences = Conference::all()->pluck('name', 'id')->toArray();
        $event_types = EventType::all()->pluck('name', 'id')->toArray();
        return view('admin.application.index', compact('applications', 'conferences', 'event_types', 'users'));
    }
}
