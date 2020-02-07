<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $var=Posts::all();
        // $var=Posts::where('title','My First Post')->get();
        $var=Posts::orderBy('created_at','desc')->get();
        return view('posts.ShowAllPosts')->with('var',$var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p=new Posts();
        $p->title=$request->txt_title;
        $p->detail=$request->txt_detail;
        $p->save();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $var=Posts::where('id',$id)->get();
        $v=Posts::find($id);
        return view('posts.show')->with('v',$v);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $v=Posts::find($id);
        return view('posts.edit')->with('v',$v);
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
        $p=Posts::Find($id);
        $p->title=$request->txt_tilte;
        $p->detail=$request->txt_detail;
        $p->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $v=new Posts();
        $v->destroy($id);
        return redirect('/posts');
    }
}
