<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EpisodeControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testShowThePlayer()
    {
        $episode = $this->fakeEpisode();

        $this->get(
            route('episode.show', [$episode->series, $episode->episode])
        )
            ->assertSee('video-player')
            ->assertSee('<iframe');
    }

    /** @test */
    public function testShowTheOtherEpisodesInShowPage()
    {
        $series = $this->fakeSeries();
        $firstEpisode = $this->fakeEpisode(['series_id' => $series->id]);
        $secondEpisode = $this->fakeEpisode(['series_id' => $series->id]);

        $this->get(
            route('episode.show', [$series, $firstEpisode->episode])
        )
            ->assertSeeText($firstEpisode->title)
            ->assertSeeText($secondEpisode->title);
    }
}
