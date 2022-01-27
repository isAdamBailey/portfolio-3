---
title: Links
description: Links to various other places you can find Adam on the web.
---
@extends('_layouts.main')

@section('body')
    <div class="flex justify-center mb-10">
        <img src="/assets/img/main-logo.svg" alt="Main site logo for Adam Bailey">
    </div>
    <x-page-header>Links</x-page-header>

    <div class="content">
        <h2>More places across the web where you can find me.</h2>
    </div>

    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-4 list-none">
        @foreach ($links as $link)
            <li>
                <a href="{{ $link->href }}" class="hover:bg-blue-200 dark:hover:bg-blue-700 hover:border-transparent hover:shadow-lg hover:shadow-blue-200 hover:dark:shadow-yellow-500 hover:text-gray-600 dark:hover:text-white cursor-pointer group block rounded-lg p-4 border border-blue-400 transition">
                    <div class="grid sm:block lg:grid xl:block grid-cols-1 lg:grid-cols-2 grid-rows-1 lg:grid-rows-2 items-center">
                        <h4>{{ $link->title }}</h4>
                        <p class="text-sm font-medium sm:mb-4 lg:mb-0 xl:mb-4">
                            {{ $link->description }}
                        </p>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
