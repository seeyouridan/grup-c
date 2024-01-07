<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List Barang') }}
        </h2>
    </x-slot>

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <x-primary-button tag="a" href="{{ route('pelanggan.create') }}">Beli barang</x-primary-button>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($barangs as $barang)
                    <div class="group relative border-2 p-2">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="{{ $barang->image_url }}" alt="{{ $barang->nama_barang }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $barang->nama_barang }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Sisa stok: {{ $barang->qty }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">Rp.{{ number_format($barang->harga) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
