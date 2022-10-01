<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
class SupervisorshiftRequest extends FormRequest
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
                'shift_prefix'=>[
                    'required'
                ],
                'shift_date'=>[
                    'required'
                ]
            ];
        }
        else{
            return [
                'lab_id'=>[
                    'required'
                ],
                'shift_prefix'=>[
                    'required'
                ],
                'shift_date'=>[
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
