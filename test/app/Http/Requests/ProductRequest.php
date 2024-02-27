<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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
        return [
            'product_name' => 'required|min:6',
            'product_price' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'product_name.required' => 'Trường :attribute bắt buộc phải nhập',
            'product_name.min' => 'Tên sản phẩm không được nhỏ hơn :min ký tự',
            'product_price.required' => 'Trường :attribute bắt buộc phải nhập',
            'product_name.integer' => 'Trường :attribute  phải là số'
        ];
    }
    public function attributes()
    {
        return [
            'product_name' => 'Tên sản phẩm',
            'product_price'=> 'Giá sản phẩm' 
        ];
    }
    public function withValidator($validator){
        $validator->after(function($validator){

            if($validator->errors()->count()>0){
                $validator->errors()->add('msg','Có lỗi Xảy ra');
            }
        });
    }
    public function prepareForValidation(){
        $this->merge([
            'create_at' =>date('Y-m-d H:i:s')
        ]);
    }
    protected function failedAuthorization()
    {
       // throw new AuthorizationException('Bạn không có quyền truy cập ');
      // throw new HttpResponseException(redirect('/')->with('msg','Bạn không có quyền truy cập')->with('type','danger'));
      throw new HttpResponseException(abort(404));
    }
}
