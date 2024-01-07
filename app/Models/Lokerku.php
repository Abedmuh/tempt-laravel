<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokerku extends Model
{
    use HasFactory;

    public function loker() {
      return $this->belongsTo(Loker::class);
    }
    public function user() {
      return $this->belongsTo(User::class);
    }
    
}
