<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    function index(){
        $blogs = DB::table('posts')->get();
    }

    function create(){

    }

    function store(){

    }

    function edit(){

    }

    function update(){

    }

    function delete(){
    
    }
}