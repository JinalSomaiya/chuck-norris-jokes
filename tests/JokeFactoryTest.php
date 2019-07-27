<?php
/**
 * Created by PhpStorm.
 * User: artixun
 * Date: 27/07/19
 * Time: 3:41 PM
 */

namespace Jinalsomaiya\ChuckNorrisJokes\Tests;

use Jinalsomaiya\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris actually owns IBM. It was an extremely hostile takeover.',
            'Chuck Norris can watch an episode of 60 minutes in 39 seconds.'
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}