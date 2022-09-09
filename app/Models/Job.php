<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job_title',
        'job_description',
        'company',
        'posted_date',
        'cpc_value',
        'last_updated'
    ];

    protected $casts = [
        'posted_date' => 'datetime',
        'last_updated' => 'datetime',
    ];
}
