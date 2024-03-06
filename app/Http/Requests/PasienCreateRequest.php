<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasienCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'no_tlp' => 'unique:pasiens|max:13',
            'nama' => 'required|max:30'
        ];
    }

    // Untuk mengubah nama doang ketika muncul peringatan (flashmessage)
    public function attributes()
    {
        return [
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'no_tlp' => 'Nomor Telepon',
        ];
    }

    // Terjadi Ketika....
    public function messages()
    {
        return [
            'nama.max' => 'Nama maksimal :max karakter',
            'no_tlp.max' => 'Nomor telepon maksimal :max digit',
            "no_tlp.unique" => 'Nomor telepon tidak boleh sama!',
            'nama.required' => 'Kolom nama pasien tidak boleh kosong!'
        ];
    }
}
