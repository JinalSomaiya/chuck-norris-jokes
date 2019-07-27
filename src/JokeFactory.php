<?php
/**
 * Created by PhpStorm.
 * User: artixun
 * Date: 27/07/19
 * Time: 2:01 PM
 */

namespace Jinalsomaiya\ChuckNorrisJokes;

class JokeFactory
{
    public $jokes = [
        'Chuck Norris actually owns IBM. It was an extremely hostile takeover.',
        'Chuck Norris can watch an episode of 60 minutes in 39 seconds.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}