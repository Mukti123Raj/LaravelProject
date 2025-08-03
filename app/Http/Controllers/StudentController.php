<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addData(){
        $item = new Student();
        $item->name = 'tester';
        $item->email = 'tester@tester.com';
        $item->age = 20;
        $item->date_of_birth = '2006-01-01';
        $item->gender = 'm';
        $item->score = 80;
        $item->save();
        return ' Added Data Successfully';
    }

    public function getData(){
        $items = Student::all();
        return $items;
    }

    public function updateData(){
        $item = Student::find(56);
        $item->name = 'tester update';
        $item->update();
        return 'Updated Data Successfully';
    }

    public function deleteData(){
        $item = Student::findOrFail(56);
        $item->delete();
        return "Deleted Data Successfully";
    }

    public function whereConditions(){
        // $items= Student::where('age', '>', 23)
        // ->orWhere('score', '>', 80)->get();


        // $items= Student::where('score','>',90)
        // ->where(function($query){
        //     $query->where('age', '<', 21)
        //     ->orWhere('age', '>', 23);
        // })->get();

        // $items= Student::whereBetween('age', [21,23])->get();

        // $items= Student::whereNotBetween('age', [21,23])->get();

        // $items= Student::whereIn('id', [1,2,3,4,5,6,7])->get();

        // $items= Student:: whereAny(['age', 'score'], '=', 23)->get();

        $items= Student:: whereAll(['age', 'score'], '=', 22)->get();

        return $items;
    }
}
