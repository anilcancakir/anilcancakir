<div class="card">
    <div class="card-image">
        <figure class="image is-2by1">
            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
        </figure>
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-content">
                <a href="{{ route('series.show', $item) }}">
                    <h2 class="title">{{ $item->title }}</h2>
                </a>
            </div>
        </div>

        <div class="content">{{ $item->description }}</div>
    </div>
</div>