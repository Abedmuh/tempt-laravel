<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function loker() {
      return $this->hasMany(Company::class);
    }

    protected $fillable = [
      'name',
      'category',
      'address',
      'maps',
      'description',
      'link'
    ];
}
