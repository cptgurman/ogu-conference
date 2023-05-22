<?php

namespace App\Http\Controllers\Admin\EventType;

use App\Http\Controllers\Controller;
use App\Models\EventType;

class EditController extends Controller
{
    public function __invoke(EventType $event_type)
    {
        return view('admin.event_type.edit', compact('event_type'));
    }
}
