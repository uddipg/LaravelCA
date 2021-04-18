<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketsRequest extends FormRequest
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
            'event_id' => 'required',
            'title' => 'required',
            'amount' => 'required',
            'available_from' => 'required|date_format:'.config('app.date_format'),
            'available_to' => 'required|date_format:'.config('app.date_format'),
            'price' => 'required',
        ];
    }
}
