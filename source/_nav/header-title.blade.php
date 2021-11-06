<div class="flex items-center">
    <a id="title" href="/" title="{{ $page->siteName }} home">
        <svg width="100%" viewBox="0 0 1350 200" xmlns="http://www.w3.org/2000/svg">
            <linearGradient id="gradient" x1="0" y1="0" x2="100%" y2="100%">
                <stop stop-color="#a3bffa" offset="10%"/>
                <stop stop-color="#4c51bf" offset="90%"/>
            </linearGradient>
            <text fill="url(#gradient)" class="uppercase" x="0" y="57%" alignment-baseline="middle" font-size="13rem">
                {{ $page->siteName }}
            </text>
        </svg>
    </a>
</div>