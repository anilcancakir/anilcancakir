@extends('layouts.app')

@section('content')
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">{{ trans('series.browse_series') }}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, autem beatae commodi ea, enim et explicabo fugiat inventore itaque quidem soluta unde, voluptatum. Cupiditate earum ipsam iste, molestiae nam officia!</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-multiline">
                @foreach($series as $item)
                    <div class="column is-6">
                        @include('components.cards.series', ['item' => $item])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection