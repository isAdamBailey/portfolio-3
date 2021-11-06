<button
   class="text-blue-700 dark:text-blue-300 hover:text-gray-600 m-5"
   aria-label="Toggle Dark Theme"
   onclick="theme.toggle()"
>
    <svg id="light"
         xmlns="http://www.w3.org/2000/svg"
         width="24"
         height="24"
         fill="none"
         stroke="currentColor"
         stroke-width="2"
         stroke-linecap="round"
         stroke-linejoin="round"
         class=""
    >
        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
    </svg>
    <svg id="dark"
         xmlns="http://www.w3.org/2000/svg"
         width="24"
         height="24"
         fill="none"
         stroke="currentColor"
         stroke-width="2"
         stroke-linecap="round"
         stroke-linejoin="round"
         class="">
        <circle cx="12" cy="12" r="5"/>
        <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
    </svg>
</button>

@push('scripts')
<script>
    const light = document.getElementById('light');
    const dark = document.getElementById('dark');

    if (document.documentElement.classList.contains('dark')) {
        light.classList.add('hidden')
        dark.classList.remove('hidden')
    } else {
        dark.classList.add('hidden')
        light.classList.remove('hidden')
    }

    const theme = {
        toggle() {
            document.documentElement.classList.toggle('dark')
            light.classList.toggle('hidden')
            dark.classList.toggle('hidden')

            const newTheme = localStorage.theme === 'light' ? 'dark' : 'light'
            localStorage.setItem('theme', newTheme)
        },
    };
</script>
@endpush
