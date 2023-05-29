<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email,' . $this->user_id,
            'password' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
            'role_ids' => 'required|array',
            'role_ids.*' => 'required|integer|exists:roles,id',
        ];
    }
}
