@extends('_layouts.master')

@section('body')

    <section class="column center flex-1">
        <h1>Hi! I'm Adam Bailey</h1>
        <div class="content">
            <h3>
                I'm a Software Developer with {{ date('Y') - '2015' }} years of experience in
                <span id="vue-typing-text">
                    <typing-text :words="['Laravel.', 'PHP.', 'Javascript.', 'Vue.']"></typing-text>
                </span>
            </h3>

            <div class="flex justify-center">
                <a href="https://drive.google.com/open?id=1uPXrHJ42H8d4Um-2cXLfA2e7t32GZFI6">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Open My Resume!</button>
                </a>
            </div>

            <h2 class="mt-12">Projects</h2>
            <p class="text-copy-primary">While the vast majority of my best work was done in private repositories,
                Here are some examples of open source projects ive worked on.</p>
            <div class="posts flex justify-center flex-wrap">
                @foreach ($projects as $project)
                    <div class="flex flex-col justify-between max-w-sm rounded overflow-hidden shadow-lg m-4 bg-background-card">
                        <div class="p-4">
                            <div class="text-copy-heading font-bold text-3xl">{{ $project->title }}</div>
                            <p class="text-copy-primary text-base">{{ $project->description }}</p>
                        </div>
                        <div class="justify-around inline-flex pb-4">
                            @if($project->siteLink)
                                <a href="{{ $project->siteLink }}">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Live Site</button>
                                </a>
                            @endif
                            <a href="{{ $project->github }}">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Github</button>
                            </a>
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
@stop
