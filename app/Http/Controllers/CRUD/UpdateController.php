<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Traits\ModelHelperTrait;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use App\Traits\Tables\EmployeeColumnsTrait;
use App\Traits\Validation\ValidationTrait;

class UpdateController extends Controller
{
    use ModelHelperTrait , EmployeeColumnsTrait , ValidationTrait;

    public function edit(Request $request)
    {
        $view = $request->view;
        $table = $request->table;
        $id = $request->id;

        $columns = [];

        switch ($table) {
            case 'employees':
                $columns = $this->getEmployeeColumns();
                break;
            default:
                abort(404, 'Table not found');
        }


        // Determine the model class based on the table name
        $modelClass = $this->getModelClass($table);
    
        if ($modelClass) {    
            $data = $modelClass::with($this->getRelationships($modelClass))->find($id);

            // Return success response with the view and data
            return view('create.create', compact('columns' , 'table' , 'data'));
        } else {
            // Handle the case where the model class is not found
            return response()->json(['error' => 'Model not found'], 404);
        }    
    }

    
    public function update(Request $request)
    {
        $table = $request->table;
        $id = $request->id;
        
        // Ensure $id is valid and exists
        if (is_null($id) || !DB::table($table)->where('id', $id)->exists()) {
            return response()->json(['message' => 'Record not found'], 404);
        }
    
        // Get validation rules and messages from the trait
        $rules = $this->getValidationRules($request, $table, $id);
        $messages = $this->getValidationMessages();
    
        // Create a validator instance and validate the request
        $validator = Validator::make($request->all(), $rules, $messages);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Proceed with the update logic
        $requestData = $request->except(['_token', 'password_confirmation', 'table']);
    
        if (isset($requestData['password'])) {
            $requestData['password'] = Hash::make($requestData['password']);
        }
    
        if ($request->hasFile('personal_photo')) {
            $fileName = time() . '.' . $request->file('personal_photo')->extension();
            $destinationPath = public_path('images/' . $table);
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $request->file('personal_photo')->move($destinationPath, $fileName);
            $requestData['personal_photo'] = 'images/' . $table . '/' . $fileName;
        }
    
        DB::table($table)->where('id', $id)->update($requestData);
    
        return redirect()->back()->with('success', 'Record Updated successfully!');
    }
    }