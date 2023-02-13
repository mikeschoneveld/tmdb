<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class TMDBService
{
    /**
     * Http client
     *
     * @var Http
     */
    private $client;

    /**
     * The pages in the PDF.
     *
     * @var array
     */
    private $pages = [];

    /**
     * Create a new PrintCom service instance.
     *
     * return void
     */
    public function __construct()
    {
        $endpoint = config('services.tmdb.endpoint');
        $accessToken = config('services.tmdb.token');

        $this->client = Http::withOptions([
            'base_uri' => $endpoint,
        ])->withToken($accessToken);
    }

    /**
     * Return list of favorite movies.
     *
     * @return array
     */
    public function favoriteMovies(): array
    {
        return $this->client->get('/account/mikeschoneveld/movie/favorites')->json();
    }
}
