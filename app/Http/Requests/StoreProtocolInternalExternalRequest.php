<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProtocolInternalExternalRequest extends FormRequest
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
            'year' => 'required',
            'reference_number' => 'required',
            'provenance' => 'required', 
            'classification_code' => 'required',
            'doc_date' => 'required',
            'subject' => 'required', 
            'name_of_expander' => 'required',
            'name_of_recipient' => 'required', 
            'date_of_receipt' => 'required',
        ];
    }
}
