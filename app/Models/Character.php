<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    protected $fillable = [
        'name',
        'element_id',
        'weapon',
        'rarity',
        'is_playable',
        'remarks',
    ];

    protected function casts(): array
    {
        return [
            'rarity' => 'integer',
            'is_playable' => 'boolean',
        ];
    }

    public function element(): BelongsTo
    {
        return $this->belongsTo(Element::class);
    }
}