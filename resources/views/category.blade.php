<x-layout>
    <h3>
        Category: <?= $category->name ?>
        <span class="text-muted fs-6">Id: {{ $category->id }}</span>
    </h3>

    <p>Posts in this category:</p>
    @foreach ($category->posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach

    <a href="/">Back to Home</a>
</x-layout>
