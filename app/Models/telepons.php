<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telepons extends Model
{
    use HasFactory;
    protected $fillable = ['id','nomor_telpon','pengguna_id'];
    public $timestamps = true;

    public function pengguna() {
        return $this->belongsTo(penggunas::class,'pengguna_id');
    }
}
