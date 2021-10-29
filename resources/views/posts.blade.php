<x-layout>
    <h1 class="my-3">
        @if ($category)
            Posts from Category {{ $category->name }}
        @elseif ($author)
            Posts by {{ $author->name }}
        @else
            All Posts
        @endif
    </h1>

    <div class="row gy-3">
        @foreach ($posts as $post)
            <div class="col-12 col-md-4">
                <div class="rounded border p-3 h-100">
                    <h3>{{ $post->title }}</h3>
                    <p class="text-muted fs-6">
                        By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </p>
                    <p>{{ $post->excerpt }} <a href="/posts/{{ $post->slug }}">Read More</a></p>

                </div>
            </div>
        @endforeach
    </div>
</x-layout>
