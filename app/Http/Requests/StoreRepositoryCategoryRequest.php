<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRepositoryCategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|alpha_dash|max:255|unique:repository_categories'
        ];
    }

    public function attributes()
    {
        return[
            'repository_category_id' => 'category'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi',
            'name.min' => 'Minimal 3 karakter',
            'name.max' => 'Maksimal 255 karakter',
            'slug.required' => 'Slug wajib diisi',
            'slug.min' => 'Minimal 3 karakter',
            'slug.max' => 'Maksimal 255 karater',
            'slug.alpha_dash' => 'Slug hanya boleh mengandung huruf, angka, dash dan underscore',
            'slug.unique' => 'Slug ini sudah terpakai'
        ];
    }
}
