<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardConrtroller extends Controller
{
    public function index(){
        $boards = Board::latest()->get();
        $content = "Объявления\r\n\r\n";
        foreach ($boards as $board){
            $content .= $board->title."\r\n";
            $content .= $board->content."\r\n";
            $content .= $board->price."руб. \r\n";
            $content .= "\r\n";
        }
        return response($content)->header('Content-Type', 'text/plain');
    }

    public function detail(Board $board){
        $s = $board->title . "\r\n\r\n";
        $s .= $board->content . "\r\n";
        $s .= $board->price . " руб.\r\n";
        return response($s)->header('Content-Type', 'text/plain');
    }
}
