<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $result = Client::query()->create(
            [
                'name' => $request->name,
                'hospital_id' => $request->hospital_id
            ]
        );
        return $result;
    }

    public function show()
    {
       $result = Client::query()->where('name','ali')->with('hospital')->get();
       return $result;
    }
}
