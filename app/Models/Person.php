<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = ['emso', 'name', 'age', 'description', 'country_id'];


    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
