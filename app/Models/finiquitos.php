<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finiquitos extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(empleados::class, 'empleados_id', 'id');
    }
    public function empleado()
    {
        return $this->belongsTo('App\Models\empleados', 'empleados_id');
    }
}
