<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Resources\Json\JsonResource;
class EventRequest extends FormRequest
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
            //
            'event_name' => 'required|max:255',
            'image' => 'required',
            // |image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'time_start' => 'required',
            'time_end' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'event_name' => 'Event is required',
            'image' => 'Image is required or don\'t support mine type',
            'time_start' => 'Time start is required',
            'time_end' => 'Time end is required'
        ];
    }

    public function filters()
    {
        return [
            'event_name' => 'trim|capialize',
            'image' => 'trim'
        ];
    }
}
