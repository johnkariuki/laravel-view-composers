<?php

namespace App\Http\Repository;

/**
* Movie Repository class
*/
class MovieRepository
{
    /**
     * Get a list of all movies
     *
     * @return array  Array containing list of all movies
     */
    public function getMovieList()
    {
        return [
            'Shawshank redemption',
            'Forrest Gump',
            'The Matrix',
            'Pirates of the Carribean',
            'Back to the future',
        ];
    }
}
