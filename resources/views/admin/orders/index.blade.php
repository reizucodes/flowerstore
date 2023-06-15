<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Orders') }}
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
              <th data-priority="2">User</th>
              <th data-priority="3">Product Name</th>
              <th data-priority="4">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
            <tr class="text-center">
              <td >{{ $order->id }}</td>
              <td >{{ $order->first_name.' '.$order->last_name }}</td>
              <td >${{ $order->product_name }}</td>
              <td >${{ $order->total }}</td>
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
