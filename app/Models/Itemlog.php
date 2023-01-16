<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kategori',
        // item
        'item_id',
        'item_id_celana',
        'item_id_sepatu',
        'item_id_topi',
        // size
        'size_id',
        'size_id_celana',
        'size_id_topi',
        'size_id_sepatu',
        // catatan
        'catatanTopi',
        'catatanCelana',
        'catatanSepatu',
        'catatanBaju',
        // tolerant
        'panjangcelanaTolerant',
        'lebarbawahTolerant',
        'lebarpahaTolerant',
        'lebarpinggangTolerant',
        'lingkarbadanTolerant',
        'panjangbajuTolerant',
        'lingkarpinggangTolerant',
        'panjanglenganTolerant',
        'lebarpundakTolerant',  
        'lebarpinggulTolerant',  
    ];

    
}
