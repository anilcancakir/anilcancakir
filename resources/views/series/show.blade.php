@extends('layouts.app')

@section('content')
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">{{ $series->title }}</h1>
                <p>{{ $series->description }}</p>
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