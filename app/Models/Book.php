<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'genre', 'author', 'description', 'pub_date', 'user_id'
    ];


    public function user() {
        return $this->belongsTo('App\User');
    }
}
