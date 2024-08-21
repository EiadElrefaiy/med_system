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
        $type_employement = $this->TypeEmployment()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $employment_place = $this->EmploymentPlace()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $way_recived_salary = $this->WayRecivedSalary()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $branches = $this->Branches()->select('id as value', 'title as label')->get()->toArray();
        

        return [
            'employee' => ['label' => 'Name', 'type' => 'text', 'default' => '', 'hidden' => false],
            'name_as_card' => ['label' => 'Name as Card', 'type' => 'text', 'default' => '', 'hidden' => false],
            'management_id_fk' => [
                'label' => 'Management', 
                'type' => 'select', 
                'options' => $managment,
                'default' => null,
                'hidden' => false
            ],
            'emp_code' => ['label' => 'Employee Code', 'type' => 'text', 'default' => '', 'hidden' => false],
            'birth_date' => ['label' => 'Birth Date', 'type' => 'date', 'default' => null, 'hidden' => false],
            'card_num' => ['label' => 'Card Number', 'type' => 'text', 'default' => '', 'hidden' => false],
            'phone' => ['label' => 'Mobile', 'type' => 'text', 'default' => '', 'hidden' => false],
            'personal_photo' => ['label' => 'Profile Picture', 'type' => 'file', 'default' => null, 'hidden' => false],
            'social' => [
                'label' => 'Social Status', 
                'type' => 'select', 
                'options' => $social_status,
                'default' => null,
                'hidden' => false
            ],
            'adress' => ['label' => 'Address', 'type' => 'text', 'default' => '', 'hidden' => false],
            'email' => ['label' => 'Email', 'type' => 'email', 'default' => 'email@email', 'hidden' => false],
            'job' => ['label' => 'Job', 'type' => 'text', 'default' => '', 'hidden' => false],
            'date_start_work' => ['label' => 'Start Work Date', 'type' => 'date', 'default' => null, 'hidden' => false],
            'date_end_work' => ['label' => 'End Work Date', 'type' => 'date', 'default' => null, 'hidden' => false],
            'type_work' => [
                'label' => 'Type Work', 
                'type' => 'select', 
                'options' => $type_work,
                'default' => null,
                'hidden' => false
            ],
            'facebook' => ['label' => 'Facebook', 'type' => 'text', 'default' => '', 'hidden' => false],
            'type_employement' => [
                'label' => 'Type Employment', 
                'type' => 'select', 
                'options' => $type_employement,
                'default' => null,
                'hidden' => false
            ],
            'place_work' => [
                'label' => 'Place Work', 
                'type' => 'select', 
                'options' => $employment_place,
                'default' => null,
                'hidden' => false
            ],
            'way_received_salary' => [
                'label' => 'Way Received Salary', 
                'type' => 'select', 
                'options' => $way_recived_salary,
                'default' => null,
                'hidden' => false
            ],
            'cash_number' => ['label' => 'Cash Number', 'type' => 'text', 'default' => '', 'hidden' => false],
            'sub_branch_id_fk' => [
                'label' => 'Branch', 
                'type' => 'select', 
                'options' => $branches,
                'default' => null,
                'hidden' => false 
            ],
        ];
    }
}
