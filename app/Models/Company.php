<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'latitude',
        'longitude',
    ];
}
