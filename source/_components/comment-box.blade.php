<div {{ $attributes->merge(['class' => 'flex p-5 rounded overflow-hidden shadow-lg dark:bg-gray-700']) }}>
    <svg
        class="block mr-3 text-blue-700 dark:text-white"
        fill="currentColor"
        role="img"
        aria-hidden="true"
        width="30"
        height="30"
    >
        <use
            xmlns:xlink="http://www.w3.org/1999/xlink"
            xlink:href="/assets/img/icons.svg#icon-comment"
        />
    </svg>

    {{ $slot }}
</div>