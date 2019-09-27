<?php

namespace App\Http\Controllers;

use phpDocumentor\Reflection\DocBlock\Tags\PropertyWrite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class homeController extends Controller
{
    public function get_deneme(){
        $adim = Input::get('adim');
        $soyadim =  Input::get('soyadim');
        return view('deneme')->with('isim',$adim);
    }
    public function get_form(){

        return view('form');
    }
    public function post_form(Request $request){
        $birinci = $request->birinci;
        $ikinci = $request->ikinci;
        $toplam = $birinci+$ikinci;
        return view('form')->with('toplam',$toplam);
    }
}
