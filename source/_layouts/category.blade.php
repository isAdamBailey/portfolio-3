@extends('_layouts.main')

@section('body')
    <x-page-header>{{ $page->title }}</x-page-header>

    <div class="text-2xl border-b border-blue-200 mb-6 pb-10">
        @yield('content')
    </div>

    @foreach ($page->posts($posts) as $post)
        @include('_components.post-preview-inline')

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
@stop
