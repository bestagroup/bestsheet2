<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company_name'                  ,
        'CEO'                           ,
        'portfo_status'                 ,
        'flow_level'                    ,
        'progress_percentage'           ,
        'activity_status'               ,
        'start_date'                    ,
        'amount_request_accept'         ,
        'amount_deposited'              ,
        'amount_commitment_first_stage' ,
        'first_stage_payment'           ,
        'amount_commitment_second_stage',
        'second_stage_payment'          ,
        'amount_commitment_third_stage' ,
        'third_stage_payment'           ,
        'amount_commitment_fourth_stage',
        'fourth_stage_payment'          ,
        'amount_commitment_fifth_stage' ,
        'fifth_stage_payment'           ,
        'commitment_balance'            ,
        'logo'                          ,
    ];

}
