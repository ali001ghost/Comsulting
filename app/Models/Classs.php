<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    use HasFactory;
    protected $fillable=['name','schooll_id',];

    public function student()
    {
        return $this->hasMany(Studentt::class);
    }

    public function schooll()
    {

        return $this->belongsTo(Schooll::class);
    }
}
