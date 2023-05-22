<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Models\Conference;

class EditController extends Controller
{
    public function __invoke(Conference $conference)
    {
        return view('admin.conference.edit', compact('conference'));
    }
}
