@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="video-player">
                <iframe
                        src="https://www.youtube-nocookie.com/embed/VPg9dqXYRU4?rel=0&amp;controls=0&amp;showinfo=0"
                        frameborder="0"
                        gesture="media"
                        allow="encrypted-media"
                        allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    <strong>{{ $episode->episode }}.</strong> {{ $episode->title }}
                </h1>
                <p>{{ $episode->description }}</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="box">
                @foreach($series->episodes as $episode)
                    @include('components.medias.episode', ['episode' => $episode])
                @endforeach
            </div>
        </div>
    </section>
@endsection