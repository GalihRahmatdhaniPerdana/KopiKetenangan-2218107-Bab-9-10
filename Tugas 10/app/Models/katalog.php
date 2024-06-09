<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    use HasFactory;
    protected $table = 'katalogs';
    protected $primaryKey = 'id_katalog';
    public $incrementing = true;
    protected $fillable = ['jenis_kopi','grade','nama', 'asal', 'harga','gambar'];
    public $timestamps = false;

}
