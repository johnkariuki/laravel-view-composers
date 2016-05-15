<?php

namespace App\Http\Controllers;

use \App\Http\Repository\MovieRepository;

class SampleController extends Controller
{
    /**
     * Return a list of the latest movies to the
     * homepage
     *
     * @param MovieRepository $movie
     *
     * @return View
     */
    public function index(MovieRepository $movies)
    {
        $movieList = $movies->getMovieList();

        return view('welcome', compact('movieList'));
    }

    /**
     * pass an array to the 'foo' view
     * as a second parameter.
    */
    public function foo()
    {
        return view('foo', [
            'key' => 'The big brown fox jumped over the lazy dog'
        ]);
    }

    /**
     * Pass a key variable to the 'foo view
     * using the compact method as
     * the second parameter.
    */
    public function bar()
    {
        $key = 'If a would chuck can chuck wood,';

        return view('foo', compact('key'));
    }

    /**
     * Pass a key, value pair to the view
     * using the with method.
    */
    public function baz()
    {
        return view('foo')->with(
            'key',
            'How much woood would a woodchuck chuck.'
        );
    }
}
