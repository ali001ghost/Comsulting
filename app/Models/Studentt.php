<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentt extends Model
{
    use HasFactory;
    protected $fillable=['name','classs_id','age'];
    protected $hidden = ['created_at','updated_at','id'];
    public function class()
    {

        return $this->belongsTo(Classs::class);
    }
}
