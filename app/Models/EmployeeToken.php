<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeToken extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'created_date', 'expired_date', 'token', 'user_id', 'uid', 'status',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
