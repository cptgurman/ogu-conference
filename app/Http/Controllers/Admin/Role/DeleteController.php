<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;

class DeleteController extends Controller
{
    public function __invoke(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.role.index');
    }
}
