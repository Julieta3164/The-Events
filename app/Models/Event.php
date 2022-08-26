<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'time',
        'date',
        'people',
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'event_user', 'events_id', 'users_id');
    }
}
