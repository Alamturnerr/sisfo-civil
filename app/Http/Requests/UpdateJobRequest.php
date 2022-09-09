<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Nama lowongan wajib diisi',
            'title.min' => 'Minimal 3 karakter',
            'title.max' => 'Maksimal 255 karakter',
            'description.required' => 'Deskripsi wajib diisi',
            'description.min' => 'Minimal 3 karakter',
            'status.required' => 'Status wajib diisi'
        ];
    }
}
