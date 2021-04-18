<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventsRequest extends FormRequest
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
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'title' => 'required',
            'start_time' => 'required|date_format:'.config('app.date_format').' H:i:s',
            'venue' => 'required',
        ];
    }
}
