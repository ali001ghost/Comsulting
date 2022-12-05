<?php

namespace App\Http\Controllers;

use App\Models\Classs;
use App\Models\Student;
use App\Models\Studentt;
use Illuminate\Http\Request;

class StudenttController extends Controller
{

    public function index(Request $request)
    {
        $result = Studentt::query()->where('classs_id',$request->classs_id)->get();
        return $result;
    }
    public function store(Request $request)
    {



        $result = Studentt::query()->create(
            [
                'name' => $request->name,
                'age' => $request->age,
                'classs_id' => $request->classs_id
            ]

        );
        return $result;


    }

    public function show(Request $request)
    {
        $result = Studentt::query()->where('name', $request->name)->get('schooll_id', $request->schooll_id);
        return $result;
    }

    public function destroy(Request $request)
    {
        Studentt::query()->where('classs_id', $request->classs_id)->delete(['name' => $request->name]);
    }

    public function update(Request $request)
    {
        Studentt::query()->where('classs_id', $request->classs_id)->update(['name' => $request->name]);

    }
}
