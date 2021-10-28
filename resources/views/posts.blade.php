<x-layout>
    <div class="row gy-3">
        @foreach ($posts as $post)
            <div class="col-12 col-md-4">
                <div class="rounded border p-3 h-100">
                    <h3>{{ $post->title }}</h3>
                    {{ $post->excerpt }}
                    <a href="/posts/{{ $post->slug }}">Read More</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
