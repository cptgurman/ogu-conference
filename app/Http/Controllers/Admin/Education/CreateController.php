<?php

namespace App\Http\Controllers\Admin\Education;

use App\Http\Controllers\Controller;
use App\Models\Education;

class CreateController extends Controller
{
    public function __invoke()
    {
        $educations = Education::all();
        return view('admin.education.create', compact('educations'));
    }
}
