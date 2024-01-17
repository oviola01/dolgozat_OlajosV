<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upper extends Model
{
    use HasFactory;

    public $primaryKey = 'upper_id';

    protected $fillable = [
        'name',
        'description',
    ];
}
