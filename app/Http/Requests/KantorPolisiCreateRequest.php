<?php

namespace Kepolisian\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KantorPolisiCreateRequest extends FormRequest
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
            'nama'=>'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'alamat' => 'required',
            'sektor' => 'required',
        ];
    }
}
