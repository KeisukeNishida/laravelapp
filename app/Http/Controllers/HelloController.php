<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

  public function index()
  {
    $data = [
        'msg'=>'お名前を入力して下さい。',
    ];

    return view('index',$data);
}

  public function post(Request $request)
  {

  return view('index',['msg'=>$request->msg]);

   }
}


