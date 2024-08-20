<?php

namespace App\Traits\Tables;

use App\Traits\ModelHelperTrait;
use App\Traits\General\GeneralSettings;

trait EmployeeColumnsTrait
{
    use ModelHelperTrait, GeneralSettings;

    /**
     * Get columns for the 'employees' table.
     *
     * @return array
     */
    public function getEmployeeColumns()
    {
        // Modify these queries to select the correct columns
        $managment = $this->Management()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $social_status = $this->SocialStatus()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $type_work = $this->TypeWork()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $type_employment = $this->TypeEmployment()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $employment_place = $this->EmploymentPlace()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $way_recived_salary = $this->WayRecivedSalary()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $branches = $this->Branches()->select('id as value', 'title as label')->get()->toArray();
        

        return [
            'employee' => ['label' => 'Name', 'type' => 'text'],
            'name_as_card' => ['label' => 'Name as Card', 'type' => 'text'],
            'management_id_fk' => [
                'label' => 'Management', 
                'type' => 'select', 
                'options' => $managment,
            ],
            'emp_code' => ['label' => 'Employee Code', 'type' => 'text'],
            'birth_date' => ['label' => 'Birth Date', 'type' => 'date'],
            'card_num' => ['label' => 'Card Number', 'type' => 'text'],
            'phone' => ['label' => 'Mobile', 'type' => 'text'],
            'personal_photo' => ['label' => 'Profile Picture', 'type' => 'file'],
            'social' => [
                'label' => 'Social Status', 
                'type' => 'select', 
                'options' => $social_status,
            ],
            'adress' => ['label' => 'Address', 'type' => 'text'],
            'email' => ['label' => 'Email', 'type' => 'email'],
            'job' => ['label' => 'Job', 'type' => 'text'],
            'date_start_work' => ['label' => 'Start Work Date', 'type' => 'date'],
            'date_end_work' => ['label' => 'End Work Date', 'type' => 'date'],
            'type_work' => [
                'label' => 'Type Work', 
                'type' => 'select', 
                'options' => $type_work,
            ],
            'facebook' => ['label' => 'Facebook', 'type' => 'text'],
            'type_employement' => [
                'label' => 'Type Employment', 
                'type' => 'select', 
                'options' => $type_employment,
            ],
            'place_work' => [
                'label' => 'Place Work', 
                'type' => 'select', 
                'options' => $employment_place,
            ],
            'way_received_salary' => [
                'label' => 'Way Received Salary', 
                'type' => 'select', 
                'options' => $way_recived_salary,
            ],
            'cash_number' => ['label' => 'Cash Number', 'type' => 'text'],
            'sub_branch_id_fk' => [
                'label' => 'Branch', 
                'type' => 'select', 
                'options' => $branches,
            ],
        ];
    }
}
