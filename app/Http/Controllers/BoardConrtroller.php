<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardConrtroller extends Controller
{
    public function index(){
        return response('Сайт объявлений')->header('Content-Type', 'text/plain');
    }
}
