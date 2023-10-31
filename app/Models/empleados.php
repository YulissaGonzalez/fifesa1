<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function username()
    {
        return $this->hasMany(User::class, 'users_id', 'id');
    }


}
