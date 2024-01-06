<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;

    protected $table = 'branches';
    protected $fillable = ['manajer_id', 'nama_cabang', 'alamat', 'supervisor_id', 'kasir_id', 'warehouse_id'];

    public function manajer()
    {
        return $this->belongsTo(User::class, 'manajer_id');
    }

    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }

    public function kasir()
    {
        return $this->belongsTo(User::class, 'kasir_id');
    }

    public function warehouse()
    {
        return $this->belongsTo(User::class, 'warehouse_id');
    }
}
