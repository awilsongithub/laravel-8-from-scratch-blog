<x-layout>
    <h1 class="my-3">
        {{ $category ? $category->name . ' Posts' : 'All Posts' }}
    </h1>

    <div class="row gy-3">
        @foreach ($posts as $post)
            <div class="col-12 col-md-4">
                <div class="rounded border p-3 h-100">
                    <h3>{{ $post->title }}</h3>
                    <a href="/categories/{{ $post->category->slug }}" class="text-muted fs-6">Category:
                        {{ $post->category->name }}</a>
                    <p>{{ $post->excerpt }} </p>
                    <a href="/posts/{{ $post->slug }}">Read More</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
