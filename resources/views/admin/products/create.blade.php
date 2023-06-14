<div id="create-new" class="modal">
  <div class="modal-content w-64 h-auto mx-auto">
    <div class="flex justify-center items-center h-full">
      <div class="relative rounded-lg border border-gray-100 bg-white shadow-md p-4">
        <div class="bg-gray-200 max-w text-center px-2 py-1 rounded-md font-semibold text-gray-800">Add New Product</div>
        <!--form-->
        <form action="{{route('admin.products.store')}}" method="POST">
          @csrf
        <div class="mt-1">
          <label class="text-xs tracking-tight font-semibold text-slate-900">Product Name</label>
          <input type="text" name="product_name" class="text-xs tracking-tight text-slate-900 py-2 mb-2 rounded border-b-2 border-gray-600 focus:border-b-0" required placeholder="Enter product name"/>
          <div class="max-w-md pl-0  h-auto p-2 overflow-hidden text-gray-800 rounded border-b-2 border-gray-600">
            <label class="text-xs tracking-tight font-semibold text-slate-900">Description</label>
            <textarea type="text" name="product_description" class="text-sm tracking-tight text-slate-900 w-full resize-none" required placeholder="Enter product description"></textarea>
          </div>
          <div class="mt-2 mb-5 flex items-center justify-between">
            <p>
              <span class="text-3xl font-bold text-slate-900">
              <label class="text-xs tracking-tight font-semibold text-slate-900">Price</label>
              <input type="number" step="0.01" name="price" class="tracking-tight text-xs text-slate-900 w-full rounded border-b-2 border-gray-600 focus:border-b-0" required placeholder="Input price"/>
              </span>
            </p>
            <div class="flex items-center">
              <span class="ml-3 rounded px-2.5 py-0.5 text-xs font-semibold">Stock</span>
              <input type="number" name="quantity" class="text-xs tracking-tight font-bold text-slate-900 w-full rounded px-2.5 py-0.5 border-b-2 border-gray-600 focus:border-b-0" required placeholder="No."/>
            </div>
          </div>
          <button type="submit" class="mx-auto flex items-center justify-center rounded-md bg-slate-900 w-full px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
            Add Product
          </button>
        </div>
        <!-- end of form -->
      </div>
    </div>
  </div>
</div>
<!--


                    <button type="submit" class="font-medium text-green-600  hover:underline">
            {{ __('Create') }}
          </button>
          <a href="" rel="modal:close" class="ml-2 font-medium text-red-600  hover:underline">
            {{ __('Cancel') }}
          </a>
-->