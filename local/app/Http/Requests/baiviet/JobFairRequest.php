<?php

namespace App\Http\Requests\baiviet;

use Illuminate\Foundation\Http\FormRequest;

class JobFairRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'tt_title'=>'required | unique:uec_area,area_name',
            'tt_img'=>'required',
            'tt_content' => 'required'
        ];
    }
    public function messages() {
        return [
            'tt_title.unique'=>'Tin tức này đã tồn tại',
            'tt_title.required'=>'Tin tức không được để trống',
            'tt_img.required'=>'Ảnh minh họa không được để trống',
            'tt_content.required' => 'Nội dung tin không được để trống'
        ];
    }
}
