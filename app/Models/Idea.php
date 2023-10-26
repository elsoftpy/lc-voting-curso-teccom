<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Idea extends Model
{
    use HasFactory, Sluggable;

    const CANTIDAD_IDEAS_PAGINA = 25;

    protected $table = 'ideas';

    protected $fillable = [
        'user_id',
        'categoria_id',
        'estado_id',
        'title',
        'slug',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    /**
     * Get the votos that owns the Idea
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function votos(): BelongsToMany
    {
        return $this->belongsToMany(User::class, Voto::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}
