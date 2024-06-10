<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    use HasFactory;

    protected $table = 'modalidad';
    protected $primaryKey = 'id_modalidad';
    protected $fillable = [
        'id_modalidad',
        'nombre_modalidad',
        'estado_modalidad',
    ];

    public $timestamps = false;

    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_modalidad');
    }

}
