
<div id="chaos-egg">
    <x-comment-box class="invisible md:visible md:w-1/2">
        <small>
            Easter egg - type the word "hi"!
        </small>
    </x-comment-box>
    <marquee id="marquee" class="hidden mt-5 py-2 bg-red-900 text-white w-full transition">
        Hi! It's really great to interact with someone.
        I've personally enjoyed this opportunity to use a marquee.
        Is there anyone who will actually still be reading this?
        I mean it's getting pretty wierd at this point...
        ok... maybe go check out one of my blog posts?
    </marquee>
</div>

@push('scripts')
    <script>
        const egg = new Egg("h, i", function() {
            const marquee = document.getElementById('marquee');

            marquee.classList.remove('hidden');
        }).listen();
    </script>
@endpush