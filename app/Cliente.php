<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome, cpf, telefone, profissao, email, sexo, endereco'];
}
