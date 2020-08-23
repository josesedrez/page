<?php

namespace App\Http\Controllers;

use App\Category;
use App\Game;
use App\Http\Requests\GameValidation;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['show','list']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return view('games.index', compact('games'));
    }

    public function list()
    {
        $games = Game::all()->sortByDesc('updated_at');

        $allGames = $games->chunk(5);

        return view('games.list', compact('allGames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameValidation $request)
    {
        if ($request->file('cover')) {
            $coverName = $this->uploadFileAndGetName($request->file('cover'), 'covers');

            Game::create([
                'title' => $request->title,
                'description' => $request->description,
                'cover' => $coverName,
                'parental_rating' => $request->parentalRating
            ]);

            return redirect(route('games.index'));
        }

        Game::create([
            'title' => $request->title,
            'description' => $request->description,
            'parental_rating' => $request->parentalRating
        ]);

        return redirect(route('games.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function editCategories(Game $game)
    {
        $categories = Category::all();
        $categoriesId = $game->categories->map(function ($item) {
            return $item->id;
        });
        return view('games.editCategories', compact('game','categories', 'categoriesId'));
    }

    public function updateCategories(Request $request, Game $game)
    {
        $game->categories()->detach();
        $game->categories()->attach($request->categories);

        return redirect(route('games.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(GameValidation $request, Game $game)
    {
        $coverName = $this->uploadFileAndGetName($request->file('cover'), 'covers');

        $game->update([
            'title' => $request->title,
            'description' => $request->description,
            'cover' => $coverName,
            'parental_rating' => $request->parentalRating
        ]);

        return redirect(route('games.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->back();
    }
}
