<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function dropzoneFile(){
        return view('dropzone_file_upload');
    }

    public function dropzoneUploadFile(Request $request){
        $imageName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('storage/' . \Auth::user()->id . '/'), $imageName);
        return response()->json(['success'=>$imageName]);
    }
}
