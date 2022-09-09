<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInformationSystemRequest extends FormRequest
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
            'province' => 'required|min:3|max:50',
            'city' => 'required|min:3|max:50',
            'address' => 'required|min:3|max:255',
            'description' => 'required|min:3',
            'x' => 'required|min:3|max:50',
            'y' => 'required|min:3|max:50',
            'status'=>'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,svg|max:5048',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul wajib diisi',
            'title.min' => 'Minimal 3 karakter',
            'title.max' => 'Maksimal 255 karakter',
            'province.required' => 'Provinsi wajib diisi',
            'province.min' => 'Minimal 3 karakter',
            'province.max' => 'Maksimal 50 karakter',
            'city.required' => 'Kota wajib diisi',
            'city.min' => 'Minimal 3 karakter',
            'city.max' => 'Maksimal 50 karakter',
            'address.required' => 'Alamat Lengkap wajib diisi',
            'address.min' => 'Minimal 3 karakter',
            'address.max' => 'Maksimal 255 karakter',
            'description.required' => 'Deskripsi wajib diisi',
            'description.min' => 'Minimal 3 karakter',
            'x.required' => 'Latitude wajib diisi',
            'x.min' => 'Minimal 3 karakter',
            'x.max' => 'Maksimal 50 karakter',
            'y.required' => 'Longitude wajib diisi',
            'y.min' => 'Minimal 3 karakter',
            'y.max' => 'Maksimal 50 karakter',
            'z.required' => 'Titik z wajib diisi',
            'thumbnail.required' => 'Gambar wajib diisi',
            'thumbnail.image' => 'Data yang diisi wajib gambar',
            'thumbnail.mimes' => 'Data harus berupa jpeg,png,jpg dan svg',
            'thumbnail.max' => 'Maksimal 5mb',
            'status.required'=>'Status wajib diisi',
        ];
    }
}
