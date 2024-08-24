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

        if ($request->has('client_code')) {
            $rules['client_code'] = ['required', 'string', 'max:255'];
        }

        if ($request->has('name')) {
            $rules['name'] = ['required', 'string', 'max:255'];
        }

        if ($request->has('middle_name')) {
            $rules['middle_name'] = ['nullable', 'string', 'max:255'];
        }

        if ($request->has('last_name')) {
            $rules['last_name'] = ['required', 'string', 'max:255'];
        }

        if ($request->has('name_ar')) {
            $rules['name_ar'] = ['nullable', 'string', 'max:255'];
        }

        if ($request->has('position_id_fk')) {
            $rules['position_id_fk'] = ['required', 'integer', 'exists:settings,id_setting'];
        }

        if ($request->has('country')) {
            $rules['country'] = ['required', 'string', 'max:255'];
        }

        if ($request->has('city')) {
            $rules['city'] = ['required', 'string', 'max:255'];
        }

        if ($request->has('adress')) {
            $rules['adress'] = ['required', 'string', 'max:255'];
        }

        if ($request->has('university')) {
            $rules['university'] = ['nullable', 'string', 'max:255'];
        }

        if ($request->has('faculty')) {
            $rules['faculty'] = ['nullable', 'string', 'max:255'];
        }

        if ($request->has('specialty')) {
            $rules['specialty'] = ['nullable', 'string', 'max:255'];
        }

        if ($request->has('mob')) {
            $rules['mob'] = ['required', 'string', 'max:20'];
        }

        if ($request->has('mob2')) {
            $rules['mob2'] = ['nullable', 'string', 'max:20'];
        }

        if ($request->has('email')) {
            $rules['email'] = ['nullable', 'email', 'max:255'];
        }

        if ($request->has('working_place')) {
            $rules['working_place'] = ['required', 'integer', 'exists:settings,id_setting'];
        }

        if ($request->has('heard_about')) {
            $rules['heard_about'] = ['nullable', 'integer', 'exists:settings,id_setting'];
        }

        // Other validation rules from before
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
            'client_code.required' => 'The client code is required.',
            'client_code.string' => 'The client code must be a string.',
            'client_code.max' => 'The client code may not be greater than 255 characters.',
    
            'name.required' => 'The name is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
    
            'middle_name.string' => 'The middle name must be a string.',
            'middle_name.max' => 'The middle name may not be greater than 255 characters.',
    
            'last_name.required' => 'The last name is required.',
            'last_name.string' => 'The last name must be a string.',
            'last_name.max' => 'The last name may not be greater than 255 characters.',
    
            'name_ar.string' => 'The Arabic name must be a string.',
            'name_ar.max' => 'The Arabic name may not be greater than 255 characters.',
    
            'position_id_fk.required' => 'The position is required.',
            'position_id_fk.integer' => 'The position must be an integer.',
            'position_id_fk.exists' => 'The selected position is invalid.',
    
            'country.required' => 'The country is required.',
            'country.string' => 'The country must be a string.',
            'country.in' => 'The selected country is invalid.',
    
            'city.required' => 'The city is required.',
            'city.string' => 'The city must be a string.',
            'city.max' => 'The city may not be greater than 255 characters.',
    
            'adress.required' => 'The address is required.',
            'adress.string' => 'The address must be a string.',
            'adress.max' => 'The address may not be greater than 255 characters.',
    
            'university.string' => 'The university name must be a string.',
            'university.max' => 'The university name may not be greater than 255 characters.',
    
            'faculty.string' => 'The faculty name must be a string.',
            'faculty.max' => 'The faculty name may not be greater than 255 characters.',
    
            'specialty.string' => 'The specialty must be a string.',
            'specialty.max' => 'The specialty may not be greater than 255 characters.',
    
            'mob.required' => 'The mobile number is required.',
            'mob.string' => 'The mobile number must be a string.',
            'mob.max' => 'The mobile number may not be greater than 20 characters.',
    
            'mob2.string' => 'The secondary mobile number must be a string.',
            'mob2.max' => 'The secondary mobile number may not be greater than 20 characters.',
    
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email may not be greater than 255 characters.',
    
            'working_place.required' => 'The place of work is required.',
            'working_place.integer' => 'The place of work must be an integer.',
            'working_place.exists' => 'The selected place of work is invalid.',
    
            'heard_about.integer' => 'The hearing about option must be an integer.',
            'heard_about.exists' => 'The selected hearing about option is invalid.',
        ];
    }  
}
