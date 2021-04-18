<?php

namespace App\Http\Requests\Guest;

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
     * @return array
     */
    public function rules()
    {
        return [
            'total' => 'required|numeric',
            'tickets' => 'required',
            'email' => 'required|email',
            'stripeToken' => 'required'
        ];
    }
}
