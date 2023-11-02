<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class empleados extends Model
{
    use HasFactory;
   
    use Searchable;
    public function toSearchableArray()
    {
        return [
            'nombre_empleado' => $this->nombre_empleado,
        ];
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function username()
    {
        return $this->hasMany(User::class, 'users_id', 'id');
    }


}
