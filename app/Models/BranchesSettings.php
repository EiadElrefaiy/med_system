<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchesSettings extends Model
{
    use HasFactory;
    protected $table = 'branch_settings';
    protected $fillable = [
        'title',
        'form_id',
        'lat_map',
        'long_map',
    ];
}
