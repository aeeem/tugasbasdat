<?php

namespace Kepolisian\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaporanRequest extends FormRequest
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
            
              'nama_laporan'=>'required',
            'jenis_laporan'=>'required',
            'deskripsi'=>'required',
            
        ];
    }
}
