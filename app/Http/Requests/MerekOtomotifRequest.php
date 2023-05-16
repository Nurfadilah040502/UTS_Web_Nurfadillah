<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MerekOtomotifRequest extends FormRequest
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
            'merek' => 'required',
            'asal_negara' => 'required',
        
        ];
    }
    public function messages()
    {
        return[
            'merek.required' => 'Merek tidak boleh kosong',
            'asal_negara.required' => 'Asal Negara tidak boleh kosong',

        ];
    }
}
