<?php

namespace App\Http\Controllers;

use App\AudioVisual;
use App\Evaluation;
use App\GameMechanic;
use App\Http\Requests\EvaluationValidation;
use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::all();

        return view('evaluations.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($gameId)
    {
        return view('evaluations.create', compact('gameId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EvaluationValidation $request)
    {
        $evaluation = Evaluation::create([
            'user_id' => Auth::id(),
            'game_id' => $request->gameId,
            'title' => $request->title,
            'description' => $request->description
        ]);

        GameMechanic::create([
            'evaluation_id' => $evaluation->id,
            'objective_grade' => $request->objective,
            'challenge_grade' => $request->challenge,
            'rule_grade' => $request->rule,
            'control_grade' => $request->control,
        ]);

        Story::create([
            'evaluation_id' => $evaluation->id,
            'scenario_grade' => $request->scenario,
            'character_building_grade' => $request->characterBuilding,
            'plot_grade' => $request->plot,
        ]);

        AudioVisual::create([
            'evaluation_id' => $evaluation->id,
            'graphic_grade' => $request->graphic,
            'audio_grade' => $request->audio,
        ]);

        return redirect(route('games.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        return view('evaluations.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        return view('evaluations.edit', compact('evaluation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(EvaluationValidation $request, Evaluation $evaluation)
    {
        $evaluation->update([
            'title' => $request->title,
            'description' => $request->description,
            'objective' => $request->objective,
            'challenge' => $request->challenge,
            'rule' => $request->rule,
            'control' => $request->control,
            'scenario' => $request->scenario,
            'characterBuilding' => $request->characterBuilding,
            'plot' => $request->plot,
            'graphic' => $request->graphic,
            'audio' => $request->audio,
        ]);

        return redirect(route('evaluations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        
        return redirect()->back();
    }
}
