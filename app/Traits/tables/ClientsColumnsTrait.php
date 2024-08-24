<?php

namespace App\Traits\Tables;

use App\Traits\ModelHelperTrait;
use App\Traits\General\GeneralSettings;

trait ClientsColumnsTrait
{
    use ModelHelperTrait, GeneralSettings;

    /**
     * Get columns for the 'employees' table.
     *
     * @return array
     */
    public function getClientsColumns()
    {
        // Modify these queries to select the correct columns
        $position = $this->Positions()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $country = $this->Countries();
        $working_places = $this->WorkingPlaces()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        $hearing_about = $this->HearingAbout()->select('id_setting as value', 'title_setting as label')->get()->toArray();
        

        return [
            'client_code' => ['label' => 'Client Code', 'type' => 'text', 'default' => '', 'hidden' => false],
            'name' => ['label' => 'Name', 'type' => 'text', 'default' => '', 'hidden' => false],
            'middle_name' => ['label' => 'Middle Name', 'type' => 'text', 'default' => '', 'hidden' => false],
            'last_name' => ['label' => 'Last Name', 'type' => 'text', 'default' => '', 'hidden' => false],
            'name_ar' => ['label' => 'الاسم باللغة العربية', 'type' => 'text', 'default' => '', 'hidden' => false],
            'position_id_fk' => [
                'label' => 'Position', 
                'type' => 'select', 
                'options' => $position,
                'default' => null,
                'hidden' => false
            ],
            'country' => [
                'label' => 'Country', 
                'type' => 'select', 
                'options' => $country,
                'default' => null,
                'hidden' => false
            ],
            'city' => ['label' => 'City', 'type' => 'text', 'default' => '', 'hidden' => false],
            'adress' => ['label' => 'Address', 'type' => 'text', 'default' => '', 'hidden' => false],
            'university' => ['label' => 'University', 'type' => 'text', 'default' => '', 'hidden' => false],
            'faculty' => ['label' => 'Faculty', 'type' => 'text', 'default' => '', 'hidden' => false],
            'specialty' => ['label' => 'Specialty', 'type' => 'text', 'default' => null, 'hidden' => false],
            'mob' => ['label' => 'Mobile', 'type' => 'text', 'default' => null, 'hidden' => false],
            'mob2' => ['label' => 'Mobile 2', 'type' => 'text', 'default' => null, 'hidden' => false],
            'email' => ['label' => 'Email', 'type' => 'Email', 'default' => '', 'hidden' => false],
            'working_place' => [
                'label' => 'Place Work', 
                'type' => 'select', 
                'options' => $working_places,
                'default' => null,
                'hidden' => false
            ],
            'heard_about' => [
                'label' => 'Hearing About', 
                'type' => 'select', 
                'options' => $hearing_about,
                'default' => null,
                'hidden' => false
            ],
        ];
    }
}
