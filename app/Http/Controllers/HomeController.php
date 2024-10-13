<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $boards = Auth::user()->boards()->latest()->get();
        return view('home', compact('boards'));
    }

    public function create(){
        return view('board-create');
    }

    public function store(Request $request){
        Auth::user()->boards()->create([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price]);
        return redirect()->route('home');
    }

    public function edit(Board $board){
        return view('board-edit', compact('board'));
    }

    public function update(Request $request, Board $board){
        $board->fill([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price]);
        $board->save();
        return redirect()->route('home');
    }

    public function delete(Board $board){
        return view('board-delete', compact('board'));
    }

    public function destroy(Board $board){
        $board->delete();
        return redirect()->route('home');
    }
}
