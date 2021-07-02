<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = ['nome_materia', 'data_materia', 'descricao', 'nome_reporter'];
}
