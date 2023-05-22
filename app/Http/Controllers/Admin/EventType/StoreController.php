<?php

namespace App\Http\Controllers\Admin\EventType;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventType\StoreRequest;
use App\Models\EventType;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated(); //данные пришедшие в случае успешной валидации
        EventType::firstOrCreate($data);
        return redirect()->route('admin.event_type.index');
    }
}
