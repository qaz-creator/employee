<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable=['country_code','name'];

    public function states()
    {
        // this : the country model
      return  $this->hasMany(State::class);
    }
}