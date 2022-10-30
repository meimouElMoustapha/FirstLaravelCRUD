<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\LaraveVueApp;
use DB;
class LaraveVueAppController extends Controller
{
   
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


   


    public function index()
    {
        //Roles::create(['name'=>'writer']);

        $test =  LaraveVueApp::all();
        return view('posts.list',compact('test'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post=new LaraveVueApp;

        return view('posts.create',compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $post = new LaraveVueApp;
        // $request->validate([

        //     'title'=>'required|max:255',
        //     'body'=>'required|max:255',
        //     'image'=>'required|mimes:csv,JPG,tmp,txt,xlx,xls,pdf|max:2048'
        // ]);
        $post->title = $request->input('title');
        $post->content = $request->input('content');

       if ($request->hasfile('image')) {
       $file = $request->file('image');
       $extension = $file->getClientOriginalExtension(); // getting image extension
       $filename = time() . '.' . $extension;
       $file->move('uploads/appsetting/', $filename);
       

       $post->image = $filename;
    } else {
    return $request;
    $pages->image = '';

     }
     $post->save();
     session()->flash('message', 'Post successfully created.');
     return redirect('/')->with('success', 'Post successfully created');



        




        //validate data 
        // $request->validate([
        //     'title' =>'required',
        //     'content'=>'accepted',
        //     'image'=>'image|nullable|max:1999'
        // ]);


        // add file 
        // if($request->hasFile('image')){
        //     $filenameExten=$request->file('image')->getClientOriginalImage();
        //     $filename=pathinfo($filenameExten,PATHINFO_FILENAME);
        //     $extension=$request->file('image')->getOriginalClientExtension();
        //     $fileNameToStore=$filename.'_'.time().'.' .$extension;
        //     $path=$request->file('image')->storeAs('public/appimage',$fileNameToStore);

        // }else {
        //     $fileNameToStore='noimage.jpg';
        // }

        // $post=new LaraveVueApp;
        // $post->title=$request.input('title');
        // $post->content=$request.input('content');
        // //$post->user_id=$request.input('user_id');
        //$post->save();

        



        //return redirect('/' ,compact('post'))->with('success','post created');








    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = LaraveVueApp::find($id);
        
    
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=LaraveVueApp::find($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posttest=LaraveVueApp::find($id);
        $posttest->title = $request->title;
        $posttest->content = $request->content;
        $posttest->image=$request->image;
    
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move('uploads/appsetting/', $filename);
            $posttest->image = $request->file('image')->getClientOriginalName();
        }
    
        $posttest->save();
        session()->flash('success','post updated successfully!');

    
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posttest = LaraveVueApp::findOrFail($id);
        // $posttest = BlogPost::where('id',$id)->first();
        $posttest->delete();

        session()->flash('success','post deleted  successfully!');

        return view('posts.destroy',compact('posttest'))->with('success','deleted succesfully');
    }
}
