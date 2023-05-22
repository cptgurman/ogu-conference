<?php

namespace App\Http\Controllers\Admin\Education;

use App\Http\Controllers\Controller;
use App\Models\Education;

class EditController extends Controller
{
    public function __invoke(Education $education)
    {
        return view('admin.education.edit', compact('education'));
    }
}
