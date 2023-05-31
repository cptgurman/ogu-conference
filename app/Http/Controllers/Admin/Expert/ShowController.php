<?php

namespace App\Http\Controllers\Admin\Expert;

use App\Models\Application;
use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $expert)
    {
        // Сначала фильтрация по user потом по status_id
        $applications = Application::whereHas('expert', function ($q) {
            $q->where('user_id', 2);
        })->whereIn('status_id', [1, 2, 4])->get();

        return view('admin.expert.show', compact('expert', 'applications'));
    }
}
