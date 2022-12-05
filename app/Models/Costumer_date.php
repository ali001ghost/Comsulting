<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer_date extends Model
{
    use HasFactory;
    public function Costumers()
    {

        return $this->belongsTo(Costumers::class);
    }

    public function exp_days()
    {

        return $this->belongsTo(Exp_Days::class);
    }
}
