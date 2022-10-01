<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
class PatientRequest extends FormRequest
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
                'fname'=>[
                    'required'
                ],
                'lname'=>[
                    'required'
                ],
                'guardian'=>[
                    'required'
                ],
                'guardian_name'=>[
                    'required'
                ],
                'mobile_no1'=>[
                    'required'
                ],
                'gender'=>[
                    'required',
                    Rule::in(['male','female']),
                ],
                'dob'=>'required|date_format:d-m-Y',
                'email'=>[
                    'email',
                    Rule::unique('patients')->ignore($this->patient)->whereNull('deleted_at')
                ],
                'address'=>'required'
            ];
        }
        else{
            return [
                'fname'=>[
                    'required'
                ],
                'lname'=>[
                    'required'
                ],
                'guardian'=>[
                    'required'
                ],
                'guardian_name'=>[
                    'required'
                ],
                'mobile_no1'=>[
                    'required'
                ],
                'gender'=>[
                    'required',
                    Rule::in(['male','female']),
                ],
                'dob'=>'required|date_format:d-m-Y',
                'email'=>[
                    'email',
                    Rule::unique('patients')->ignore($this->patient)->whereNull('deleted_at')
                ],
                'address'=>'required'
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
