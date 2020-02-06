<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $primaryKey = 'cod_alumno';
    protected $fillable = ['nom_alumno', 'apell_alumno', 'passwd_alumno', 'foto_alumno', 'fech_nac_alumno', 'cod_curso'];
    protected $guarded = ['cod_alumno'];

    public $timestamps = false;

    public function curso(){
        return $this->belongsTo('App\Curso');
    }
}
