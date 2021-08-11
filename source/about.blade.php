---
title: About
description: A little bit about the site
---
@extends('_layouts.master')

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <div class="content">
        <p>Adam is a Software Developer who lives in Vancouver, Washington. He writes code in PHP and
            JavaScript. Adam has been building software professionally since 2015.</p>
        <p>The allure in creating software comes from the allure of creation! In addition to his interest in
            building software, He has a wood shop in his garage, where he makes everything from drumsticks to
            toy clocks, and has been a professional musician for 30 years, playing drums for bands of all
            styles from Jazz to Metal. Adam is also a father to 2 wonderful boys!</p>
        <p>You may contact Adam via the links in the footer of this portfolio!</p>

        <a href="https://twitter.com/isAdamBailey?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">
            Follow @isAdamBailey
        </a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
@endsection
