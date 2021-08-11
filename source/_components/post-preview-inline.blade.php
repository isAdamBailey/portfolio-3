<div class="flex flex-col mb-4">
    <div class="flex justify-between">
        <h2 class="text-3xl mt-0">
            <a
                href="{{ $post->getUrl() }}"
                title="Read more - {{ $post->title }}"
                class="text-gray-900 font-extrabold"
            >
                {{ $post->title }}
            </a>
        </h2>

        <p class="text-gray-700 dark:text-gray-100 font-medium my-2">
            {{ $post->getDate()->format('F j, Y') }}
        </p>
    </div>

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >Read</a>
</div>
