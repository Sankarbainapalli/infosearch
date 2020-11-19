<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class AdminController extends Controller
{
    //

    public function index(){

    	$post_list=Post::paginate('10');

        return view('welcome',compact('post_list'));
    }

    public function store(Request $request){

    	// dd($request->all());

         Post::create($request->all());

       return redirect()->back()->with('message','Comment Has been added Successfully');
    }

  

    public function edit(Post $admin){

        return view('edit',compact('admin'));
    }

    public function update(Request $request,Post $admin){

        $admin->update(['title'=>$request->title,'comment'=>$request->comment]);

        return redirect(route('admin.index'))->with('message','Updated Successfully');
    }


    public function show(Post $admin){        

         return view('view',compact('admin'));

    }

    public function destroy(Post $admin){

        // Todo::where('id',$id)->delete();
         $admin->delete();

         return redirect()->back()->with('error','Post Deleted Has been Successfully');

    }

    public function remove($id){

        Post::where('id',$id)->delete();
         // $admin->delete();

         return redirect()->back()->with('error','Post Deleted Has been Successfully');

    }

}
