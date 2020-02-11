<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    /**
     * @var array The attributes that are mass assignable.
     */
    protected $fillable = [
        'subject', 'origin_model', 'origin_id', 'url', 'method', 'ip', 'agent', 'user_id'
    ];

    /**
     * @var array The attributes that should be hidden for arrays and API output
     */
    protected $hidden = ['url' , 'agent'];

}
