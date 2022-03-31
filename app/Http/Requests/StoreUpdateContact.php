<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateContact extends FormRequest
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
        $id= $this->segment(2);
        return [
           
            'name' => ['required', 'min:5'],
            'contact' => ['required', 'numeric', 'digits:9',  Rule::unique('contacts')->ignore($id)],
            'email' => ['required', 'email',   Rule::unique('contacts')->ignore($id) ],
            
        ];
    }
}
