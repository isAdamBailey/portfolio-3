<div
    id="scrollTopButton"
    class="invisible sticky w-full flex justify-end bottom-0 pb-3 pr-5 lg:pr-16 transition"
>
    <div
        class="bg-blue-300 bg-opacity-75 rounded-full cursor-pointer text-gray-800 hover:text-white transition"
    >
        <button
            role="button"
            aria-label="scroll to top of the page"
            onclick="actions.scrollToTop()"
        >
            <svg
                class="mt-0.5 p-0 mr-2.5 transform rotate-180"
                fill="currentColor"
                role="img"
                aria-hidden="true"
                width="27"
                height="27"
            >
                <use
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xlink:href="/assets/img/icons.svg#icon-chevron"
                />
            </svg>
        </button>
    </div>
</div>

@push('scripts')
<script>
    const actions = {
        scrollToTop() {
            window.scrollTo({ top: 0, behavior: "smooth" });
        },
        handleScroll() {
            const scrollBtn = document.getElementById('scrollTopButton');

            if (window.scrollY > 500) {
                scrollBtn.classList.remove("invisible");
            } else {
                scrollBtn.classList.add("invisible");
            }
        },
    }

    window.addEventListener("scroll", actions.handleScroll);
</script>
@endpush
