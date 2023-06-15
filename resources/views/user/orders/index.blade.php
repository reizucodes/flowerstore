<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Shopping Cart') }}
      </h2>
  </x-slot>

  <div class="py-12">

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
     <!--Container-->
     <div class="container w-full mx-auto px-2">
      <!--Card-->
      <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
          <thead>
            <tr>
              <th data-priority="1">Order ID</th>
              <th data-priority="2">Product Name</th>
              <th data-priority="3">Price</th>
              <th data-priority="4">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
            <tr class="text-center">
              <td >{{ $order->id }}</td>
              <td >{{ $order->product_name }}</td>
              <td >${{ $order->price }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="#checkout-{{$order->id}}" rel="modal:open" class="ml-2 font-medium text-teal-600 hover:underline">Checkout</a>
                @include('user.orders.checkout')
                <!-- DELETE -->
                <form class="inline-block" action="{{ route('orders.destroy', $order->id) }}" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="ml-2 font-medium text-red-600 hover:underline cursor-pointer" value="Cancel Order">
                </form>
                <!--END OF DELETE BUTTON-->
              </td>
              @endforeach
            </tr>
          </tbody>
        </table>
      </div>
      <!--/Card-->
    <!--/container-->

    </div>
    
  </div> 
  <!--Datatables -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script>
      $(document).ready(function() {
      var table = $('#example').DataTable({
      responsive: true
      })
        .columns.adjust()
        .responsive.recalc();
     });
  </script>
</x-app-layout>
