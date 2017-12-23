<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Series;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use SEO;

class EpisodeController extends Controller
{
    /**
     * Display a episode in series.
     *
     * @param Series $series
     * @param $episode
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Series $series, $episode)
    {
        $series->load('episodes');
        /** @var Episode $episode */
        $episode = $series->episodes->where('episode', $episode)->first();

        if (!$episode) {
            throw new ModelNotFoundException();
        }

        $this->setSeo('episode.show', [
            'episode' => $episode->episode,
            'title' => $episode->title
        ]);

        SEO::setDescription($episode->description);

        return view('episode.show', [
            'series' => $series,
            'episode' => $episode
        ]);
    }
}
