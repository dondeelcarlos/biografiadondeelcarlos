<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

//use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	return view('home');
    }

    public function about()
    {
    	return view('about');
    }

    public function contact()
    {
    	return view('contact');
    }

     public function welcome()
    {
        return view('welcome');
    }

     public function finalizar()
    {
        return view('finalizar');
    }

     public function inicio()
    {
        return view('inicio');
    }

     public function navegacion()
    {
        return view('navegacion');
    }

    public function biografy()
    {
        return view('biografy');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
?>
