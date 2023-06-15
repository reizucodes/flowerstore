<div id="checkout-{{$order->id}}" class="modal">
  <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50  space-y-6">
    <h3 class="text-xl  font-semibold leading-5 text-gray-800 text-center">Order Summary</h3>
    <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
      <div class="flex justify-between w-full">
        <p class="text-base leading-4 font-semibold text-gray-600">Price</p>
        <p class="text-base leading-4 font-semibold text-gray-600">${{$order->price}}</p>
      </div>
      <div class="flex justify-between w-full">
        <p class="text-base leading-4 font-semibold text-gray-600">Quantity</p>
        <p class="text-base leading-4 font-semibold text-gray-600">{{$order->order_quantity}}</p>
      </div>
      <div class="flex justify-between w-full">
        <p class="text-base leading-4 font-semibold text-gray-600">Subtotal</p>
        <p class="text-base leading-4 font-semibold text-gray-600">{{$order->total}}</p>
      </div>
      <div class="flex justify-between items-center w-full">
        <p class="text-base  leading-4 font-semibold text-gray-600">Shipping Fee</p>
        <p class="text-base leading-4 font-semibold text-green-600">Free</p>
      </div>
    </div>
    <div class="flex justify-between items-center w-full font-bold ">
      <p class="text-base font-semibold leading-4 text-gray-900">Total</p>
      <p class="text-base font-semibold leading-4 text-gray-900">${{$order->total}}</p>
    </div>
    <a href="" rel="modal:close" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
      </svg>
      Place Order
    </a>
  </div>
</div>