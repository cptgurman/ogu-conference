<?php

namespace App\Http\Requests\Admin\Application;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'conference_id' => 'required|exists:conferences,id',
            'participation_form_id' => 'required|exists:event_types,id',
            'conference_section_id' => 'required|exists:sections,id',
            'annotation' => 'required|string',
            'keywords' => 'required|string',
            'file' => 'required|file',
            'invitation' => 'boolean',
            'hotel' => 'boolean',
        ];
    }
}
