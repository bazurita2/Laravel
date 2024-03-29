<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usercrud extends Model
{
    use HasFactory;

    protected $table = 'usercrud';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'address',
    ];
}
