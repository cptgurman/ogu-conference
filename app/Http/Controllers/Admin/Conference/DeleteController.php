<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Models\Conference;

class DeleteController extends Controller
{
    public function __invoke(Conference $conference)
    {
        $conference->delete();
        return redirect()->route('admin.conference.index');
    }
}
