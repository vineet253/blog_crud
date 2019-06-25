<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\blogModel;

class blogController extends Controller
{
    public function index()
    {
    	 $data['blog']=blogModel::all();

    	return view('blog.blog-list',$data);
    }

    public function add_blog(Request $request){
    	
    	if($request->isMethod('post')){
    		
    		$image = $request->file('image');
        	$new_name = rand() . '.' . $image->getClientOriginalExtension();
        	$image->move(public_path('images'), $new_name);

    		$data= [
    			'name'=>$request->name,
    			'detail'=>$request->detail,
    			'image' =>   $new_name 			  
        
    		];
    		

    		$output = blogModel::create($data);
    		if($output->id){
    			
    			return redirect()->route('blog-list')->with('success', 'sucessfully created Blog');
    			

    		}else{
    			
    			return redirect()->route('blog-list')->with('error', 'Whoops something went wrong');

    				

    		}

	    	}else
	    	{
	    		return view('blog.add-blog');
	    	}
    }



    public function edit_blog(Request $request){   			


    	if($request->isMethod('post')){

    		$image = $request->file('image');
        	$new_name = rand() . '.' . $image->getClientOriginalExtension();
        	$image->move(public_path('images'), $new_name);

    		$data= [
    			'name'=>$request->name,
    			'detail'=>$request->detail,
    			'image' =>   $new_name 			  
        
    		];

            // echo "<pre>";
            // print_r($data);
            // exit;

    		$result=blogModel::where('id',$request->id)->update($data);
    		if($result){

    			return redirect()->route('blog-list')->with('success', 'sucessfully Updated Blog');
    		}
    		else
    		{
				return redirect()->route('blog-list')->with('error', 'Whoops something went wrong');
    		}

    	}
    	else
    	{
    		   	$data=blogModel::find($request->id);

    			return view('blog.edit-blog',$data);
    	}
   }

       public function delete_blog(Request $request,$id){
       
    	$delete=blogModel::destroy($id);
            if($delete){
            	 	return redirect()->route('blog-list')->with('success', 'sucessfully delete blog');
                    
                }else{
                	return redirect()->route('blog-list')->with('error', 'Whoops something went wrong');
                     
                }
    	
    }

    public function show()
    {
         $data['blog']=blogModel::all();
         // echo "<pre>";
         // print_r($data);
         // exit;
         

        return view('blog.front-blog-list',$data);
    }

    public function show_detail($id)
    {
         //$data['blog']=blogModel::all();
         $data=blogModel::find($id);
         // echo "<pre>";
         // print_r($data);
         // exit;

        return view('blog.front-blog-details',$data);
    }


}
