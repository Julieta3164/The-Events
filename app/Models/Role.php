<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['role'];
    public $timestamps = false;

    public function users(){
        return $this->belongsToMany(User::class, 'role_user', 'roles_id', 'users_id');
    }
}
