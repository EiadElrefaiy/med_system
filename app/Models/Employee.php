<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'employee',
        'name_as_card',
        'management_id_fk',
        'emp_code',
        'card_num',
        'status',
        'phone',
        'personal_photo',
        'birth_date',
        'social',
        'address',
        'email',
        'date_start_work',
        'date_end_work',
        'jop',
        'type_work',
        'facebook',
        'type_employment',
        'place_work',
        'way_received_salary',
        'cash_number',
        'main_branch_id_fk',
        'sub_branch_id_fk',
        'salary_hour',
        'salary_month',
        'publisher',
        'date',
        'employee_type',
    ];

    // Define the inverse relationship with User
    public function user()
    {
        return $this->belongsTo(User::class, 'emp_code', 'emp_code');
    }
}
