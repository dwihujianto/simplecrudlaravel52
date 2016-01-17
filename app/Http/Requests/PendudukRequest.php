<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PendudukRequest extends Request
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
            '_name'     => 'required',
            '_gender'   => 'required',
            '_address'  => 'required',
            '_city'     => 'required'
        ];
    }
}
