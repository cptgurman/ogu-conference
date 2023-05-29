<?php

namespace App\Http\Controllers\Admin\Application;

use App\Models\Corpus;
use App\Models\Faculty;
use App\Models\Section;
use App\Models\EventType;
use App\Models\Application;
use App\Models\Conference;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke(Application $application)
    {

        $event_types = EventType::all();
        $conferences = Conference::all();

        return view('admin.application.show', compact('application', 'event_types', 'conferences'));
    }
}
