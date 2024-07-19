<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $blogs=[
            [
                'title'=>"บทความที่ 1",
                'content'=>"เนื้อหาบทความที่ 1",
                'status'=>true
            ],
            [
                'title'=>"บทความที่ 2",
                'content'=>"เนื้อหาบทความที่ 2",
                'status'=>false
            ],
            [
                'title'=>"บทความที่ 3",
                'content'=>"เนื้อหาบทความที่ 3",
                'status'=>true
            ],
        ];
        return view('blog',compact('blogs'));
    }

    function about(){
        $name = "สุทธิดา";
        $date = "12 กรกฎาคม 2567 ";
        return view('about',compact('name','date'));
     
    }
    function create(){
        return view('form');
    }
    
    function insert(Request $request){
        $request->validate(
            [
            'title'=>'required|max:50',
            'content'=>'required'
            ],
            [
                'title.required'=>'กรุณาป้อนชื่อบทความของคุณ',
                'title.max'=>'ชื่อบทความไม่ควรเกิน 50 ตัวอักษร',
                'content.required'=>'กรุณาป้อนเนื้อหาบทความของคุณ'
            ]
        );
    }
}