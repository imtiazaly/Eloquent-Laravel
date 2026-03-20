<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class user extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    // protected $fillable = ['username', 'useremail', 'userage'];
    
}
