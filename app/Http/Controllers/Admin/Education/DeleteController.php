<?php

namespace App\Http\Controllers\Admin\Education;

use App\Http\Controllers\Controller;
use App\Models\Education;

class DeleteController extends Controller
{
    public function __invoke(Education $education)
    {
        $education->delete();
        return redirect()->route('admin.education.index');
    }
}
