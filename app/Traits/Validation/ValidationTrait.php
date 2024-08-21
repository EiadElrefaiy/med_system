<?php

namespace App\Traits\Validation;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

trait ValidationTrait
{
    /**
     * Get validation rules based on the request.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $table
     * @param int|null $id
     * @return array
     */
    public function getValidationRules($request, $table, $id = null)
    {
        $rules = [];
    
        if ($request->has('email')) {
            $rules['email'] = [
                'required', 
                'string', 
                'email', 
                'min:11', 
                Rule::unique($table)->ignore($id)
            ];
        }
    
        if ($request->has('emp_code') && $table == 'employees') {
            $rules['emp_code'] = [
                'required', 
                'string', 
                Rule::unique($table)->ignore($id)
            ];
        }
    
        if ($request->has('card_num')) {
            $rules['card_num'] = [
                'required', 
                'string', 
                Rule::unique($table)->ignore($id)
            ];
        }
    
        if ($request->has('phone')) {
            $rules['phone'] = [
                'required', 
                'string', 
                'min:11', 
                Rule::unique($table)->ignore($id)
            ];
        }
    
        if ($request->has('password')) {
            $rules['password'] = ['required', 'string', 'min:8', 'confirmed'];
            $rules['password_confirmation'] = ['required', 'string', 'min:8'];
        }
        if ($request->has('user_pass')) {
            $rules['user_pass'] = ['required', 'string', 'min:8', 'confirmed'];
            $rules['password_confirmation'] = ['required', 'string', 'min:8'];
        }
    
        if ($request->hasFile('personal_photo')) {
            $rules['personal_photo'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'];
        }
    
        return $rules;
    }
    public function getValidationMessages()
    {
        return [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.min' => 'The email must be at least 11 characters.',
            'email.unique' => 'The email has already been taken.',
            'emp_code.required' => 'The employee code is required.',
            'emp_code.unique' => 'The employee code has already been taken.',
            'card_num.required' => 'The card number is required.',
            'card_num.unique' => 'The card number has already been taken.',
            'phone.required' => 'The phone number is required.',
            'phone.unique' => 'The phone number has already been taken.',
            'password.required' => 'The password is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
            'personal_photo.image' => 'The file must be an image.',
            'personal_photo.mimes' => 'The image must be of type: jpeg, png, jpg, gif, svg.',
            'personal_photo.max' => 'The image may not be greater than 2MB.',
        ];
    }

}
