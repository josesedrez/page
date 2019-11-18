<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::all()->sortByDesc('updated_at');
        $games = Game::all()->sortByDesc('updated_at');

        return view('home', compact('evaluations', 'games'));
    }
}
