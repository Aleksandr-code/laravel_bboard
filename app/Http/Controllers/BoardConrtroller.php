<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardConrtroller extends Controller
{
    public function index(){
        $boards = Board::latest()->get();
        return view('index', compact('boards'));
    }

    public function detail(Board $board){
        return view('detail', compact('board'));
    }
}
