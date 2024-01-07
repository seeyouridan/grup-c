<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-table>
                        <x-slot name="header">
                            <tr class="text-justify">
                                <th class="py-2">No</th>
                                <th class="py-2">Kode Barang</th>
                                <th class="py-2">Nama Barang</th>
                                <th class="py-2">Stok</th>
                                <th class="py-2">Harga</th>
                                <th class="py-2">Produk</th>
                            </tr>
                        </x-slot>

                        @php $num = 1; @endphp
                        @foreach ($barangs as $barang)
                        <tr class="text-justify">
                            <td class="py-2">{{ $num++ }} </td>
                            <td class="py-2">{{ $barang->kode_barang }}</td>
                            <td class="py-2">{{ $barang->nama_barang }}</td>
                            <td class="py-2">{{ $barang->qty }}</td>
                            <td class="py-2">{{ $barang->harga }}</td>
                            <td class="py-2">{{ $barang->produk_id }} - {{ $barang->product->jenis_produk }}</td>
                        </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
