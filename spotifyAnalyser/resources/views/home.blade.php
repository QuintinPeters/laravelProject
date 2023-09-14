<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>spotify Analyser</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="font-['poppins'] min-h-screen">
    <div class="flex flex-col h-[100vh] bg-stone-800">
        <nav class="bg-stone-900">
            <div class="basis-2/12 h-20 w-[100vw] flex items-center">
                <a href="#" class="text-2xl font-medium mx-3 text-[#1db954]">Spotify Analyser</a>
                <ul class="text-white text-lg flex items-center mx-auto font-medium ">
                    <li class="mx-3 hover:underline underline-offset-4 decoration-[#1db954]"><a href="#">Home</a>
                    </li>
                    <li class="mx-3 hover:underline underline-offset-4 decoration-[#1db954]"><a href="#">Home</a>
                    </li>
                    <li class="mx-3 hover:underline underline-offset-4 decoration-[#1db954]"><a href="#">Home</a>
                    </li>
                    <li class="mx-3 hover:underline underline-offset-4 decoration-[#1db954]"><a href="#">Home</a>
                    </li>
                    <li class="mx-3 hover:underline underline-offset-4 decoration-[#1db954]"><a href="#">Home</a>
                    </li>
                </ul>
                <a href="#">
                    <ion-icon name="person-circle-outline" class="mx-5 text-4xl text-white hover:text-[#1db954]"></ion-icon>
                </a>
            </div>
        </nav>
        <div class=" basis-3/4">
        </div>
        <footer class="basis-[15%] bg-stone-900 text-white">
            <h1>yoooo</h1>
        </footer>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
