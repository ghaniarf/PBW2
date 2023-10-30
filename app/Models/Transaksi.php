<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    // Ghania Raushan Fayyaza
    // 6706223034
    // D3IF - 46 - 03
    protected $table = 'transaksi';
    
    protected $fillable = [
        'idPetugas',
        'idPeminjam',
        'tanggalPinjam',
        'tanggalSelesai'
    ];
    public function petugas()
    {
        return $this->belongsTo(User::class, 'idPetugas');
    }
    public function peminjam()
    {
        return $this->belongsTo(User::class, 'idPeminjam');
    }
}