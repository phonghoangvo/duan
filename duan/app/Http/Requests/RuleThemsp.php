<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleThemsp extends FormRequest
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
            'tsp' => ['required'],
            'gia' => ['required'],
            'giamgia'=> ['required'],
            'ncc'=> ['required'],
            'nxb'=> ['required'],
            'tg'=> ['required'],
            'nd'=> ['required','regex:/\d{1,2}\/\d{1,2}\/\d{4}/'],
            'tomtat'=> ['required'],
            'dm'=> ['required'],
            'img'=> ['required']
        ];
    }
    public function messages(){
        return [
            'tsp.required' => 'Phải nhập tên sản phẩm',
            'gia.required' => 'Phải nhập giá sản phẩm',
            'giamgia.required'=> 'Có thể nhập 0',
            'ncc.required'=> 'Phải nhập nhà cung cấp',
            'nxb.required'=> 'Phải nhập nhà xuất bản',
            'tg.required'=> 'Phải nhập tên tác giả',
            'nd.required'=> 'Cần nhập ngày đăng ',
            'tomtat.required'=> 'Phải có tóm tắt',
            'dm.required'=> 'Phải có danh mục sản phẩm',
            'img.required'=> 'Phải có hình ảnh'
        ];
    }
}
