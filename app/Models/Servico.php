<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provincia;


class Servico extends Model
{
    use HasFactory;

    protected $fillable = ['servico', 'descricao', 'endereco', 'provincia', 'bilhete_identidade', 'fotografia', 'curriculum'];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia', 'id');
    }
}



