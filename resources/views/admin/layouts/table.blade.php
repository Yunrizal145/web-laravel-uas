<div class="py-2">
    @if (session('success'))
    <div class="alert p-5 bg-white rounded text-green">
        {{ session('success') }}
    </div>
    @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="actions flex justify-end mb-5">
            <a href="{{  url('admin/home/crypto-create')  }}" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 rounded text-white">Tambah Product</a>
        </div>
        <div class="mt-5 bg-white p-6 overflow-hidden shadow-sm sm:rounded-lg">
            <table class="w-full text-base  border-slate-500">
                <thead class="text-sm uppercase">
                    <tr>
                        <th class="px-5 py-3 border">
                            ID
                        </th>
                        <th class="px-5 py-3 border">
                            Crypto Market
                        </th>
                        <th class="px-5 py-3 border">
                            Asset Name  
                        </th>
                        <th class="px-5 py-3 border">
                            Crypto Price
                        </th>
                        <th class="px-5 py-3 border">
                            Product Status
                        </th>
                        <th class="px-5 py-3 border">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                
                    {{-- @forelse ($cryptos as $crypto) --}}
                    <tr>
                        <td class="border pl-4">  id  </td>
                        <td class="border pl-4">  crypto_market  </td>
                        <td class="border pl-4">  asset_name  </td>
                        <td class="border pl-4">  crypto_price  </td>
                        <td class="border pl-4">  product_status  </td>
                        <td class="border p-4">
                            <a  class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"> Edit </a>
                            <form  method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-red-500 mt-4 text-white rounded-lg hover:bg-red-600">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    {{-- @empty
                    <tr>
                        <td>No Record Data</td>
                    </tr>
                    @endforelse --}}
                    
                    
                </tbody>
            </table> 
        </div>
    </div>
</div>