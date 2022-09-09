<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,svg|max:5048',
            'slug' => 'required|min:3|alpha_dash|max:255|unique:posts',
            'post_category_id' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'post_category_id' => 'category'
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
            'description.required' => 'Deskripsi wajib diisi',
            'description.min' => 'Minimal 3 karakter',
            'thumbnail.required' => 'Gambar wajib diisi',
            'thumbnail.image' => 'Data yang diisi wajib gambar',
            'thumbnail.mimes' => 'Data harus berupa jpeg,png,jpg dan svg',
            'thumbnail.max' => 'Maksimal 5mb',
            'slug.required' => 'Slug wajib diisi',
            'slug.min' => 'Minimal 3 karakter',
            'slug.max' => 'Maksimal 255 karater',
            'slug.alpha_dash' => 'Slug hanya boleh mengandung huruf, angka, dash dan underscore',
            'slug.unique' => 'Slug ini sudah terpakai',
            'post_category_id.required' => 'Kategori wajib diisi'
        ];
    }
}
