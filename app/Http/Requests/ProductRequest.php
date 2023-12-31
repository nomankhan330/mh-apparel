<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        if($this->product_id)
        {
            $rules = [
                'name' => 'required|unique:products,name,'.$this->product_id,
                'description' => 'required',
                'category' => 'required|not_in:0',
            ];
        }
else
{
    $rules = [
        'name' => 'required|unique:products,name',
        'description' => 'required',
        'category' => 'required|not_in:0',
    ];
}

       /* if (!($this->request->get('category_id'))) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }*/
        return $rules;
    }
}
