<?php

namespace App\Http\Controllers\Admin\Faculty;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faculty;

class DeleteController extends Controller
{
    public function __invoke(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->route('admin.faculty.index');
    }
}
