<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => ["required", "string", "min:3", "max:255"],
            "type_id" => ['required', 'string', 'integer', 'exists:types,id'],
            "technologies" => ['required', "array", "exists:technologies,id"],
            "description" => ["string", "min:5", "nullable"],
            "image_url" => ["url"],
            "git_url" => ["required", "url"]
        ];
    }
}
