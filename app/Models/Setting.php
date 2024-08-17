<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'title_setting',
        'have_branch',
        'main_branch_id_fk',
        'sub_branch_id_fk',
        'type',
        'type_name',
        'form_id',
        'title_order',
        'title_color',
        'price',
        'phone',
        'details',
        'value',
    ];
    public function employees() {
        return $this->hasMany(Employee::class);
   }
 

}
