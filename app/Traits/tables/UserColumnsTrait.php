<?php

namespace App\Traits\Tables;

use App\Traits\ModelHelperTrait;
use App\Traits\General\GeneralSettings;

trait UserColumnsTrait
{
    use ModelHelperTrait, GeneralSettings;

    /**
     * Get columns for the 'users' table.
     *
     * @return array
     */
    public function getUserColumns()
    {

        $roles = [
            ['value' => 1, 'label' => 'admin'],
            ['value' => 2, 'label' => 'manager'],
            ['value' => 3, 'label' => 'employee'],
        ];

        $tasks = [
            ['value' => 1, 'label' => 'Yes'],
            ['value' => 2, 'label' => 'No'],
        ];

        $employees = $this->Employees()->select('id as value', 'employee as label')->get()->toArray();
        $branches = $this->Branches()->select('id as value', 'title as label')->get()->toArray();

        return [
            'emp_code' => ['label' => 'Employee', 'type' => 'select', 'options' => $employees, 'default' => null, 'hidden' => false],
            'user_name' => ['label' => 'Name', 'type' => 'text', 'default' => '', 'hidden' => false],
            'user_username' => ['label' => 'Username', 'type' => 'text', 'default' => '', 'hidden' => false],
            'magles_mem_code' => ['label' => 'Magles Mem Code', 'type' => 'text', 'default' => 0, 'hidden' => true],
            'user_email' => ['label' => 'Email', 'type' => 'email', 'default' => 'email@email', 'hidden' => true],
            'role_id_fk' => ['label' => 'Role', 'type' => 'select', 'options' => $roles, 'default' => 2, 'hidden' => false],
            'system_structure_id_fk' => ['label' => 'System Structure', 'type' => 'text', 'default' => 0, 'hidden' => true],
            'head_dep_id_fk' => ['label' => 'Head Department', 'type' => 'text', 'default' => 0, 'hidden' => true],
            'dep_job_id_fk' => ['label' => 'Department Job', 'type' => 'text', 'default' => 0, 'hidden' => true],
            'administration_id' => ['label' => 'Administration', 'type' => 'text', 'default' => null, 'hidden' => true],
            'user_phone' => ['label' => 'Phone', 'type' => 'text', 'default' => '', 'hidden' => false],
            'user_id_number' => ['label' => 'Card Number', 'type' => 'text', 'default' => '', 'hidden' => false],
            'user_photo' => ['label' => 'Photo', 'type' => 'file', 'default' => null, 'hidden' => true],
            'last_login' => ['label' => 'Last Login', 'type' => 'datetime', 'default' => 0, 'hidden' => true],
            'approved' => ['label' => 'Approved', 'type' => 'checkbox', 'default' => 0, 'hidden' => true],
            'is_logged' => ['label' => 'Is Logged', 'type' => 'checkbox', 'default' => 0, 'hidden' => true],
            'branch_id_fk' => ['label' => 'Branch', 'type' => 'text', 'default' => null, 'hidden' => true],
            'main_branch_id_fk' => ['label' => 'Main Branch', 'type' => 'text', 'default' => null, 'hidden' => true],
            'sub_branch_id_fk' => ['label' => 'Sub Branch', 'type' => 'select', 'default' => null, 'options' => $branches,'hidden' => false],
            'select_t_employee' => ['label' => 'Select Employee Tasks', 'type' => 'select', 'options' => $tasks, 'default' => 1, 'hidden' => false],
            'user_pass' => ['label' => 'Password', 'type' => 'password', 'default' => null, 'hidden' => false],
            'user_pass_confirmation' => ['label' => 'Password Confirmation', 'type' => 'password','default' => null, 'hidden' => false],
        ];
    }
}
