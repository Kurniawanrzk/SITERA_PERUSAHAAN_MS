<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Perusahaan extends Model
{
    use HasFactory, HasUuid;

    protected $table = "perusahaan";
    public $incrementing = false;
    protected $keyType = 'string'; 
    protected $fillable = [
        'user_id',
        'nama_perusahaan',
        'jenis_perusahaan',
        'alamat',
        'jalan_dusun',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'longitude',
        'latitude',
        'email',
        'nomor_telepon',
        'gambar_perusahaan',
    ];
    

}
