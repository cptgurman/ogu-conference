<?php

namespace App\Http\Controllers\Admin\AcademicTitle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AcademicTitle\StoreRequest;
use App\Models\AcademicTitle;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated(); //данные пришедшие в случае успешной валидации
        AcademicTitle::firstOrCreate($data);
        return redirect()->route('admin.academic_title.index');
    }
}
