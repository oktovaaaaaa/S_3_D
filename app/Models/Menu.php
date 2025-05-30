<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'foto'

    ];
    // Accessor: Menampilkan harga dengan titik
    public function getHargaAttribute($value)
    {
        return number_format($value, 0, ',', '.');
    }
}
