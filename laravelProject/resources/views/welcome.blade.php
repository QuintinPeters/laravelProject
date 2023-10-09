<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webshop | home</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased font-[poppins] min-h-screen bg-gray-100 m-0 p-0 overflow-x-hidden">
    <div class="grid grid-cols-3 grid-rows-4 h-screen bg-cover bg-no-repeat" style="background-image:url('/images/landingImg.jpg')">
        <x-header />
        <section class="row-start-3 col-span-2">
            <div class="p-6 text-[#212121]">
                <h1 class="text-2xl font-semibold">about</h1>
                <p class="sm:w-3/4 text-lg font-medium ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                    asperiores
                    similique nam harum sit. Est tempora vitae ipsum tempore, nihil voluptas nulla earum ab
                    aspernatur eius cupiditate consequuntur repellendus animi. Lorem ipsum dolor sit, amet
                    consectetur adipisicing elit. Nihil a atque nobis qui, nesciunt ea, laboriosam explicabo
                    itaque
                    sequi, quibusdam repellat nisi laudantium mollitia est voluptatem. Sunt asperiores
                    voluptatum
                    ex.</p>
            </div>
        </section>
    </div>

</body>

</html>
