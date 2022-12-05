<?php

namespace App\Http\Controllers;

use App\Models\Costumers;
use Illuminate\Http\Request;

class CostumersController extends Controller
{
   public function store(Request $request)
   {
    $result = Costumers::query()->create([
        'role'=>$request->role,
        'name'=>$request->name,
        'bag'=>$request->bag,
        'photo'=>$request->photo,
        'phone'=>$request->phone,
        'address_id'=>$request->address_id,
        'password'=>$request->password,






    ]);
   }
}
