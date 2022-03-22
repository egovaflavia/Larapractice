<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $fillable = [
        'nama_layanan',
    ];
    protected $with = array('dokter');

    public function dokter()
    {
        return $this->hasMany(Dokter::class, 'layanan');
    }

}
