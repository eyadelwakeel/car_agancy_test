<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branches extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'city',
        'created_at',
        'updated_at'
    ];
    protected $table = 'branches';

    
}
