<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_barang',
        'jenis',
        'nup',
        'merk_type',
        'id_unit',
        'id_ruang',
        'condition',
        'id_user',
        'tgl_perolehan',
        'tgl_buku',
        'nilai_perolehan',
        'asal',
        'akun',
        'ket',
    ];

    public function kode() {
        return $this->hasOne(Barang::class, 'id_barang', 'id');
    }

    public function unitKerja() {
        return $this->belongsTo(UnitKerja::class, 'id_unit', 'id');
    }

    public function ruang() {
        return $this->belongsTo(Ruang::class, 'id_ruang', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
