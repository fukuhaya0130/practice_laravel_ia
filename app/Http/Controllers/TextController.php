<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;
use App\Models\User;
use Illuminate\Validation\Rule;

class TextController extends Controller
{
    public function index(){
        $texts = User::find(1)->text;
        return view("text.index", compact("texts"));
    }

    public function create(){
        return view('text.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|min:2|max:255',
            'content' => 'required|min:5|max:1000',
            'email' => 'required|unique:texts',
            'price' => 'required|numeric',
            'is_visible' => 'required'
        ]);

        Text::create([
            "title" => $request["title"],
            "content" => $request["content"],
            "email" => $request["email"],
            "price" => $request["price"],
            "is_visible" => $request["is_visible"]
        ]);

        return redirect()->route('text.index');
    }

    public function show($id){
        $text = Text::findOrFail($id);
        return view("text.show", compact("text"));
    }

    public function edit($id){
        $text = Text::findOrFail($id);
        return view("text.edit", compact("text"));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|min:2|max:255',
            'content' => 'required|min:5|max:1000',
            'email' => ['required',Rule::unique('texts')->ignore($request->id)],
            'price' => 'required|numeric',
            'is_visible' => 'required'
        ]);

        $text = Text::findOrFail($id);

        $text->title = $request['title'];
        $text->content = $request['content'];
        $text->email = $request['email'];
        $text->price = $request['price'];
        $text->is_visible = $request['is_visible'];
        $text->save();

        return redirect()->route('text.index');
    }

    public function destroy($id)
    {
        $text = Text::findOrFail($id)->delete();

        return redirect()->route('text.index');
    }


}
