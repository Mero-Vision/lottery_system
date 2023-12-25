<?php

namespace App\Http\Requests\Lottery;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LotteryCreateRequest extends FormRequest
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
            'lottery_name'=>['required'],
            'lottery_image'=>['required','image'],
            'time'=>['required',Rule::in('1:00 PM','6:00 PM','8:00 PM')],
            'date'=>['required'],
            'description'=>['required']
        ];
    }
}