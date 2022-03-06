<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'sente',
        'gote',
        'place',
        'memo',
        'thumbnail',
        'kifu_uri',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
