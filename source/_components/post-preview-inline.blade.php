<a href="{{ $post->getUrl() }}"
    title="Read more - {{ $post->title }}"
    class="flex flex-col mb-4 text-gray-900 dark:text-gray-100 dark:hover:text-yellow-500"
>
    <div class="flex justify-between">
        <h2 class="text-3xl font-extrabold mt-0">
                {{ $post->title }}
        </h2>

        <p class="font-medium my-2">
            {{ $post->getDate()->format('F j, Y') }}
        </p>
    </div>

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>
</a>
