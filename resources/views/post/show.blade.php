@include('components.layout')
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <div>
                {{ $post->slug }}
            </div>
        </div>
    @endforeach

