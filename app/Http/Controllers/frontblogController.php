<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogModel;
class frontblogController extends Controller
{
       public function index()
        {
    	 $data['blog']=blogModel::all();

    	return view('blog.front-blog-list',$data);
    }

}
