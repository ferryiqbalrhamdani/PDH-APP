<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Size extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'ukuran_cm',
        'lebar_pundak',
        'panjang_lengan',
        'lingkar_pinggang',
        'panjang_baju',
        'lingkar_badan',
        'lebar_pinggang',
        'lebar_pinggul',
        'lebar_paha',
        'lebar_bawah',
        'panjang_celana',
        'lingkar_kepala',
        'ukuran_kaki',
        'panjang_tangan',
        'lebar_punggung',
        'setengah_lingkaran',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'ukuran_cm'
            ]
        ];
    }

    

    /**
     * The item that belong to the Size
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function item(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'item_size', 'size_id', 'item_id');
    }
}
