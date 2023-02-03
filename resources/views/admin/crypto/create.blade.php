<x-app-layout> 

    <div class="py-12">
        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif
        <div class="w-full simple-form max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form action="{{ url('admin/home/crypto-create') }}" method="post">
                @csrf
                <p>
                    <label for="">Crypto Market : </label>
                    <input  class="w-full my-4" type="text" name="product_code" id="" />
                </p>
                <p>
                    <label for="">Asset Name : </label>
                    <input class="w-full my-4" type="text" name="product_name" id="" />
                </p>
                <p>
                    <label for="">Crypto Price : </label>
                    <input class="w-full my-4" type="text" name="product_description" id=""/>
                </p>
                <p>
                    <label for="">Produk Status : </label>
                    <input class="w-full my-4" type="text" name="product_price" id="" />
                </p>
                <button type="submit" class="w-full my-5 btn bg-blue-500 hover:bg-blue-600 rounded-full text-white px-5 py-2">Save Product</button>
            </form>
        </div>
    </div>

</x-app-layout>