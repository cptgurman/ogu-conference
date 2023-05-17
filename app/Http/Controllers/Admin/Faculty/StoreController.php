<?php

namespace App\Http\Controllers\Admin\Faculty;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Faculty\StoreRequest;
use App\Models\Faculty;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated(); //данные пришедшие в случае успешной валидации
        Faculty::firstOrCreate($data);
        return redirect()->route('admin.faculty.index');
    }
}
