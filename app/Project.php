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
    'project_lead_id',
    'project_type_id',
    'probability',
    'start_date',
    'anticipated_price',
    'duration'


    ];
}
