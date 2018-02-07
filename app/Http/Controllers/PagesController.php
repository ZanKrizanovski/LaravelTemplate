<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    //
    public function getIndex(){


        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

    	
    	return view("pages.index")->withPosts($posts);
    }

    public function getAbout(){

    	$first = "alex";
    	$last = "fortunat";

    	$full = $first." ".$last;
    	return view("pages.about") -> with("fullname", $full);


    }

    public function getContact(){
    	$data = [
    		'first_name' => "zan",
    		'last_name' => "krizanovski"
    	];
    	# view("folder.ime_fila", $data)
    	return view("pages.contact", $data);
    }
}
