<?php

namespace App\Http\Requests\Admin\Conference;

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
            'name' => 'required|string',
            'short_name' => 'required|string',
            'description' => 'required|string',
            'corpus_id' => 'required|exists:corpuses,id',
            'faculty_id' => 'required|exists:faculties,id',
            'event_type_id' => 'required|exists:event_types,id',
            'image' => 'file',
            'preview_image' => 'file',
            'conf_date' => 'required|date',
            'reg_date_start' => 'required|date',
            'reg_date_end' => 'required|date',
            'section_names' => 'required|array'
        ];
    }
}
