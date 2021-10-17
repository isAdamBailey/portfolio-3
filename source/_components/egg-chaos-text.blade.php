<div id="chaos-egg">
    <x-comment-box class="invisible md:visible md:w-1/2">
        <small>
            Easter egg - type the word "hi"!
        </small>
    </x-comment-box>
</div>

@push('scripts')
    <script>
        const egg = new Egg("h, i", function() {
            const element = document.getElementById('chaos-egg');

            element.classList.add('woah', 'wowzors');
        }).listen();
    </script>
@endpush