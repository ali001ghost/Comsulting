<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Mime\Address;

class Costumers extends Model
{
    use HasFactory;
    protected $fillable=['role','name','bag','photo','phone','address_id','password'];

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function experince()
    {
        return $this->hasMany(Experince::class);
    }

    public function costumer_date()
    {
        return $this->hasMany(Costumer_date::class);
    }
}
