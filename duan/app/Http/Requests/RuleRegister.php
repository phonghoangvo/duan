<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleRegister extends FormRequest
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
            'name' => ['required','min:3','max:20'],
            'lastname' =>['required','max:20'],
            'email' => ['required','\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/'],
            'password'=> ['required'],
            'address' => ['required'],
            'phone'=> ['required']
            // 'tuoi' => 'required|integer|min:16|max:100',
            // 'ns' =>['required','regex:/\d{1,2}\/\d{1,2}\/\d{4}/'],
            // 'cmnd' => 'digits_between:9,10',
            // 'em' => 'email|ends_with:@fpt.edu.vn'
            ];
    }
    public function messages() {
        return [
         'name.required' => 'Không được để trống họ',
         'lastname.required' => 'Không được để trống tên',
         'name.min' => 'Họ tên ngắn quá vậy',
         'email.required'=> 'Không được để trống email',
         'password.required'=>'Không được để trống password',
         'address.required' => 'Không được để trống địa chỉ',
         'phone.required' => 'Không được để trống số điện thoại'
        //  'ns.required' => 'Nhập ngày sinh nữa',
        //  'tuoi.required' => 'Nhập :attribute vào đi',
        //  'cmnd.digits_between' => 'CMND nhập 9 hoặc 10 ký tự'
       ];
     }
}
