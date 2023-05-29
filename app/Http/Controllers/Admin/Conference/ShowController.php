<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Models\Corpus;
use App\Models\Faculty;
use App\Models\Section;
use App\Models\EventType;
use App\Models\Conference;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke(Conference $conference)
    {

        $event_types = EventType::all();
        $faculties = Faculty::all();
        $corpuses = Corpus::all();
        $sections = Section::where('conference_id', $conference->id)->get();

        return view('admin.conference.show', compact('conference', 'event_types', 'faculties', 'corpuses', 'sections'));
    }
}
