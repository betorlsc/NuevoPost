@props(['post'])
<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if ($post->image)
        <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
            alt="{{ $post->name }}">
    @else
    <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2021/08/20/15/00/road-6560656_960_720.jpg"
    alt="{{ $post->name }}">
    @endif

    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
        <div class="text-gary-700 text-base">
            {!! $post->extract !!}
        </div>
        <div class="px-6 pt-4 pb-2">
            @foreach ($post->tags as $tag)
                <a href="{{ route('posts.tag', $tag) }}"
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gary-700">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
</article>
