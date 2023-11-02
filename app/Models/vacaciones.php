<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class vacaciones extends Model
{
    use HasFactory;
    use Searchable;
    public function user()
    {
        return $this->belongsTo(empleados::class, 'empleados_id', 'id');
    }
    public function empleado()
    {
        return $this->belongsTo('App\Models\empleados', 'empleados_id');
    }
    public function empleadoname()
    {
        return $this->hasMany(empleados::class, 'users_id', 'id');
    }
}
