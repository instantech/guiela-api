<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ProcessRequest class
 * 
 * @author Anitche Chisom <anitchec.dev@gmail.com>
 */
class ProcessRequest extends FormRequest
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
            'domestic'      => ['required'],
            'foreign'       => ['required'],
            'identifier'    => ['required'],
            'matcher'       => ['required'],
            'sum'           => ['nullable']
        ];
    }
}
