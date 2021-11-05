---
title: About
description: A little bit of information about Adam
---
@extends('_layouts.master')

@section('body')
    <x-page-header>About</x-page-header>

    <div class="content">
        <p>Adam is a Software Developer who lives on land
            <a href="http://publichistorypdx.org/projects/chinook/lower-columbia-chinook-historical-timeline/">
                previously known to be sacred to the Chinook tribe
            </a>, a wonderful place on the Columbia River now called
            <a href="https://www.cityofvancouver.us/">Vancouver, Washington</a>.
        </p>
        <p>The allure in creating software comes from the allure of creation! In addition to his interest in
            building software, He has a wood shop in his garage, where he makes everything from drumsticks to
            toy clocks, and has been a professional musician for over 30 years, playing drums for bands of all
            styles from Jazz to Metal to Punk Rock.</p>
        <p>Adam is a father to a child heavily impacted by disability, and with the goal of creating a world where his
            disabilities can be accepted, Adam has embraced his own
            <a href="https://autisticadvocacy.org/about-asan/about-autism/">neurodiversity</a>,
            to show that people with mental disability can be relatively happy and successful contributors to society.
            Different brains can often be very powerful, and Adam is always interested in ways the web can help
            those with disabilities.
        </p>

        <p class="border-t pt-10">Follow Adam on Twitter, where you'll mostly see pictures of records,
            rants about Autism, and praise for PHP.</p>
        <a href="https://twitter.com/isAdamBailey?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">
            Follow @isAdamBailey
        </a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <p>You may also visit Adam's social media, or contact him via the email link in the footer of this portfolio!</p>

        <x-egg-rick-roll />
    </div>
@endsection
