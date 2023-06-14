<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Products') }}
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
              <th data-priority="1">Product Name</th>
              <th data-priority="2">Quantity</th>
              <th data-priority="3">Price</th>
              <th data-priority="4">Status</th>
              <th data-priority="5">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr class="text-center">
              <td >{{ $product->product_name }}</td>
              <td >{{ $product->quantity }}</td>
              <td >{{ $product->price }}</td>
              @php
                if($product->status == 1)
                $status = "active";
                else
                $status = "inactive";
              @endphp
              @if($product->status == 1)
             
              <td class="text-xs">
                <form class="inline-block" action="{{ route('admin.products.update', $product->id) }}" method="POST">
                  <input type="hidden" name="_method" value="PATCH">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="update" value="statusChange">
                  <input type="hidden" name="status" value=0>
                  <input type="submit" class="bg-green-400 px-3 py-1 rounded-md font-bold text-gray-900 hover:cursor-pointer " value="{{ $status }}">
                </form>
              </td>
              @else
              <td class="text-xs">
                <form class="inline-block" action="{{ route('admin.products.update', $product->id) }}" method="POST">
                  <input type="hidden" name="_method" value="PATCH">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="update" value="statusChange">
                  <input type="hidden" name="status" value=1>
                  <input type="submit" class="bg-yellow-400 px-2 py-1 rounded-md font-bold text-gray-900 hover:cursor-pointer " value="{{ $status }}">
                </form>
              </td>
              @endif
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="#view-{{$product->id}}" rel="modal:open" class="ml-2 font-medium text-teal-600 hover:underline">View</a>
                @include('admin.products.show')
                <a href="#edit-{{$product->id}}" rel="modal:open" class="ml-2 font-medium text-blue-600 hover:underline">Edit</a>
                @include('admin.products.edit')
                <!-- DELETE -->
                <form class="inline-block" action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="ml-2 font-medium text-red-600 hover:underline cursor-pointer" value="Delete">
                </form>
                <!--END OF DELETE BUTTON-->
              </td>
              @endforeach
            </tr>
          </tbody>
        </table>
      </div>
      <!--/Card-->
      <div class="mt-4 mb-4 float-right text-sm ">
        <a href="#create-new" rel="modal:open" class="inline-flex items-center px-3 py-2 border border-transparent rounded-md font-semibold text-xs text-gray-600 uppercase tracking-widest shadow-md bg-green-300 hover:bg-green-400 hover:text-gray-200 disabled:opacity-25 transition ease-in-out duration-150">New Product
        </a>
        @include('admin.products.create')
      </div>
    </div>
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
<!-- 
  <a href="#delete-{{$product->id}}" rel="modal:open" class="ml-2 font-medium text-red-600  hover:underline">Delete</a>
  @include('admin.products.delete')
-->