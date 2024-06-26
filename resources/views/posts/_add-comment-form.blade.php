@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                     alt=""
                     width="40"
                     height="40"
                     class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea
                        name="body"
                        class="w-full text-sm focus:outline-none focus:ring"
                        rows="5"
                        placeholder="Quick, think of something"
                        required></textarea>

                @error('body')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <x-submit-button>Post</x-submit-button>
            <div class="flex justify-end mt-4 border-t border-gray-200 pt-4">

            </div>

        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or
        <a href="/login"
           class="hover:underline">Log in</a> to leave a comment.
    </p>
@endauth