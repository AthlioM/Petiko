<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $taskid = $this->route('task');

        return [
            'task' => 'required|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'task.required' => 'Campo Tarefa deve conter pelo menos 1 caracter',
            'task.min' => 'Campo Tarefa deve conter pelo menos 1 caracter',
        ];
    }

   
}
