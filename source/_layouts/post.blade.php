@extends('_layouts.master')

@php
    $page->type = 'article';
@endphp

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    <p class="text-gray-700 dark:text-gray-100 text-xl md:mt-0">{{ $page->author }}  •  {{ date('F j, Y', $page->date) }}</p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <x-category-button :category="$category"/>
        @endforeach
    @endif

    <div class="flex justify-start items-end space-x-3 mt-4">
        <p class="mb-0">Share:</p>
        <div>
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">
                Tweet
            </a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div>
            <div class="fb-share-button"
                 data-href="{{ $page->getUrl() }}"
                 data-layout="button_count"
            >
            </div>
        </div>
    </div>

    <div class="border-b border-t border-blue-200 mb-3 mt-5 pb-20" v-pre>
        @yield('content')
    </div>

    <div class="flex justify-between flex-wrap my-5 mb-20">
        @if ($page->categories[0])
            <div>
                You might like other posts in
                <x-category-button :category="$page->categories[0]"/>
            </div>
        @endif

        <a
            class="my-10 sm:my-0"
            href="https://github.com/isAdamBailey/portfolio-3/tree/main/source/_posts/{{ $page->getFilename() }}.{{ $page->getExtension() }}"
            title="Edit this post on github"
        >
            <x-action-button label="Edit"/>
        </a>
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
