<?php

namespace App\Traits;

use App\Models\BranchesSettings;
use App\Models\Employee;
use App\Models\Setting;
use App\Models\User;

trait ModelHelperTrait
{
    /**
     * Get the model class based on the table name
     *
     * @param string $table
     * @return string|null
     */
    private function getModelClass($table)
    {
        $models = [
            'users' => User::class,
            'settings' => Setting::class,
            'employees' => Employee::class,
            'sub_branches' => BranchesSettings::class,
        ];

        return $models[$table] ?? null;
    }

    /**
     * Get the relationships to be eager loaded based on the model class
     *
     * @param string $modelClass
     * @return array
     */
    private function getRelationships($modelClass)
    {
        $relationships = [
            Setting::class => ['employees'],
            Employee::class => ['settings'],
            // Add other relationships here
        ];

        return $relationships[$modelClass] ?? [];
    }
}