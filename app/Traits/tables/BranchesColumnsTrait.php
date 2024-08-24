<?php

namespace App\Traits\Tables;

use App\Traits\ModelHelperTrait;
use App\Traits\General\GeneralSettings;

trait BranchesColumnsTrait
{
    use ModelHelperTrait, GeneralSettings;

    /**
     * Get columns for the 'employees' table.
     *
     * @return array
     */
    public function getBranchesColumns()
    {
        $branches = $this->Branches()->select('id as value', 'title as label')->get()->toArray();
        return [
            'title' => ['label' => 'Title', 'type' => 'text', 'default' => '', 'hidden' => false],
            'from_id' => [
                'label' => 'Branches', 
                'type' => 'select', 
                'options' => $branches,
                'default' => null,
                'hidden' => false
            ],
            'lat_map' => ['label' => 'Lat', 'type' => 'text', 'default' => '', 'hidden' => false],
            'long_map' => ['label' => 'Long', 'type' => 'text', 'default' => '', 'hidden' => false],
        ];
    }
}
