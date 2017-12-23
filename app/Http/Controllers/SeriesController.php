<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
use SEO;

class SeriesController extends Controller
{
    /**
     * Display list of series.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->setSeo('series.index');

        $series = Series::orderBy('created_at')
            ->paginate();

        return view('series.index', [
            'series' => $series
        ]);
    }

    /**
     * Display a series.
     *
     * @param Series $series
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Series $series)
    {
        $this->setSeo('series.show', [
            'title' => $series->title
        ]);

        SEO::setDescription($series->description);

        $series->load('episodes');

        return view('series.show', [
            'series' => $series
        ]);
    }
}
