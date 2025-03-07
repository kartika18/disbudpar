<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_bidang',
        'nama_bidang',
        'kode_bidang',
    ];

    public function pengguna()
    {
        return $this->hasOne(Pengguna::class);
    }

    public function surat_tugas()
    {
        return $this->hasOne(SuratTugas::class);
    }
}
