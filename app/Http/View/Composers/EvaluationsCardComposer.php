<?php

namespace App\Http\View\Composers;

use App\Evaluation;
use App\Repositories\UserRepository;
use Illuminate\View\View;

class ProfileComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('evaluations', Evaluation::all());
    }
}
