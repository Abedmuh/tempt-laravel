<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    public function lokerku()
    {
      return $this->hasMany(Lokerku::class);
    }
    public function company() {
      return $this->belongsTo(Company::class);
    }

    protected $guarded = [
      'id',
    ];
}
