<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunas extends Model
{
    use HasFactory;

    
    protected $fillable = ['penggunas'];
    public $timestamps = true;

    public function telepon() {
        return $this->hasOne(telepons::class);
    }
}
