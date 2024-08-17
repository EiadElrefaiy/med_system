<?php

namespace App\Traits\General;

use App\Traits\ModelHelperTrait;

trait generalSettings
{
    use ModelHelperTrait;

    // Define the model class property
    protected $modelClass;

    // Constructor to initialize the model class
    public function Management()
    {
        $modelClass = $this->getModelClass('settings');
        $management = $modelClass::where('type' , 17)->select('id' , 'title_setting');
        return $management;
    }

    public function SocialStatus()
    {
        $modelClass = $this->getModelClass('settings');
        $social_status = $modelClass::where('type' , 7)->select('id' , 'title_setting');
        return $social_status;
    }

    public function TypeWork()
    {
        $modelClass = $this->getModelClass('settings');
        $type_work = $modelClass::where('type' , 21)->select('id' , 'title_setting');
        return $type_work;
    }

    public function TypeEmployment()
    {
        $modelClass = $this->getModelClass('settings');
        $type_employment = $modelClass::where('type' , 21)->select('id' , 'title_setting');
        return $type_employment;
    }

    public function EmploymentPlace()
    {
        $modelClass = $this->getModelClass('settings');
        $employment_place = $modelClass::where('type' , 9)->select('id' , 'title_setting');
        return $employment_place;
    }

    public function WayRecivedSalary()
    {
        $modelClass = $this->getModelClass('settings');
        $way_recived = $modelClass::where('type' , 10)->select('id' , 'title_setting');
        return $way_recived;
    }

    public function Branches()
    {
        $modelClass = $this->getModelClass('sub_branches');
        $branches = $modelClass::select('id' , 'title');
        return $branches;
    }
}
