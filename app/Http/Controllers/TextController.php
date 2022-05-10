<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;

class TextController extends Controller
{
    //
    public function index(){
        $texts = Text::all();
        return view("text.index", compact("texts"));
    }

    public function create(){
        return view('text.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|min:2|max:255',
            'content' => 'required|min:5|max:10000'
        ]);

        Text::create([
            "title" => $request["title"],
            "content" => $request["content"]
        ]);

        return redirect()->route('text.index');
    }
}
