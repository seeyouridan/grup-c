<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('gudang.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <div class="max-w-xl">
                            <x-input-label for="kode_barang" value="Kode Barang" />
                            <x-text-input id="kode_barang" type="text" name="kode_barang" class="mt-1 block w-full" value="{{ old('kode_barang') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('kode_barang')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="nama_barang" value="Nama Barang" />
                            <x-text-input id="nama_barang" type="text" name="nama_barang" class="mt-1 block w-full" value="{{ old('nama_barang') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_barang')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="qty" value="Jumlah Barang" />
                            <x-text-input id="qty" type="text" name="qty" class="mt-1 block w-full" value="{{ old('qty') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('qty')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="harga" value="Harga" />
                            <x-text-input id="harga" type="text" name="harga" class="mt-1 block w-full" value="{{ old('harga') }}" required />
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