<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public static function all($columns = ['*'])
    {
        return static::query()->get(
            is_array($columns) ? $columns : func_get_args()
        );
    }
}
