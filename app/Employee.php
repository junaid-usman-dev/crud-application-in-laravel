<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public function department()
    {
        // return $this->hasMany(Employee::class);
        return $this->hasMany('App\Department', 'employee_id');
    }
    public function language()
    {
        // return $this->hasMany(Employee::class);
        return $this->hasMany('App\Language', 'employee_id');
    }
}
