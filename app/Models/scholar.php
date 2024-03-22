<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    use HasFactory;

    protected $fillable = [
        'Scholar_Code',
        'Institution',
        'Unit',
        'Area',
        'firstname',
        'lastname',
        'middleinitial',
        'suffix',
        'name_of_member',
        'batch',
        'scholarship_type',
        'Year_level',
        'course',
        'contact',
        'Address',
        'status',
        'Remarks',
        'account'


        


    ];
}