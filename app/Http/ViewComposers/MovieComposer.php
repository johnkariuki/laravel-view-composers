<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use \App\Http\Repository\MovieRepository;

class MovieComposer
{
    public $movieList = [];

    /**
     * Create a movie composer.
     *
     *  @param MovieRepository $movie
     *
     * @return void
     */
    public function __construct(MovieRepository $movies)
    {
        $this->movieList = $movies->getMovieList();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('latestMovie', end($this->movieList));
    }
}
