<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWidgetRequest extends FormRequest
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
            'name' => 'required',
            'keyword' => 'required|unique:widgets,keyword, '.$this->id.'',
            'short_code' => 'required|unique:widgets,short_code, '.$this->id.''
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Bạn chưa nhập tên cho Widget',
            'keyword.required' => 'Bạn chưa nhập từ khóa cho Widget',
            'keyword.unique' => 'Từ khóa đã tồn tại, hãy chọn từ khóa khác',
            'short_code.required' => 'Bạn chưa nhập mã ngắn cho Widget',
            'short_code.unique' => 'Mã ngắn đã tồn tại, hãy chọn mã ngắn khác'
        ];
    }
}
