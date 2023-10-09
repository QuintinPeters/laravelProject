{{-- @foreach ($products as $product)
    
@endforeach --}}
    <div class=" h-[390px] bg-stone-300 rounded-xl p-2 my-3 mx-1 font-medium">
        <div class="bg-neutral-200 rounded-xl w-80 h-[290px] p-3 flex justify-between bg-no-repeat bg-cover bg-center"
            style="background-image: url('images/leipeJakka.png') ">
            <div
                class="flex items-center rounded-lg from-purple-600 via-pink-600 to-blue-600 bg-gradient-to-r text-white h-6 text-center p-2">
                <p class="text-sm">op voorraad</p>
            </div>
            <div class="bg-stone-300 flex h-6 w-6 rounded-full justify-center items-center">
                {{-- favorite --}}
                <ion-icon name="bookmark-outline" class="text-lg"></ion-icon>
            </div>
        </div>
        <div class="text-[#212121] flex justify-between font-medium">
            <p class="">ergon jassie</p>
            <p class="">€10,50</p>
        </div>
        <div class="">
            <p class="font-normal">brand</p>
        </div>
        <button
            class="from-purple-600 via-pink-600 to-blue-600 bg-gradient-to-r border-2 bg-clip-text text-transparent text-lg font-semibold rounded-xl w-full 
            hover:bg-gradient-to-r hover:from-purple-600 hover:via-pink-600 hover:to-blue-600 hover:text-white hover:bg-clip-content hover:border-0">
            add to card +
        </button>
    </div>
