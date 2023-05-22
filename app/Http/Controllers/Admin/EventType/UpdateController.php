<?php

namespace App\Http\Controllers\Admin\EventType;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventType\UpdateRequest;
use App\Models\EventType;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, EventType $event_type)
    {
        $data = $request->validated();
        $event_type->update($data);
        return redirect()->route('admin.event_type.show', compact('event_type'));
    }
}
