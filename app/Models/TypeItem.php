<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
    ];

    public $timestamps = false;
}
