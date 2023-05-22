<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Models\Conference;

class ShowController extends Controller
{
    public function __invoke(Conference $conference)
    {
        return view('admin.conference.show', compact('conference'));
    }
}
