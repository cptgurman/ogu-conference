<?php

namespace App\Http\Controllers\Admin\Expert;

use App\Models\User;
use App\Models\EventType;
use App\Models\Conference;
use App\Models\Application;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        // Эксперты
        $experts = User::whereHas(
            'roles',
            function ($q) {
                $q->where('role_id', 2);
            }
        )->get();

        return view('admin.expert.index', compact('experts'));
    }
}
