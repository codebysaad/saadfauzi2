<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ruang extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['id_gedung', 'name', 'id_user'];

    public function ruang() {
        return $this->hasMany(Barang::class, 'id_ruang', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function gedung() {
        return $this->belongsTo(Gedung::class, 'id_gedung', 'id');
    }
}
