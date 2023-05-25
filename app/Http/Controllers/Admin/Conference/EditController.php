<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Models\Corpus;
use App\Models\Faculty;
use App\Models\EventType;
use App\Models\Conference;
use App\Http\Controllers\Controller;
use App\Models\Section;

class EditController extends Controller
{
    public function __invoke(Conference $conference)
    {
        $event_types = EventType::all();
        $faculties = Faculty::all();
        $corpuses = Corpus::all();
        $sections = Section::where('conference_id', $conference->id)->get();

        return view('admin.conference.edit', compact('conference', 'event_types', 'faculties', 'corpuses', 'sections'));
    }
}
