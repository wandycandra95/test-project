<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
 public function test(){
    print("something"); 
    print("abcd")
 }
 
 public function test2(){
    print("do Nothing")
 }
    
 public function test3(){
    print("anything")
 }
}
