<x-layout>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-12 col-md-4">
                <h3>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h3>
                {{-- escape the parser and let through as is --}}
                {!! $post->body !!}
            </div>
        @endforeach
    </div>
</x-layout>
