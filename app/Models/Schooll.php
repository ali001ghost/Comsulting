<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schooll extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    // protected $table='schoolls';

    public function class()
    {
        return $this->hasMany(Classs::class);
    }
}
