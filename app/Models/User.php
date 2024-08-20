<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'user_username',
        'emp_code',
        'magles_mem_code',
        'user_pass',
        'user_email',
        'role_id_fk',
        'system_structure_id_fk',
        'head_dep_id_fk',
        'dep_job_id_fk',
        'administration_id',
        'user_phone',
        'user_id_number',
        'user_photo',
        'last_login',
        'approved',
        'is_logged',
        'branch_id_fk',
        'main_branch_id_fk',
        'sub_branch_id_fk',
        'select_t_employee',
    ];

    protected $hidden = [
        'user_pass',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Define the one-to-many relationship with Employee using emp_code
    public function employees()
    {
        return $this->hasMany(Employee::class, 'emp_code', 'emp_code');
    }
}
