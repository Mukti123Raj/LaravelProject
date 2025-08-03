<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index(){
        return Teachers::all();
    }

    public function add(){
        $item = new Teachers();
        $item->name='test Name';
        $item->save();
        return 'Added Data Successfully';
    }

    public function show($id){
        $item = Teachers::findOrFail($id);
        return $item;
    }

    public function update($id){
        $item = Teachers::findOrFail($id);
        $item->name='Update Teacher';
        $item->update();
        return 'Updated Data Successfully';
    }

    public function delete($id){
        $item = Teachers::findOrFail($id);
        $item->delete();
        return "Deleted Data Successfully";
    }
}
