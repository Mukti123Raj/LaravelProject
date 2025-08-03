<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addData(){
        DB::table('students')->insert([
            [
            'name'=>'tester',
            'email'=>'tester@tester.com',
            'age'=>20,
            'date_of_birth'=>'2006-01-01',
            'gender'=>'m'
            ],
            [
            'name'=>'tester2',
            'email'=>'tester2@tester.com',
            'age'=>20,
            'date_of_birth'=>'2006-01-01',
            'gender'=>'m'
            ]
        ]);

        return 'Added data Successfully';
    }

    public function getData(){
        $items=DB::table('students')
        // ->where('id', '>=', 50)
        // ->get();
        // ->min('score');
        ->avg('score');

        return $items;
    }

    public function updateData(){
        DB::table('students')->where('id', 101)->update([
            'name'=>'updated Name',
            'email'=>'updated@email.com'
        ]);
        return 'updated Data Successfully';
    }

    public function deleteData(){
        DB::table('students')->where('id', 101)->delete();
        return 'deleted Data Successfully';
    }
}
