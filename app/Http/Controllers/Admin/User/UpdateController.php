<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\User\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        try {
            $data = $request->validated(); //данные пришедшие в случае успешной валидации

            // Роли пользователя
            $roles = $data['role_ids'];
            unset($data['role_ids']);

            $data['password'] = Hash::make($data['password']);

            // Добавляем пользователя и роли
            $user->update($data);
            $user->roles()->sync($roles);
            return redirect()->route('admin.user.index');
        } catch (\Exception $exception) {
            abort(404);
        }
    }
}
