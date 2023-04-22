<?php

namespace App\Http\Controllers\Admin\Corpus;

use App\Http\Controllers\Controller;
use App\Models\Corpus;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Corpus $corpus)
    {
        return view('admin.corpus.edit', compact('corpus'));
    }
}
