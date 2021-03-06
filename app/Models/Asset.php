<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'location', 'contained_in', 'value', 'acquired_on', 'status', 'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
