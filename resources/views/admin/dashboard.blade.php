<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Shop Now
        </h2>
    </x-slot>

              
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($products as $product)
                  <div class="relative flex flex-col overflow-hidden rounded-lg border border-slate-100 bg-white shadow-md w-64 hover:bg-slate-100 hover:border-slate-200">
                    <div class="mt-4 px-5 pb-5">
                      <h5 class="text-xl tracking-tight font-semibold text-slate-900">{{$product->product_name}}</h5>
                      <div class="max-w-md h-20 bg-slate-400 p-2 overflow-hidden rounded-md text-gray-800">
                        <p class="text-sm">{{$product->product_description}}</p>
                      </div>
                      <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                          <span class="text-3xl font-bold text-slate-900">${{$product->price}}</span>
                        </p>
                        <div class="flex items-center">
                          <span class="ml-3 rounded px-2.5 py-0.5 text-xs font-semibold">Stocks</span>
                          <span class="rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">{{$product->quantity}}</span>
                        </div>
                      </div>
                      <a href="#" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to cart
                      </a>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<!--
<div class="grid grid-cols-4 gap-4">
    @foreach($products as $product)

          <div class="relative m-10 flex w-full flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
            <div class="mt-4 px-5 pb-5">
                <h5 class="text-xl tracking-tight font-semibold text-slate-900">{{$product->product_name}}</h5>
              <div class="max-w-md h-20 bg-slate-400 p-2 overflow-hidden rounded-md text-gray-800">
                <p class="text-sm ">
                  {{$product->product_description}}
                </p>
              </div>
              <div class="mt-2 mb-5 flex items-center justify-between">
                <p>
                  <span class="text-3xl font-bold text-slate-900">${{$product->price}}</span>
                </p>
                <div class="flex items-center">
                  <span class="ml-3 rounded px-2.5 py-0.5 text-xs font-semibold">Stocks left</span>
                  <span class="rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">{{$product->quantity}}</span>
                </div>
              </div>
              <a href="#" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Add to cart</a
              >
            </div>
          </div>
        </div>

    @endforeach
</div>
-->