<?php

namespace App\Http\Controllers\Admin\EventType;

use App\Http\Controllers\Controller;
use App\Models\EventType;

class CreateController extends Controller
{
    public function __invoke()
    {
        $event_types = EventType::all();
        return view('admin.event_type.create', compact('event_types'));
    }
}
