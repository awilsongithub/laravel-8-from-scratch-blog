<x-layout>
    <h1 class="my-3"><?= $post->title ?></h1>
    <p class="text-muted fs-6">
        By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
            href="#">{{ $post->category->name }}</a>
    </p>
    <p>
        <?= $post->body ?>
    </p>

    <a href="/">Back to Home</a>
</x-layout>
