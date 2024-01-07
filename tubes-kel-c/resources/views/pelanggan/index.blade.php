<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-table>
                        <x-slot name="header">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Harga</th>
                            </tr>
                        </x-slot>

                        @php $num = 1; @endphp
                        @foreach ($barangs as $barang)
                        <tr class="text-center">
                            <td>{{ $num++ }} </td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->qty }}</td>
                            <td>{{ $barang->harga }}</td>
                        </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>