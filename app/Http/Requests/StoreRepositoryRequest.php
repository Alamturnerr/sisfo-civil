<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRepositoryRequest extends FormRequest
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
            'title' => 'required|min:3|max:255|unique:repositories',
            'type' => 'required|min:3',
            'file' => 'required|mimes:pdf|max:20048',
            'repository_category_id' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'repository_category_id' => 'category'
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
            'title.required' => 'Judul wajib diisi',
            'title.min' => 'Minimal 3 karakter',
            'title.max' => 'Maksimal 255 karakter',
            'title.unique' => 'Judul ini sudah terpakai',
            'type.required' => 'Tipe wajib diisi',
            'file.required' => 'File wajib diisi',
            'file.mimes' => 'Data harus berupa pdf',
            'file.max' => 'Maksimal 20mb',
            'repository_category_id.required' => 'Kategori wajib diisi'
        ];
    }
}
