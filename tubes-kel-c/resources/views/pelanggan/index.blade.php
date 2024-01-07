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
                <div class="group relative border-2 p-2">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/8/11/dd96fe77-9ed2-4865-a4a5-af431e41bc68.jpg" alt="Mouse Asus Tuf" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    ASUS TUF Gaming M3 Gen II Wired Gaming Mouse
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Sisa stok : 20</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">Rp.369000</p>
                    </div>
                </div>

                <div class="group relative border-2 p-2">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2022/8/24/cd12311a-85d6-47ae-bc4f-8dc0c0bd5072.jpg" alt="Mouse Asus Rog" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    ASUS ROG Chakram RGB Wireless Gaming Mouse with Qi Charging
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Sisa stok : 20</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">Rp.2499000</p>
                    </div>
                </div>

                <div class="group relative border-2 p-2">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/12/23/7eb17e37-2b7f-40e3-af57-46056e322303.png" alt="Mouse Razer Deathadder" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Razer DeathAdder V3 Pro - Red - Faker Limited Edition - Gaming Mouse
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Sisa stok : 20</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">Rp.2999000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>