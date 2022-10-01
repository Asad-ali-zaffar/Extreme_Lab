<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
class CentersRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if($this->patient)
        {
            return [
                'lab_id'=>[
                    'required'
                ],
                'name_eng'=>[
                    'required'
                ],
                'ph1'=>[
                    'required'
                ],
                'address1'=>[
                    'required'
                ]
            ];
        }
        else{
            return [
                'lab_id'=>[
                    'required'
                ],
                'name_eng'=>[
                    'required'
                ],
                'ph1'=>[
                    'required'
                ],
                'address1'=>[
                    'required'
                ]
            ];
        }
        
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'dob'=>'date of birth',
        ];
    }
}
