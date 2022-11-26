<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nome_do_curso',
        'Descrição_completa_do_curso',
        'Descrição_simplificada_do_curso',
        'Professor',
        'Número_mínimo_de_alunos',
        'Número_máximo_de_alunos',
        'Número_de_alunos_inscritos',
        'Alunos',
        'media',
        'Status',
        'data',
        'Imagem_do_curso',
    ];

    protected $guarded = [];
}
