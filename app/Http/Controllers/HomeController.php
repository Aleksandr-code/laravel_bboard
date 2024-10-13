<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private const BOARD_VALIDATOR = [
        'title' => 'required|max:50',
        'content' => 'required',
        'price' => 'required|numeric'
    ];
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
        $validated = $request->validate(self::BOARD_VALIDATOR);
        Auth::user()->boards()->create([
            'title' => $validated->title,
            'content' => $validated->content,
            'price' => $validated->price]);
        return redirect()->route('home');
    }

    public function edit(Board $board){
        return view('board-edit', compact('board'));
    }

    public function update(Request $request, Board $board){
        $validated = $request->validate(self::BOARD_VALIDATOR);
        $board->fill([
            'title' => $validated->title,
            'content' => $validated->content,
            'price' => $validated->price]);
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
