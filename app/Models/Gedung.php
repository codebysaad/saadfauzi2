<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gedung extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = ['name', 'id_unit'];

    public function ruang() {
        return $this->hasMany(Ruang::class, 'id_gedung', 'id');
    }

    public function unitKerja() {
        return $this->belongsTo(UnitKerja::class, 'id_unit', 'id');
    }
}
