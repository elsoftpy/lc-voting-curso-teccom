<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Voto extends Model
{
    use HasFactory;

    protected $table = 'votos';

    protected $fillable = [
        'user_id',
        'idea_id',
    ];

    /**
     * Get the usuario that owns the Voto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the idea that owns the Voto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idea(): BelongsTo
    {
        return $this->belongsTo(Idea::class);
    }
}
