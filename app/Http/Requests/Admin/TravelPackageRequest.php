<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:225',
            'location' => 'required|max:225',
            'about' => 'required',
            'keterangan' => 'required',
            // 'featured_event' => 'required|max:225',
            // 'language' => 'required|max:225',
            // 'food' => 'required|max:225',
            'duration' => 'required|max:225',
            'type' => 'required|max:225',
            'price' => 'required'
        ];
    }
}
