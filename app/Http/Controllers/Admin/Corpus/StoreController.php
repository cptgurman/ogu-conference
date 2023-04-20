<?php

namespace App\Http\Controllers\Admin\Corpus;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Corpus\StoreRequest;
use App\Models\Corpus;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated(); //Валидация полей
        Corpus::firstOrCreate($data); //Добавление если есть или ошибка
        return redirect()->route('admin.corpus.index');
    }
}
