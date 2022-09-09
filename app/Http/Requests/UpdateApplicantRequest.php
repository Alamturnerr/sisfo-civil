<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApplicantRequest extends FormRequest
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
            'name' => 'required|min:3|max:255,',
            'email' => 'required|email',
            'number' => 'required|min:10|max:15|regex:/[0-9]{9}/',
            'address' => 'required|min:3|max:1000',
            'file' => 'mimes:pdf|max:20048',
            'job_id' => 'required',
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
            'name.required' => 'Nama wajib diisi',
            'name.min' => 'Minimal 3 karakter',
            'name.max' => 'Maksimal 255 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'number.required' => 'Nomor telepon wajib diisi',
            'number.regex' => 'Nomor telepon tidak valid',
            'number.min' => 'Nomor telepon minimal 10 angka',
            'number.max' => 'Nomor telepon maksimal 15 angka',
            'address.required' => 'Alamat wajib diisi',
            'address.min' => 'Minimal 3 karakter',
            'address.max' => 'Maksimal 1000 karakter',
            'file.mimes' => 'Data harus berupa pdf',
            'file.max' => 'Maksimal 20mb',
            'job_id.required' => 'Posisi wajib diisi',
            'status.required' => 'Status wajib diisi'
        ];
    }
}
