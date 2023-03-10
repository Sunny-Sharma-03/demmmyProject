<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data'; 
    protected $fillable =
     [
        'id',
        'name',
        'father_name',
        'address',
        'email',
        'contact'
    ];  
}
