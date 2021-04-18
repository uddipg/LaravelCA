<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentsRequest extends FormRequest
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
