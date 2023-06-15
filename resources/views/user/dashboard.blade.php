<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shop Now') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($products as $product)
                <form action="{{route('orders.store')}}" method="POST">
                @csrf
                  <div class="relative flex flex-col overflow-hidden rounded-lg border border-slate-100 bg-white shadow-md w-64 hover:bg-slate-200 hover:border-slate-200">
                    <div class="mt-4 px-5 pb-5">
                      <h5 class="text-xl tracking-tight font-semibold text-slate-900">{{$product->product_name}}</h5>
                      <div class="max-w-md h-20 bg-neutral-500 p-2 overflow-hidden rounded-md text-white">
                        <p class="text-sm">{{$product->product_description}}</p>
                      </div>
                      <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                          <span class="text-3xl font-bold text-slate-900">${{$product->price}}</span>
                        </p>
                        <div class="text-center flex flex-col ">
                            <div class="">
                                <spa class="rounded px-2.5 py-0.5 text-xs text-gray-600 stocks-left">{{$product->quantity}} items left</spa>
                            </div>
                          <div class="text-xs items-center">
                            <button type="button" class="px-2 sub-button font-bold text-sm">-</button>
                            <input type="text" name="order_quantity" class="w-8 h-6 px-1 text-xs text-center quantity-input" value="1" >
                            <button type="button" class="px-2 add-button font-bold text-sm">+</button>
                            <!-- HIDDEN INPUT -->
                            <input hidden name="product_id" value="{{$product->id}}">
                            <input hidden name="user_id" value="{{Auth::user()->id}}">
                            <input hidden name="price" value="{{$product->price}}">
                            <!-- END OF HIDDEN INPUT -->
                        </div>
                        </div>
                      </div>
                      <button type="submit" class="w-full flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to cart
                      </button>
                    </div>
                  </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    // Get all the quantity inputs and buttons
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const addButton = document.querySelectorAll('.add-button');
    const subButton = document.querySelectorAll('.sub-button');
    const stockElements = document.querySelectorAll('.stocks-left');
   
    // Add event listeners to all the buttons
    addButton.forEach((button, index) => {
        button.addEventListener('click', () => {
            // Increment the value in the corresponding input field
            const stockText = stockElements[index].innerText.trim();
            const quantity = parseInt(stockText.split(' ')[0]);
            if (parseInt(quantityInputs[index].value) < quantity)
            quantityInputs[index].value = parseInt(quantityInputs[index].value) + 1;
            //console.log({{$product->product_name}});
        });
    });
    subButton.forEach((button, index) => {
        button.addEventListener('click', () => {
            // Decrement the value in the corresponding input field, minimum value is 0
            quantityInputs[index].value = Math.max(parseInt(quantityInputs[index].value) - 1, 0);
        });
    });
</script>
