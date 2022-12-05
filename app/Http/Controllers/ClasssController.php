<?php

namespace App\Http\Controllers;

use App\Models\Classs;
use Illuminate\Http\Request;

class ClasssController extends Controller
{


    public function index(Request $request)
    {
        $result = Classs::query()->where('schooll_id',$request->schooll_id)->get();
        return $result;
    }
    public function store(Request $request)
    {

        $result = Classs::query()->create(
            [
                'schooll_id' => $request->schooll_id,
                'name' => $request->name
            ]

        );
        return $result;


    }

    public function destroy(Request $request)
    {
        Classs::query()->where('id', $request->id)->delete(['name' => $request->name]);
    }

    public function update(Request $request)
    {
        Classs::query()->where('id', $request->id)->update(['name' => $request->name]);

    }
}
