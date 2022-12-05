<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experince extends Model
{
    use HasFactory;

    public function Costumers()
    {

        return $this->belongsTo(Costumers::class);
    }
}
