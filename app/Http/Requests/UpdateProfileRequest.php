<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'description' => 'required|min:3',
            'vision' => 'required|min:3',
            'mission' => 'required|min:3'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'description.required' => 'Deskripsi wajib diisi',
            'description.min' => 'Minimal 3 karakter',
            'vision.required' => 'Visi wajib diisi',
            'vision.min' => 'Minimal 3 karakter',
            'mission.required' => 'Misi wajib diisi',
            'mission.min' => 'Minimal 3 karakter'
        ];
    }
}
