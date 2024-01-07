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

                    @hasrole('gudang')
                    <x-primary-button tag="a" href="{{ route('gudang.create') }}">Tambah data barang</x-primary-button>
                    @endhasrole

                    <x-table>
                        <x-slot name="header">
                            <tr class="text-center">
                                <th class="py-2">No</th>
                                <th class="py-2">Kode Barang</th>
                                <th class="py-2">Nama Barang</th>
                                <th class="py-2">Stok</th>
                                <th class="py-2">Harga</th>
                                <th class="py-2">Produk</th>

                                @hasrole('gudang')
                                <th class="py-2">Aksi</th>
                                @endhasrole
                            </tr>
                        </x-slot>

                        @php $num = 1; @endphp
                        @foreach ($barangs as $barang)
                        <tr class="text-center">
                            <td class="py-2">{{ $num++ }} </td>
                            <td class="py-2">{{ $barang->kode_barang }}</td>
                            <td class="py-2">{{ $barang->nama_barang }}</td>
                            <td class="py-2">{{ $barang->qty }}</td>
                            <td class="py-2">Rp {{ $barang->harga }}</td>
                            <td class="py-2">{{ $barang->produk_id }} - {{ $barang->product->jenis_produk }}</td>

                            @hasrole('gudang')
                            <td class="py-2">
                                <x-primary-button tag="a" href="{{ route('gudang.edit', $barang->id) }}">Edit</x-primary-button>
                                <x-danger-button x-data="" @click.prevent="$dispatch('open-modal', 'confirm-book-deletion'); $dispatch('set-action', '{{ route('gudang.destroy', $barang->id) }}')">
                                    {{ __('Hapus') }}
                                </x-danger-button>
                            </td>
                            @endhasrole
                        </tr>
                        @endforeach
                    </x-table>

                    <x-modal name="confirm-book-deletion" focusable maxWidth="xl">
                        <form method="post" x-bind:action="action" class="p-6">
                            @csrf
                            @method('delete')
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Apakah anda yakin akan menghapus data Barang?') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Setelah proses dilaksanakan, data akan dihapus secara permanen.') }}
                            </p>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="ml-3">
                                    {{ __('Hapus !') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
