<?php

namespace App\Http\Controllers;

use App\videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show_upload_data(){

      


    }

    public function user_controls(){
        $vid_uploded=videos::all();

        return view('crud')->with('u_data',$vid_uploded);
    }
    public function index()

    {
        $video_data=videos::all();
        return view('home')->with('v_data',$video_data);
    
    }
    public function view_upload_page(){
        return view('upload page');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {


        $v=new videos;
        if($files=$request->file('vid_file')){

       $name=$files->getClientOriginalName();
       $files->move('uploads',$name);


        
        
       $vid_title=$request->get('vid_title');
       $vid_description=$request->get('vid_des');
       $vid_category=$request->get('vid_cat');
       $vid_thumbnail=$request->file('thumbnail');
       $vid_thumbnail->move('thumbnail');

     $v->path=$name;
     $v->title=$vid_title;
     $v->description=$vid_description;
     $v->category=$vid_category;
     $v->thumbnail=$vid_thumbnail;
     $v->save();

     return view('home')->with('$msg');
     $msg="Video uploaded successfully";

}



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function show(videos $videos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function edit(videos $videos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, videos $videos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function destroy($path)
    {
        $del_video=videos::find($path);
        $del_video->delete();
        return redirect(url('delete-video'));
    }
}
