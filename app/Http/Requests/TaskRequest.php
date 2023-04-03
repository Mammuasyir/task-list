<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {

        $rule_activity_unique = Rule::unique('tasks', 'activity');
        if($this->method() !== 'POST') {
            $rule_activity_unique->ignore($this->route()->parameter('id'));

        }

        return [
            'name' => ['required','min:3','max:10'],
            'activity' => ['required', $rule_activity_unique],
        ];
    }

    public function messages(){
        return [
            'name.required' => 'nama pengguna wajib diisi',
            'required' => 'kolom ini wajib diisi',
            'min'      => 'minimal 3 karakter',
        ];
    }
}
