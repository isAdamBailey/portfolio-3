<div id="egg" class="flex justify-center">
    <img id="egg-image" class="hidden woah flyIn" src="https://media.giphy.com/media/a6OnFHzHgCU1O/giphy.gif" alt="rick rolled">
</div>
<div id="egg-text">
    <x-comment-box class="invisible md:visible md:w-1/2">
        <small>
            Easter egg - type the word "adam"!
        </small>
    </x-comment-box>
</div>

@push('scripts')
    <script>
        const egg = new Egg("a, d, a, m", function() {
            const element = document.getElementById('egg');
            const image = document.getElementById('egg-image');
            const text = document.getElementById('egg-text');

            text.classList.toggle('hidden');
            image.classList.toggle('hidden');
        }).listen();
    </script>
@endpush