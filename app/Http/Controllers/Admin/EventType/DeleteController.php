<?php

namespace App\Http\Controllers\Admin\EventType;

use App\Http\Controllers\Controller;
use App\Models\EventType;

class DeleteController extends Controller
{
    public function __invoke(EventType $event_type)
    {
        $event_type->delete();
        return redirect()->route('admin.event_type.index');
    }
}
