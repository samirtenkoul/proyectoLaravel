<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $fillable = ['nom_curso', 'anyo_curso'];
    protected $guarded = ['cod_curso'];
}
