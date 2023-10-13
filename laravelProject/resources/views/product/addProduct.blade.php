<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>webshop | Add product</title>
</head>

<body class="antialiased overflow-x-hidden overflow-y-hidden">
    <x-header />

    <div class="grid grid-cols-[8%_1fr_8%] h-screen bg-center bg-cover bg-no-repeat"
        style="background-image:url('/images/landingImg.jpg')">
        <div class="col-start-2 flex mt-3 flex-wrap flex-row justify-center">
            <div
                class="backdrop-blur-[20px] h-4/5 border border-[#272727ae] rounded-3xl w-1/2 p-3 flex justify-center items-center">
                <form action="{{ url('/products') }}" method="POST" class="flex justify-center flex-col w-2/3">
                    @csrf
                    <h1 class="text-xl font-semibold text-center">voeg hier je eigen product toe</h1>

                    <label for="" class="">product naam:</label>
                    <br>
                    <input type="text"
                        class="rounded-xl bg-transparent border-[#272727] w-3/4 focus-visible:outline-none placeholder:text-neutral-600 placeholder:font-medium"
                        placeholder="hoesje" name="product_name">
                    <br>

                    <label for="" class="">product merk:</label>
                    <br>
                    <input type="text"
                        class="rounded-xl bg-transparent border-[#272727] w-3/4 focus-visible:outline-none placeholder:text-gray-500"
                        placeholder="samsung" name="product_brand">
                    <br>

                    <label for="" class="">product prijs:</label>
                    <br>
                    <input type="text"
                        class="rounded-xl bg-transparent border-[#272727] w-3/4 placeholder:text-gray-500"
                        placeholder="€9,99" name="product_price">
                    <br>
                    <input type="file" name="produt_img" id="" class="w-3/4">
                    <br>
                    <input type="submit" value="opslaan" class="border rounded-2xl w-2/3 self">
                </form>
            </div>
        </div>
    </div>
</body>

</html>

{{-- <label for="Pbrand" class="">Merk</label>
                    <input type="text" name="product_brand" id="Pbrand"class="my-3 rounded-lg border-[1.5] border-black" required>


                    <label for="Pprice">Prijs:*</label>
                    <br>
                    <input type="text" name="product_price" id="Pprice"
                        class="my-3 rounded-lg border-[1.5] border-black" required>
                    <br>
                    <label for="Pimg">afbeelding:*</label>
                    <br>
                    <input type="file" name="product_img" id="Pimg" class="my-3" required>
                    <br>
                    <input type="submit" value="toevoegen" class="text-[#272727] border rounded-lg font-medium w-1/2 "> --}}
