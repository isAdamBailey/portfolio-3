---
title: Blog
description: The list of blog posts for this site
pagination:
    collection: posts
    perPage: 10
---
@extends('_layouts.main')

@section('body')
    <div class="flex justify-center mb-10">
        <img src="/assets/img/main-logo.svg" alt="Main site logo for Adam Bailey">
    </div>
    <x-page-header>Blog</x-page-header>

    <hr class="border-b my-6">

    @foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')

        @if ($post != $pagination->items->last())
            <hr class="border-b my-6">
        @endif
    @endforeach

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-200 dark:bg-blue-700 text-gray-700 dark:text-white hover:bg-gray-400 hover:text-white rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-gray-200 dark:bg-blue-700 text-gray-700 dark:text-white hover:bg-gray-400 hover:text-white rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 dark:bg-blue-700 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
