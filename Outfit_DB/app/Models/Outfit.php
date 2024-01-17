<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    use HasFactory;

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('upper_id', '=', $this->getAttribute('upper_id'))
            ->where('bottom_id', '=', $this->getAttribute('bottom_id'));
        return $query;
    }

    protected $fillable = [
        'user_id',
        'upper_id',
        'bottom_id',
        'status',
        'additional_id',
    ];
    
}
