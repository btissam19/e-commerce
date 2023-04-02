<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
   public function index() {return view('home');}
   public function layout(){return view('layout');}
   public function contact(){return view('contact') ;}
   public function login(){return view('login');}
   public function singin(){return view('singin');}
   public function shope(){return view('shope');}
}
