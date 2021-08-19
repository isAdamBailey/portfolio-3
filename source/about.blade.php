---
title: About
description: A little bit about the site
---
@extends('_layouts.master')

@section('body')
    <h1>About</h1>

    <div class="content">
        <p>Adam is a Software Developer who lives on land
            <a href="http://publichistorypdx.org/projects/chinook/lower-columbia-chinook-historical-timeline/">previously known to be sacred to the Chinook tribe</a>,
            a wonderful place on the Columbia River now called <a href="https://www.cityofvancouver.us/">Vancouver, Washington</a>.
            Adam has been building software professionally in PHP and JavaScript since 2015.</p>
        <p>The allure in creating software comes from the allure of creation! In addition to his interest in
            building software, He has a wood shop in his garage, where he makes everything from drumsticks to
            toy clocks, and has been a professional musician for over 30 years, playing drums for bands of all
            styles from Jazz to Metal to Punk Rock. Adam is also a father to 2 wonderful boys!</p>
        <p>Adam is <a href="https://autisticadvocacy.org/about-asan/about-autism/">neurodiverse</a>,
            believes that different brains can often be very powerful, and is always interested
            in ways the web can help those with disabilities. Please let me know if something on this site is not
            accessible for you.</p>

        <p class="border-t pt-10">Follow Adam on Twitter, where you'll mostly see pictures of records,
            some talk about mental health, and praise for PHP!</p>
        <a href="https://twitter.com/isAdamBailey?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">
            Follow @isAdamBailey
        </a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <p>You may also visit Adam's social media, or contact him via the email link in the footer of this portfolio!</p>

        @include('_components.rick-roll-egg')
    </div>
@endsection
