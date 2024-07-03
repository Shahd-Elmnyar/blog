<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/register" class=" mt-10">
                @csrf
                <div class='mb-6'>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        name
                    </label>
                    <input type="text" name="name" id="name" value="{{old('name')}}"  class="border border-gray-400 p-2 w-full">
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">
                        {{$message}}
                    </p>
                    @enderror()
                </div>
                <div class='mb-6'>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        username
                    </label>
                    <input type="text" name="username" id="username" value="{{old('username')}}"  class="border border-gray-400 p-2 w-full">
                    @error('username')
                    <p class="text-red-500 text-xs mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class='mb-6'>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        email
                    </label>
                    <input type="email" name="email" id="email" value="{{old('email')}}"  class="border border-gray-400 p-2 w-full">
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{$message}}
                    </p>
                @enderror
                </div>
                <div class='mb-6'>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        password
                    </label>
                    <input type="password" name="password" id="password" value="{{old('password')}}"  class="border border-gray-400 p-2 w-full">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>

                <div class='mb-6'>
                    <button type="submit" class=" bg-blue-400 text-white rounded py-w px-4 hover:bg-blue-500">
                        register
                    </button>
                </div>
                <!-- @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{$error}}</li>
                    @endforeach
                </ul>
                @endif -->
            </form>
        </main>
    </section>
</x-layout>
