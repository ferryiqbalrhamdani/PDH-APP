<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'nama',
        'color',
        'cover',
        'note',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    /**
     * The categories that belong to the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'item_category', 'item_id', 'category_id');
    }
    public function size(): BelongsToMany
    {
        return $this->belongsToMany(Size::class, 'item_size', 'item_id', 'size_id');
    }
    
    
}
