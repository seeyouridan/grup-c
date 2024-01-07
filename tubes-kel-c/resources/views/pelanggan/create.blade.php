<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transaksi Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('pelanggan.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <div class="max-w-xl">
                            <x-input-label for="nama_barang" value="Nama Barang" />
                            <x-select-input id="nama_barang" name="nama_barang" class="mt-1 block w-full" required>
                                <option value="">Menu Pilihan</option>
                                @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                @endforeach
                            </x-select-input>
                            <x-input-error class="mt-2" :messages="$errors->get('nama_barang')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="qty" value="Jumlah Barang" />
                            <x-select-input id="qty" name="qty" class="mt-1 block w-full" required>
                                <option value="">Menu Pilihan</option>
                                @foreach ($quantities as $quantity)
                                <option value="{{ $quantity }}">{{ $quantity }}</option>
                                @endforeach
                            </x-select-input>
                            <x-input-error class="mt-2" :messages="$errors->get('qty')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="harga" value="Harga" />
                            <x-select-input id="harga" name="harga" class="mt-1 block w-full" required>
                                <option value="">Menu Pilihan</option>
                                @foreach ($prices as $price)
                                <option value="{{ $price }}">{{ $price }}</option>
                                @endforeach
                            </x-select-input>
                            <x-input-error class="mt-2" :messages="$errors->get('harga')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="produk" value="Jenis Produk" />
                            <x-select-input id="produk" name="produk_id" class="mt-1 block w-full" required>
                                <option value="">Menu Pilihan</option>
                                @foreach ($products as $key => $value)
                                @if(old('produk_id') == $key)
                                <option value="{{ $key }}" selected>{{ $value }}</option>
                                @else
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endif
                                @endforeach
                            </x-select-input>
                        </div>

                        <x-secondary-button tag="a" href="{{ route('gudang.index') }}">Batal</x-secondary-button>
                        <x-primary-button name="save" value="true">Simpan</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>