@auth
                <x-panel>
                    <form action="{{$post->slug}}/comments" method="POST">
                        @csrf
                        <header class="flex items-center">
                            <img src="http://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="60" height="60" class="rounded-xl">
                            <h2 class="ml-4">Want to participate?</h2>
                        </header>
                        <div class="mt-6">
                            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Quick , thing of something to say " required></textarea>
                        @error('body')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                        </div>
                        <x-submit-button></x-submit-button>
                    </form>
                </x-panel>
                @else
                    <p class="font-semibold">
                        <a href="/register" class="hover:underline">Register</a> OR
                        <a href="/login" class="hover:underline">log in </a>to leave a comment
                    </p>
                @endauth
