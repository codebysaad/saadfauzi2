<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitKerja extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function user() {
        return $this->hasMany(User::class, 'id_user', 'id');
    }

    public function gedung() {
        return $this->hasMany(Gedung::class, 'id_unit', 'id');
    }

    public function barang() {
        return $this->hasMany(Barang::class, 'id_unit', 'id');
    }
}
