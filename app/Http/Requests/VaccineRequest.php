<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VaccineRequest extends FormRequest
{

    public function authorize(): bool
    {
        return auth()->user()?->role->name === 'admin';
    }


    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'doses' => 'required|integer|min:1',
            'interval_days' => 'nullable|integer|min:0',
        ];
    }
}
