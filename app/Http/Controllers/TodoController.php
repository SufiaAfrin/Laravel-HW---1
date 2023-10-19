<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function addTodo (){
       return view('addTodo');
    }
    function allTodo(){
        return view('allTodo');
    }
    function finishTodo(){
        return view('finishTodo');
    }
    
}
