<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600 underline' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} Links" href="/links"
       class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/links') ? 'active text-blue-600 underline' : '' }}">
        Links
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600 underline' : '' }}">
        About
    </a>
</nav>
