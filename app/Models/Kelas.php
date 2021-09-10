<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    public function guru() {
        return $this->hasMany(Guru::class);
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }
}