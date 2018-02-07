<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Posts as Posts; # use created modul

class TextController extends Controller
{
    //
    public function postForm(Request $request){
    	$text = $request -> post('text');
    	#echo $text;
    	#view("index_folder.index");

    	$posts = new Posts();
    	$posts -> Posts = $text;
    	$posts -> save();

    	#return all tables from the table
    	#return Posts::all();

    	#return view("index_folder.index");
    	return redirect('index');

    }
}
