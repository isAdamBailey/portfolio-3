<div class="flex items-center">
    <a id="title" class="flex" href="/" title="{{ $page->siteName }} home">
        <img class="w-10 h-10 mr-3" src="/assets/img/icon1.svg" alt="site icon" />
        <svg class="hidden md:block" width="100%" viewBox="0 0 1350 200" xmlns="http://www.w3.org/2000/svg">
            <linearGradient id="gradient" x1="0" y1="0" x2="100%" y2="100%">
                <stop stop-color="#1EA3FB" offset="10%"/>
                <stop stop-color="#135CF7" offset="90%"/>
            </linearGradient>
            <text fill="url(#gradient)" class="uppercase" x="0" y="57%" alignment-baseline="middle" font-size="13rem">
                {{ $page->siteName }}
            </text>
        </svg>
    </a>
</div>