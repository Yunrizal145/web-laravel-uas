<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();

        return view('admin.cards.index', compact('cards'));
    }


    public function update(Request $request, Card $card)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',    
            'image' => 'images|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->has('image')){
            unlink(public_path($card->image));
            $image_name = uniqid() . '.' . $data['image']->getClientOriginalExtension();
            $image_path = 'uploads/' . $image_name;
            Card::make($data['image'])->resize(320, 240)->save(public_path($image_path));
            $data['image'] = $image_path;
        } else {
            $data['image'] = $card->image;
        }

        $card->update($data);

        return redirect()->route('cards.index')->with('success', 'Card updated Successfully');
    }

    
}
