<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
            'last_name',
            'middle_name',
            'address',
            'country_id',
            'state_id',
            'city_id',
            'department_id',
            'birthdate',
            'date_hired',
            'zip_code',
    ];

    public function department()
    {
      return  $this->belongsTo(Department::class);
    }

}
