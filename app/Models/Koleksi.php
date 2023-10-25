<?php

// Ghania Raushan Fayyaza
// 6706223034
// D3IF - 46 - 03


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;


    protected $table = 'koleksi';
    
    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
        'jumlahKeluar',
        'jumlahSisa'
    ];
}
