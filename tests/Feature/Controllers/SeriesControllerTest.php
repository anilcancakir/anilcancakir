<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SeriesControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testShowTheListOfSeries()
    {
        $firstSeries = $this->fakeSeries();
        $secondSeries = $this->fakeSeries();

        $this->get(
            route('series.index')
        )
            ->assertSeeText($firstSeries->title)
            ->assertSeeText($secondSeries->title);
    }

    /** @test */
    public function testShowEpisodesInSeriesShowPage()
    {
        $series = $this->fakeSeries();
        $firstEpisode = $this->fakeEpisode(['series_id' => $series->id]);
        $secondEpisode = $this->fakeEpisode(['series_id' => $series->id]);

        $this->get(
            route('series.show', $series)
        )
            ->assertSeeText($firstEpisode->title)
            ->assertSeeText($secondEpisode->title);
    }
}
