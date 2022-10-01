<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DoctorQualificationsRequest extends FormRequest
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
        if($this->doctor)
        {
            return [
                'qualification'=>'required',
                'institute'=>'required',
                'remarks_qualification'=>'required'
            ];
        }
        else{
            return [
                'qualification'=>'required',
                'institute'=>'required',
                'remarks_qualification'=>'required'
            ];
        }

       
    }
}
