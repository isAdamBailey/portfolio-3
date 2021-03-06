<nav id="js-nav-menu" class="nav-menu hidden lg:hidden transition-all duration-500 z-10">
    <ul class="my-0 list-none">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue underline' : '' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Links"
                href="/links"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/links') ? 'active text-blue underline' : '' }}"
            >Links</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue underline' : '' }}"
            >About</a>
        </li>
    </ul>
</nav>
