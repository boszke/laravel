<?php

namespace App\Http\Controllers;


use App\Video;
use Request;
use App\Http\Requests\CreateVideoRequest;

class VideosController extends Controller
{
    /**
     * Get videos
     */
    public function index() {
        $videos = Video::latest()->get();
        return view('videos.index')->with('videos', $videos);
    }
    
    /**
     * One video 
     */
    public function show($id) {
        $video = Video::findOrFail($id);
        return view('videos.show')->with('video', $video);
    }
    
    /**
     * Show video add form 
     */
    public function create() {
        return view('videos.create');
    }
    
    /**
     * Save video to DB
     */
    public function store(CreateVideoRequest $request) {
        
//        $input = Request::all();
//        Video::create($input);
        Video::create($request->all());
        
        return redirect('videos');
    }
    
    /**
     * Edit video
     */
    public function edit($id) {
        $video = Video::findOrFail($id);
        return view('videos.edit')->with('video', $video);
    }
    
    /**
     * Update video
     */
    public function update($id, CreateVideoRequest $request) {
        $video = Video::findOrFail($id);
        $video->update($request->all());
        
        return redirect('videos/'.$id);
    }
}
