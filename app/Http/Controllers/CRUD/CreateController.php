<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Traits\ModelHelperTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use App\Traits\Tables\EmployeeColumnsTrait;
use App\Traits\Tables\UserColumnsTrait;
use App\Traits\Tables\ClientsColumnsTrait;
use App\Traits\Tables\BranchesColumnsTrait;
use App\Traits\Validation\ValidationTrait;

class CreateController extends Controller
{
    use ModelHelperTrait , EmployeeColumnsTrait , UserColumnsTrait , ClientsColumnsTrait , BranchesColumnsTrait, ValidationTrait;

    public function add(Request $request)
    {
        $table = $request->table;
        $columns = [];

        switch ($table) {
            case 'employees':
                $columns = $this->getEmployeeColumns();
                break;
        
            case 'users':
                $columns = $this->getUserColumns();
                break;
        
            case 'clients':
                $columns = $this->getClientsColumns();
                break;

            case 'branch_settings':
                $columns = $this->getBranchesColumns();
                break;
        
            default:
                abort(404, 'Table not found');
        }
        
        return view('create.create', compact('columns' , 'table'));
    }




    public function create(Request $request)
    {
        $table = $request->table;

        // Get validation rules and messages from the trait
        $rules = $this->getValidationRules($request, $table);
        $messages = $this->getValidationMessages();

        // Create a validator instance and validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Initialize $fileName variable
        $fileName = null;

        // Merge the filename with request data
        $requestData = $request->all();

        if (isset($requestData['password'])) {
            $requestData['password'] = Hash::make($requestData['password']);
        }

        if (isset($requestData['user_pass'])) {
            $requestData['user_pass'] = Hash::make($requestData['user_pass']);
        }

        if ($request->hasFile('personal_photo')) {
            // Generate a unique filename based on current time and file extension
            $fileName = time() . '.' . $request->file('personal_photo')->extension();
        
            // Define the destination path in the public directory
            $destinationPath = public_path('images/' . $table);
        
            // Ensure the destination directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
        
            // Move the uploaded file to the 'public/images/sections' directory with the generated filename
            $request->file('personal_photo')->move($destinationPath, $fileName);
        
            // Merge the filename with request data
            $requestData['personal_photo'] = 'images/' . $table . '/' . $fileName;
        }
        
        $created_at = $request->has('created_at') ? Carbon::createFromFormat('m/d/Y', $request->input('created_at'))->format('Y-m-d H:i:s') : now();
        $updated_at = now();

        $requestData['created_at'] = $created_at;
        $requestData['updated_at'] = $updated_at;

        unset($requestData['table']);
        unset($requestData['password_confirmation']);
        unset($requestData['_token']);

        $record = DB::table($table)->insert($requestData);
        
        /*
        $lastInsertedId = DB::getPdo()->lastInsertId();
        $data = DB::table($table)->find($lastInsertedId);
        */
        
        return redirect()->back()->with('success', 'Record created successfully!');
    }

}
