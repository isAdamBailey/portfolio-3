@extends('_layouts.master')

@section('body')

    <section class="column center flex-1">
        <x-page-header>Hi! I'm Adam Bailey</x-page-header>

        <div class="content">
            <h2>
                I'm a Software Developer working in
                <span id="vue-typing-text">
                    <typing-text :words="[
                        'Laravel.', 'PHP.', 'JavaScript.', 'Vue.', 'chaos.', 'the basement.', 'the dark.'
                    ]"></typing-text>
                </span>
            </h2>

            <div class="flex justify-center">
                <a href="https://docs.google.com/document/d/11USW6aV671jQQfOKpp_hleF8B5f4g6QFaGCkcbuwBz8/">
                    <x-action-button label="Open My Resume!" class="font-bold py-3"/>
                </a>
            </div>

            <h2 class="mt-12">Projects</h2>
            <div class="px-4 flex flex-col justify-between rounded overflow-hidden shadow-lg m-4 dark:bg-gray-700">
                <p>I have built and contributed to full-scale production applications in the following industries:</p>
                <ul class="m-0 list-none">
                    <li>
                        <strong>Healthcare -</strong>
                        <small>EMR Integration &middot; Landing Pages &middot; Front Office</small>
                    </li>
                    <li>
                        <strong>Fintech -</strong>
                        <small>Loan Processing &middot; Banking integrations</small>
                    </li>
                    <li>
                        <strong>Marketing -</strong>
                        <small>SEO &middot; Content &middot; Accessibility</small>
                    </li>
                    <li>
                        <strong>Fitness -</strong>
                        <small>Tracker Integration &middot; Team Competition</small>
                    </li>
                </ul>
                <p>
                    However, many of those were private repositories.
                </p>
            </div>
            <h3>Here are some examples of open source projects I've worked on.</h3>
            <div class="posts flex justify-center flex-wrap">
                @foreach ($projects as $project)
                    <div class="flex flex-col justify-between max-w-sm rounded overflow-hidden shadow-lg m-4 dark:bg-gray-700">
                        <div class="p-4">
                            <div class="font-bold text-3xl">{{ $project->title }}</div>
                            <p>{{ $project->description }}</p>
                        </div>
                        <div class="justify-around inline-flex pb-4">
                            @if($project->siteLink)
                                <a href="{{ $project->siteLink }}">
                                    <x-action-button label="Live Site" class="font-bold py-2"/>
                                </a>
                            @endif
                            @if($project->github)
                                <a href="{{ $project->github }}">
                                    <x-action-button label="Github" class="font-bold py-2"/>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <h2 class="mt-12">Featured Blog Posts</h2>
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-6">
            <div class="flex justify-between">
                <h2 class="text-3xl mt-0">
                    <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-extrabold">
                        {{ $featuredPost->title }}
                    </a>
                </h2>

                <p class="text-gray-700 dark:text-gray-100 font-medium my-2">
                    {{ $featuredPost->getDate()->format('F j, Y') }}
                </p>
            </div>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    <x-egg-chaos-text />
@stop
