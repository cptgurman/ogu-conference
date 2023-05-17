<?php

namespace App\Http\Controllers\Admin\Faculty;

use App\Http\Controllers\Controller;
use App\Models\Faculty;

class ShowController extends Controller
{
    public function __invoke(Faculty $faculty)
    {
        return view('admin.faculty.show', compact('faculty'));
    }
}
