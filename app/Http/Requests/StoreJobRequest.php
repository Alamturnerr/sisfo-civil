<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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

    public function attributes()
    {
        return[
            'job_id' => 'job'
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
            'title.required' => 'Nama lowongan wajib diisi',
            'title.min' => 'Minimal 3 karakter',
            'title.max' => 'Maksimal 255 karakter',
            'description.required' => 'Deskripsi wajib diisi',
            'description.min' => 'Minimal 3 karakter',
            'status.required' => 'Status wajib diisi'
        ];
    }
}
