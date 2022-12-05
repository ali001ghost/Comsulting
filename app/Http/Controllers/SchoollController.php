<?php

namespace App\Http\Controllers;

use App\Models\Classs;
use App\Models\Schooll;
use App\Models\Studentt;
use Illuminate\Http\Request;

class SchoollController extends Controller
{
    public function store(Request $request)
    {

        $result = Schooll::query()->create(
            [
                'name' => $request->name,
            ]

        );
      



    }

    public function index()
    {
        $result = Schooll::query()->get();
        return $result;
    }


   public function studentsSchool(Request $request)
   {

    $classes = Classs ::query()->where('schooll_id', $request->schooll_id)->get();


    foreach($classes as $class){

        $students[] = Studentt ::query()->where('classs_id',$class ->id)->get();


    }

     return $students;
   }


}
