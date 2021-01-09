<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function contact()
	{
<<<<<<< HEAD
		return view('ban-banh.contact');
	}
	
	public function getIndex(){
		$slide= Slide::all();
		print_r('$slide');
		exit;
		return view('view.layout.front-end.master',compact('slide'));
	}
}
=======
		return view ('ban-banh.contact');
	}
	public function about()
	{
		return view('ban-banh.about');
	}
	public function index()
	{
		// $slide = Slide::all();
		return view('ban-banh.index');
		// return view ('ban-banh.idex',compact('slide'));
	}
    
}
>>>>>>> b9d37d7364c226c6efb769896385b2685363791d
