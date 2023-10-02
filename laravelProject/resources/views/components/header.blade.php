
  <header
    class="bg-[#272727] w-screen flex justify-between items-center dark:text-white h-20 selection:text-white font-[poppins]">
    <h1
        class="sm:p-6 sm:text-2xl font-bold from-purple-600 via-pink-600 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent">
        Webshop</h1>
    <ul
        class="flex sm:p-6 font-bold from-purple-600 via-pink-600 to-blue-600 bg-gradient-to-r bg-clip-text text-transparent text-lg">
        <li class="mx-2"><a href="{{ url('/') }}">home</a></li>
        <li class="mx-2"><a href="">products</a></li>

        @auth
        <li class="mx-2"><a href="{{ url('/addProduct') }}">add product</a></li>
        @endauth
    </ul>
    @if (Route::has('login'))
        <div class=" p-6 z-10 ">

            @auth
                <a href="{{ url('/dashboard') }}"
                    class="font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                    class="font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Register</a>
                @endif
            @endauth
        </div>
    @endif
</header>
