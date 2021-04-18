<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentsRequest extends FormRequest
{
    /**
     *
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *
     *
     * 
     * @return array
     */
    public function rules()
    {
        return [
            
            'email' => 'required|email',
            'merchant' => 'required',
            'amount' => 'required',
        ];
    }
}
