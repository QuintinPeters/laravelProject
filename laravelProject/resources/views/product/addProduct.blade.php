<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>webshop | Add product</title>
</head>

<body class="antialiased overflow-x-hidden sm:overflow-y-hidden">
    <x-header />

    <div class="grid md:grid-cols-[8%_1fr_8%] max-[769px]:grid-cols-[2%_1fr_2%] h-screen bg-center bg-cover bg-no-repeat"
        style="background-image:url('/images/landingImg.jpg')">
        <div class="col-start-2 flex mt-3 flex-wrap flex-row justify-center">
            <div
                class="backdrop-blur-[20px] h-5/6 border border-[#272727ae] rounded-3xl min-[850px]:w-1/2 w-full flex justify-center items-center">
                <form action="{{ route('product.store') }}" method="POST" class="flex justify-around flex-col h-5/6 w-2/5">
                    @csrf
                    <h1 class="text-lg font-semibold text-center">voeg hier je eigen product toe</h1>

                    <div class="">
                        <label for="" class="">product naam:</label>
                        <input type="text"
                            class="rounded-xl bg-transparent border-[#272727] -visible:outline-none placeholder:text-gray-500 placeholder:font-medium"
                            placeholder="hoesje" name="product_name" required autocomplete="off">
                    </div>
                    <div>
                        <label for="" class="">product merk:</label>
                        <input type="text"
                            class="rounded-xl bg-transparent border-[#272727] focus-visible:outline-none placeholder:text-gray-500"
                            placeholder="samsung" name="product_brand" required autocomplete="off">
                    </div>
                    <div>
                        <label for="" class="">product prijs:</label>
                        <input type="text"
                            class="rounded-xl bg-transparent border-[#272727] placeholder:text-gray-500"
                            placeholder="€9,99" name="product_price" title="gebruik het euroteken" autocomplete="off">
                    </div>
                    <div>
                        <label for="" class="">product voorraad:</label>
                        <input type="text"
                            class="rounded-xl bg-transparent border-[#272727] placeholder:text-gray-500"
                            name="product_inStock" autocomplete="off" required>
                    </div>
                    <input type="file" name="product_img" id="" class="">
                    <input type="submit" value="opslaan" class="border rounded-2xl w-2/3">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
