<?php

namespace App\Console\Commands;

use App\Services\TMDBService;
use Illuminate\Console\Command;

class RetrieveMovies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'retrieve:movies';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieve movies';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(TMDBService $service)
    {
        $movies = $service->favoriteMovies();

        $ratio = [
            'en' => 1.2,
            'ko' => 1.5,
        ];
        
        // Group the above movies by year of release date;

        // Filter out all movies with the adult = true; 

        // Get only movies with a rating of 7.5 or higher;

        // Sort all the movies by release date;

        // Add a default URL to the backdrop path and put it into a new element;

        // Get a array of only all the ids of the movies;

        // Remove the last 2 movies the end of the array;

        // Get the avarage movie rating of the list;

        // Get the sum of the popularity of all the movies;

        // Return the count of the Korean movies;

        // Return the avarage movie rating of the Korean movies;

        // Return the avarage movie rating based on the ratio of the language (see $ratio);
    }
}
