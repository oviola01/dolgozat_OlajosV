<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bottom extends Model
{
    use HasFactory;
    
    public $primaryKey = 'bottom_id';

    protected $fillable = [
        'name',
        'description',
    ];
}
