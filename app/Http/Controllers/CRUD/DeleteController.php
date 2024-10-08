<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Traits\ModelHelperTrait;

class DeleteController extends Controller
{
    use ModelHelperTrait;

    public function delete(Request $request)
    {
        $table = $request->table;
    
        // Determine the model class based on the table name
        $modelClass = $this->getModelClass($table);
    
        if (!$modelClass) {
            return response()->json(['error' => 'Model not found'], 404);
        }
    
        if($table == 'users'){
        // Get the record from the database using user_id as the primary key
        $record = $modelClass::where('user_id', $request->id)->first();
        }else{
        // Get the record from the database
        $record = $modelClass::find($request->id);
        }
        
    
        if (!$record) {
            return response()->json(['error' => 'Record not found'], 404);
        }
    
        // Delete associated image if it exists
        if ($record->image) {
            $existingImagePath = storage_path('app/public/' . $record->image);
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        }
    
        // Delete the record from the database
        $deleted = $record->delete();
    
        if ($deleted) {
            return response()->json(['message' => 'record deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'failed delete'], 500);
        }
    }

}