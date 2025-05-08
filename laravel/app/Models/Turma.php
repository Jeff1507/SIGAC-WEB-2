<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'turmas';

    public function aluno(){
        return $this->hasMany(Aluno::class);
    }

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
