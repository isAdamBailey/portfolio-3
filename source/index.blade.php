@extends('_layouts.main')

@section('body')

    <section class="column center flex-1">
        <x-page-header>Hi! I'm <span class="text-blue-600">Adam Bailey</span></x-page-header>

        <div class="content">
            <h2 class="h-32">
                I'm a Software Developer working in
                <span id="vue-typing-text">
                    <typing-text :words="[
                        'JavaScript.', 'Vue.', 'Laravel.', 'PHP.', 'chaos.', 'the basement.', 'the dark.', 'making you think the computer is typing this by itself.', 'a state of panic.'
                    ]"></typing-text>
                </span>
            </h2>

            <h3>Industries I have led full-scale production development in:</h3>
            <div class="px-4 flex flex-col justify-between rounded overflow-hidden shadow-lg shadow-blue-200 dark:shadow-purple-900 m-6 dark:bg-gray-700">
                <p class="flex flex-col md:flex-row md:flex-wrap justify-around my-0">
                    <span class="text-3xl font-semibold">Healthcare</span>
                    <span class="text-3xl font-semibold">Fintech</span>
                    <span class="text-3xl font-semibold">Marketing</span>
                    <span class="text-3xl font-semibold">Fitness</span>
                </p>
                <p>
                    EMR Integration &middot; Landing Pages &middot; Front Office &middot; Loan Processing
                    &middot; Banking integrations &middot; SEO &middot; Content &middot; Accessibility
                    &middot; Tracker Integration &middot; Team Competition
                </p>
            </div>
            <h3 class="mt-10 md:mt-20">Here are some examples of open source projects I've worked on.</h3>
            <div class="posts flex justify-center flex-wrap">
                @foreach ($projects as $project)
                    <div class="flex flex-col justify-between max-w-sm rounded overflow-hidden shadow-lg shadow-blue-200 dark:shadow-purple-900 m-4 bg-white dark:bg-gray-700">
                        <div class="p-4">
                            <div class="font-bold text-3xl">{{ $project->title }}</div>
                            <p>{{ $project->description }}</p>
                        </div>
                        @if ($project->cover_image)
                            <img src="{{ $project->cover_image }}" alt="{{ $project->title }} cover image" class="mb-3">
                        @endif
                        <div class="justify-around inline-flex pb-4">
                            @if($project->siteLink)
                                <a href="{{ $project->siteLink }}">
                                    <x-action-button label="Live Site" class="font-bold py-2"/>
                                </a>
                            @endif
                            @if($project->github)
                                <a href="{{ $project->github }}">
                                    <x-action-button label="Code" class="font-bold py-2"/>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <h2 class="mt-12">Featured Blog Posts</h2>
    @foreach ($posts->where('featured', true) as $post)
        @include('_components.post-preview-inline')

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    <x-egg-marquee-text />
@stop
