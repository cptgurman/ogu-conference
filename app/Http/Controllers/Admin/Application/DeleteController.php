<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Controller;
use App\Models\Application;

class DeleteController extends Controller
{
    public function __invoke(Application $application)
    {
        $application->delete();
        return redirect()->route('admin.application.index');
    }
}
