<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function index()
  {
      //echo "gsdhfsd";
      return view('front.index');
  }
  public function about()
  {
      return view('front.about');
  }
  public function work()
  {
      return view('front.work');
  }
  public function services()
  {
      return view('front.services');
  }
  public function contact()
  {
      return view('front.contact');
  }
}