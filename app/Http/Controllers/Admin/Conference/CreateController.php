<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\Corpus;
use App\Models\EventType;
use App\Models\Faculty;

class CreateController extends Controller
{
    public function __invoke()
    {
        $event_types = EventType::all();
        $faculties = Faculty::all();
        $corpuses = Corpus::all();
        return view('admin.conference.create', compact('event_types', 'faculties', 'corpuses'));
    }
}
