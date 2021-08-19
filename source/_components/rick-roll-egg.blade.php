<div id="egg" class="flex justify-center opacity-0 transition-opacity duration-1000 ease-in-out">
    <img id="egg-image" class="my-5 hidden" src="https://media.giphy.com/media/a6OnFHzHgCU1O/giphy.gif" alt="rick rolled">
</div>
<small id="egg-text">
    Now, if you've actually read this far, if you are on a desktop computer, <strong>type the word "adam"</strong>
    and see what happens!
</small>

@push('scripts')
    <script>
        const egg = new Egg("a, d, a, m", function() {
            const element = document.getElementById('egg');
            const image = document.getElementById('egg-image');
            const text = document.getElementById('egg-text');

            text.classList.toggle('hidden');
            image.classList.toggle('hidden');
            element.classList.toggle('opacity-0');
            element.classList.toggle('opacity-100');
        }).listen();
    </script>
@endpush