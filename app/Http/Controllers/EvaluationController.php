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
        $evaluations = Evaluation::all();

        return view('evaluations.index', compact('evaluations'));
    }

    public function list()
    {
        $evaluations = Evaluation::all()->sortByDesc('updated_at');

        $allEvaluations = $evaluations->chunk(5);

        return view('evaluations.list', compact('allEvaluations'));
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
        $total = $request->objective + $request->challenge + $request->rule
        + $request->control + $request->scenario + $request->characterBuilding
        + $request->plot + $request->graphic + $request->audio;

        $grade = $total / 9;

        $evaluation = Evaluation::create([
            'user_id' => Auth::id(),
            'game_id' => $request->gameId,
            'title' => $request->title,
            'description' => $request->description,
            'grade' => $grade
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

        return redirect(route('evaluations.show',$evaluation->id));
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
    public function edit(Evaluation $evaluation, $gameId)
    {
        return view('evaluations.edit', compact('evaluation', 'gameId'));
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
        $total = $request->objective + $request->challenge + $request->rule
        + $request->control + $request->scenario + $request->characterBuilding
        + $request->plot + $request->graphic + $request->audio;

        $grade = $total / 9;

        $evaluation->update([
            'user_id' => Auth::id(),
            'game_id' => $request->gameId,
            'title' => $request->title,
            'description' => $request->description,
            'grade' => $grade
        ]);

        $evaluation->gameMechanic->update([
            'evaluation_id' => $evaluation->id,
            'objective_grade' => $request->objective,
            'challenge_grade' => $request->challenge,
            'rule_grade' => $request->rule,
            'control_grade' => $request->control,
        ]);

        $evaluation->story->update([
            'evaluation_id' => $evaluation->id,
            'scenario_grade' => $request->scenario,
            'character_building_grade' => $request->characterBuilding,
            'plot_grade' => $request->plot,
        ]);

        $evaluation->audioVisual->update([
            'evaluation_id' => $evaluation->id,
            'graphic_grade' => $request->graphic,
            'audio_grade' => $request->audio,
        ]);

        return redirect(route('evaluations.show', $evaluation->id));
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

        return redirect(route('games.show', $evaluation->game->id));
    }
}
