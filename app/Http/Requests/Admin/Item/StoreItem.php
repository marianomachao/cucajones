<?php

namespace App\Http\Requests\Admin\Item;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreItem extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('admin.item.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'type' => ['required', 'string'],
            'active' => ['required', 'boolean'],
            'title' => ['required', 'string'],
            // 'url' => ['required', 'string'],
            // 'order' => ['required', 'integer'],
            'text' => ['sometimes'],
            // 'image' => ['required', 'string'],
            
        ];
    }
}
