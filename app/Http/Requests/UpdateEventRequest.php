<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'price' => 'required|min:3|max:50',
            'location' => 'required|min:3|max:255',
            'description' => 'required|min:3',
            'date_time' => 'required',
            'slug' => 'required|min:3|alpha_dash|max:255|unique:events,slug,' . $this->event->id,
            'poster' => 'image|mimes:jpeg,png,jpg,svg|max:5048'
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
            'price.required' => 'Harga wajib diisi',
            'price.min' => 'Minimal 3 karakter',
            'price.max' => 'Maksimal 50 karakter',
            'location.required' => 'Lokasi wajib diisi',
            'location.min' => 'Minimal 3 karakter',
            'location.max' => 'Maksimal 255 karakter',
            'description.required' => 'Deskripsi wajib diisi',
            'description.min' => 'Minimal 3 karakter',
            'poster.image' => 'Data yang diisi wajib gambar',
            'poster.mimes' => 'Data harus berupa jpeg,png,jpg dan svg',
            'poster.max' => 'Maksimal 5mb',
            'date_time.required' => 'Tanggal dan waktu wajib diisi',
            'slug.required' => 'Slug wajib diisi',
            'slug.min' => 'Minimal 3 karakter',
            'slug.max' => 'Maksimal 255 karater',
            'slug.alpha_dash' => 'Slug hanya boleh mengandung huruf, angka, dash dan underscore',
            'slug.unique' => 'Slug ini sudah terpakai'
        ];
    }
}
