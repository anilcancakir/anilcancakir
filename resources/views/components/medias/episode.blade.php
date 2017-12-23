<article class="media">
    <div class="media-content">
        <div class="content">
            <a href="{{ route('episode.show', [$series, $episode->episode]) }}">
                <h2>
                    <strong>{{ $episode->episode }}.</strong> {{ $episode->title }}
                </h2>
            </a>
            <p>{{ $episode->description }}</p>
        </div>
    </div>
</article>
