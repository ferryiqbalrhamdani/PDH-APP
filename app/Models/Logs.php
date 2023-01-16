<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Logs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_id',
        'tolerant_id',
        'size_id',
    ];

    public function item(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'logs', 'user_id', 'item_id');
    }
    public function sizeSave(): BelongsToMany
    {
        return $this->belongsToMany(Size::class, 'logs', 'user_id', 'size_id');
    }
}
