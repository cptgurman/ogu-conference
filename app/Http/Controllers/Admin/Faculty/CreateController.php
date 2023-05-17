<?php

namespace App\Http\Controllers\Admin\Faculty;

use App\Http\Controllers\Controller;
use App\Models\Corpus;

class CreateController extends Controller
{
    public function __invoke()
    {
        $corpuses = Corpus::all();
        return view('admin.faculty.create', compact('corpuses'));
    }
}
