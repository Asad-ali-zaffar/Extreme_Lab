<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DoctorRequest extends FormRequest
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
                'nature'=>'required',
                'name_eng'=>'required',
                'dept_id'=>'required',
                'spec_id'=>'required',
                'gender'=>'required',
                'martial_status'=>'required',
                'room_no'=>'required'
            ];
        }
        else{
            return [
                'nature'=>'required',
                'name_eng'=>'required',
                'dept_id'=>'required',
                'spec_id'=>'required',
                'gender'=>'required',
                'martial_status'=>'required',
                'room_no'=>'required'
            ];
        }

       
    }
}
