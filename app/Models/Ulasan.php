<?php

namespace App\Models;

use App\Models\Buku;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function buku()
    {
        return $this->belongTo(Buku::class);
    }
}

