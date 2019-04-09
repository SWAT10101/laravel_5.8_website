<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    // connect to table name
    protected $table = "technical";



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Employee_Number', 'First_Name', 'Last_Name', 'password',
    ];
      
}
