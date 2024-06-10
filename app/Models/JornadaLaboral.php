<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JornadaLaboral extends Model
{
    use HasFactory;

    protected $table = 'jornada_laboral';
    protected $primaryKey = 'id_jornada_lab';
    protected $fillable = [
        'nombre_jornada_lab',
        'estado_jornada_lab',
    ];

    public $timestamps = false;

    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_jornada_lab');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('nombre_jornada_lab', 'LIKE', '%' . $search . '%');
    }

    public function scopeActivos($query)
    {
        return $query->where('estado_jornada_lab', 1);
    }

}
