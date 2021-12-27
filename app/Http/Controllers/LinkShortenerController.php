<?php

namespace App\Http\Controllers;

use App\Models\LinkShortener;
use Illuminate\Http\Request;
use Exception;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;

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
        $link_all = LinkShortener::all()->sortByDesc('updated_at');
        return view('admin.link-shortener.create', [
            'link_all' => $link_all,
        ]);
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

            return redirect(route('link.create'))->with('message', 'Link created successfully');
        } catch(Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        };
    }
    
    public function update($id){
        $old_link = LinkShortener::find($id);
        return view('admin.link-shortener.update', [
            'old_link' => $old_link
        ]);
    }

    public function storeUpdate(Request $request, $id){
        $errorMessage =[
            "required"=> "Kolom harus diisi"
        ];
    
        $error =$request -> validate([
            "slug"=>"required",
            "link"=>"required"
        ],$errorMessage);
    
        try{
            $shorten_link = LinkShortener::find($id);
            $shorten_link->slug = $request["slug"];
            $shorten_link->link = $request["link"];
            $shorten_link->save();

            return redirect(route('link.create'))->with('message', 'Link updated successfully');
        } catch(Exception $e){
            return redirect()->back()->withErrors(['error', $e->getMessage()]);
        };
    }

    public function delete($id){
        $shorten_link = LinkShortener::find($id);
        $shorten_link->delete();
        return redirect(route('link.create'))->with('message', 'Link deleted successfully');
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