<?php

namespace App\Http\Controllers\Admin\Education;

use App\Http\Controllers\Controller;
use App\Models\Education;

class ShowController extends Controller
{
    public function __invoke(Education $education)
    {
        return view('admin.education.show', compact('education'));
    }
}
