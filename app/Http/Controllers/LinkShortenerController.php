<?php

namespace App\Http\Controllers;

use App\Models\LinkShortener;
use Illuminate\Http\Request;
use Exception;

class LinkShortenerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('link-shortener.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errorMessage =[
            "unique"=> "Custom link sudah terpakai, gunakan custom link lain",
            "required"=> "Kolom harus diisi"
        ];

        $error =$request -> validate([
            "slug"=>"required|unique:link_shorteners,slug",
            "link"=>"required"
        ],$errorMessage);

        try{
            $shortener = LinkShortener::create([
                "slug" => $request["slug"],
                "link" => $request["link"]
            ]);
            $shortener->save();
            

            return view('link-shortener.create-success',[
                "slug"=>$shortener->slug
            ]);
        } catch(Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        };
    }
    public function redirectHandler(String $slug){
        $shortener = LinkShortener::where('slug',$slug)->get();
        if(count($shortener)<1){
           return abort(404);
        }
        else{
            return redirect($shortener[0]->link);
        }
        
    }

}