<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';

    protected $fillable = [
        'nombre',
    ];

    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }

    public function getClasesEstado(): string
    {
        $clases =  [
            'Abierta' => 'bg-gray-200 text-black',
            'Considerando' => 'bg-purple text-white',
            'Cerrada' => 'bg-red text-white',
            'En proceso' => 'bg-yellow text-white',
            'Implementada' => 'bg-green text-white'
        ];

        return $clases[$this->nombre];
    }
}
