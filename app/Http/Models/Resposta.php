<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class resposta extends Model
{
  protected $table = 'respostas';

  protected $fillable = ['matricula', 'lema', 'defesa', ];

}
