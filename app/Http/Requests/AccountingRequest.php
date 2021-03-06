<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountingRequest extends FormRequest
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
            'description' => 'required|string',
            'amount' => 'required',
            'type' => 'required|digits_between:0,1',
            'period' => 'required|digits_between:0,6',
            'startdate' => '',
            'enddate' => ''
        ];
    }
}
