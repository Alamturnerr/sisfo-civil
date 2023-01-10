<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGaleryRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:5048',
            'slug' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Gambar wajib diisi',
            'image.image' => 'Data yang diisi wajib gambar',
            'image.mimes' => 'Data harus berupa jpeg,png,jpg dan svg',
            'image.max' => 'Maksimal 5mb',
            'slug.required' => 'Slug wajib diisi',
        ];
        
    }
}
