<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'descript', 
        'poster',
        'showtime',
        'userid'
        // 'location'
    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
