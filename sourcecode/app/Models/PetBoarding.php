<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetBoarding extends Model
{
    use HasFactory;
    protected $fillable = ['owner_name',
                           'pet_name',
                           'pet_age',  
                           'entry_date', 
                           'exit_date',
                           'file'];
}
