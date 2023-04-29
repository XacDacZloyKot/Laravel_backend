<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /*
     Determine if the user is authorized to make this request.
    */
    public function authorize(): bool
    {
        return auth("admin")->check();
    }

    public function rules(): array
    {
        return [
            "title" => ["required"],
            "preview" => ["required"],
            "description" => ["required"],
            "thumbnail" => ["image"],
        ];
    }
}
