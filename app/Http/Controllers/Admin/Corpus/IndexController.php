<?php

namespace App\Http\Controllers\Admin\Corpus;

use App\Http\Controllers\Controller;
use App\Models\Corpus;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Список всех корпусов
        $corpuses = Corpus::all();
        return view('admin.corpus.index', compact('corpuses'));
    }
}
