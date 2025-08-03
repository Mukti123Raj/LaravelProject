<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us/{name}/{id}', function($name, $id){
    // $name='tester';
    // $email='test@test.com';
    // return view('aboutus')->with('name', $name)->with('email', $email);
    // return view('aboutus', compact('name', 'email'));
    // return view('aboutus',['name'=>$name, 'email'=>$email] );

    return view('aboutus', compact('name', 'id'));
});

Route::view('contact-us/{name}/{id}', 'contactus');
// Route::get('about', function(){
//     return 'this is about';
// });



// Route::prefix('details')->group(function(){
//     Route::get('students', function(){
//         return 'this is student';
//     })->name('student-Details');

//     Route::get('teachers', function(){
//         return 'this is teacher';
//     })->name('teacher-Details');
// });

// Route::get('student/{id}/{reg}', function($id, $reg){
//     return "student id is ". $id . "and registration number is ". $reg;
// });

// Route::fallback(function(){
//     return 'This page is not found. Please Try Again';
// });