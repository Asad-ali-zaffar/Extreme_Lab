<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
class OrganizationRequest extends FormRequest
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
                'name_eng'=>[
                    'required'
                ],
                'cash_gl_account'=>[
                    'required'
                ]
            ];
        }
        else{
            return [
                'name_eng'=>[
                    'required'
                ],
                'cash_gl_account'=>[
                    'required'
                ]
            ];
        }
        
    }

}
