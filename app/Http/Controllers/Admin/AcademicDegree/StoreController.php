<?php

namespace App\Http\Controllers\Admin\AcademicDegree;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AcademicDegree\StoreRequest;
use App\Models\AcademicDegree;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated(); //данные пришедшие в случае успешной валидации
        AcademicDegree::firstOrCreate($data);
        return redirect()->route('admin.academic_degree.index');
    }
}
