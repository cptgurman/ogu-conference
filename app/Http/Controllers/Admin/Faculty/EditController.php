<?php

namespace App\Http\Controllers\Admin\Faculty;

use App\Models\Corpus;
use App\Models\Faculty;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Faculty $faculty)
    {
        $corpuses = Corpus::all();
        return view('admin.faculty.edit', compact('faculty', 'corpuses'));
    }
}
