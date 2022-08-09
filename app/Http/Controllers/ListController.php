<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ListController extends Controller
{
    function getData(){
        ///this is the nornal way to fetch data///
        $data = Http::get('https://jsonplaceholder.typicode.com/users')->collect();
        return view('list',['data'=>$data]);

        //    $data = Http::get('https://reqres.in/api/users');
        //    return view('list',['data'=>$data['data']]);
        ///aei link er data gula "data" namer ekti object er vitore array akare ace. tai ekhanae assocciative array $data er pore 'data' key ta dorkar holo and collect() dara link k append korar dorkar hosse na.///
    }
}