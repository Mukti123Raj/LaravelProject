<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addData(){
        DB::table('students')->insert([
            'name'=>'tester',
            'email'=>'tester@tester.com',
            'age'=>20,
            'date_of_birth'=>'2006-01-01',
            'gender'=>'m'
        ]);

        return 'Added data Successfully';
    }
}
