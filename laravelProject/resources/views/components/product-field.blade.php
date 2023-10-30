@foreach ($products as $product)
    <div class=" h-[390px] bg-stone-300 rounded-xl p-2 my-3 mx-1 font-medium">
        <div class="bg-neutral-200 rounded-xl w-80 h-[290px] p-3 flex justify-between bg-no-repeat bg-cover bg-center"
            style="background-image: url('images/{{ $product->product_img }}') ">
            <div
                class="flex items-center rounded-lg from-purple-600 via-pink-600 to-blue-600 bg-gradient-to-r text-white h-6 text-center p-2">
                <p class="text-sm">
                    @if ($product->product_inStock == 0)
                    niet beschikbaar
                    @elseif ($product->product_inStock <= 5)
                    beperkt beschikbaar
                    @else
                    op voorraad
                    @endif
                </p>
            </div>
            <div class="bg-stone-300 flex h-6 w-6 rounded-full justify-center items-center">
                <a href="{{route('product.edit', ['product' => $product])}}"><ion-icon name="create-outline" class="text-lg"></ion-icon></a>

            </div>
        </div>
        <div class="text-[#212121] flex justify-between font-medium">
            <p class="capitalize">{{ $product->product_name }}</p>
            <p class="">{{ $product->product_price }}</p>
        </div>
        <div class="capitalize">
            <p class="font-normal">{{ $product->product_brand }}</p>
        </div>
        <button
            class="from-purple-600 via-pink-600 to-blue-600 bg-gradient-to-r border-2 bg-clip-text text-transparent font-semibold rounded-xl w-full 
            hover:bg-gradient-to-r hover:from-purple-600 hover:via-pink-600 hover:to-blue-600 hover:text-white hover:bg-clip-content hover:border-transparent">
            add to card +
        </button>
    </div>
@endforeach
