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
        return view('albums');
    }

    public function dropzoneUploadFile(Request $request){
        $imageName = time().'.'.$request->file->getClientOriginalExtension();

        $arg = parse_url($request->fullUrl(), PHP_URL_QUERY);
        parse_str($arg, $output);
/*
        error_log($output['albumName']);

        $album = DB::select('select * from albums where id_user = ?', [\Auth::user()->id]);

        error_log("asdasd");

        DB::insert('insert into images (name, filename, id_user, id_album) values (?, ?, ?, ?)', [$output['albumName'], $imageName, \Auth::user()->id, $album[0]->id]);
*/
        $request->file->move(public_path('storage/' . \Auth::user()->id . '/' . $output['albumName'] . '/'), $imageName);
        return response()->json(['success'=>$imageName]);
    }
}
