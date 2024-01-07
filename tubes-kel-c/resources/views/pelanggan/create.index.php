<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Beli Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('gudang.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <!-- Fields for det_transactions table -->
                        <div class="max-w-xl">
                            <x-input-label for="barang_id" value="Barang" />
                            <x-select-input id="barang_id" name="barang_id" class="mt-1 block w-full" required>
                                <option value="">Pilih Barang</option>
                                @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                @endforeach
                            </x-select-input>
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="jumlah" value="Jumlah" />
                            <x-text-input id="jumlah" type="text" name="jumlah" class="mt-1 block w-full" value="{{ old('jumlah') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('jumlah')" />
                        </div>

                        <div class="max-w-xl">
                            <x-input-label for="total" value="Total" />
                            <x-text-input id="total" type="text" name="total" class="mt-1 block w-full" value="{{ old('total') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('total')" />
                        </div>
                        <x-secondary-button tag="a" href="{{ route('pelanggan.index') }}">Batal</x-secondary-button>
                        <x-primary-button name="save" value="true">Simpan</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>