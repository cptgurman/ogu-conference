<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Conference\StoreRequest;
use App\Models\Conference;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated(); //данные пришедшие в случае успешной валидации
        Conference::firstOrCreate($data);
        return redirect()->route('admin.conference.index');
    }
}
