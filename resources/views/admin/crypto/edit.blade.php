<x-admin-layout> 

    <div class="py-12">
        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif
        <div class="w-full simple-form max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ url('admin/home/crypto-update/'.$crypto->id) }}" method="post">
                @csrf
                @method('PUT')
                <p>
                    <label for="">Crypto Market : </label>
                    <input  class="w-full my-4" type="text" name="product_code" :value="$crypto->crypto_market" id="" />
                </p>
                <p>
                    <label for="">Asset Name : </label>
                    <input class="w-full my-4" type="text" name="product_name" :value="$crypto->asset_name" id="" />
                </p>
                <p>
                    <label for="">Crypto  Price : </label>
                    <input class="w-full my-4" name="product_description" :value="$crypto->crypto_price" id="" rows="5" />
                </p>
                <p>
                    <label for="">Produk Status : </label>
                    <input class="w-full my-4" type="number" name="product_price" :value="$crypto->product_status" id="" />
                </p>
                <button type="submit" class="w-full my-5 btn bg-blue-500 hover:bg-blue-600 rounded-full text-white px-5 py-2">Edit Product</button>
            </form>
        </div>
    </div>

</x-admin-layout>