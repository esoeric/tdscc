<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [

    'name',
    'description',
    'status_id',
    'pdm_id',
    'lead_id'

    ];
}
