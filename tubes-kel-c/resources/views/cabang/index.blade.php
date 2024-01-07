<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cabang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-table>
                        <x-slot name="header">
                            <tr class="text-justify">
                                <th>No</th>
                                <th>Manajer</th>
                                <th>Nama Cabang</th>
                                <th>Alamat</th>
                                <th>Supervisor</th>
                                <th>Kasir</th>
                                <th>Pegawai Gudang</th>
                            </tr>
                        </x-slot>

                        @php $num = 1; @endphp
                        @foreach ($branches as $cabang)
                        <tr class="text-justify">
                            <td>{{ $num++ }} </td>
                            <td>{{ $cabang->manajer_id }} - {{ $cabang->manajer->name }}</td>
                            <td>{{ $cabang->nama_cabang }}</td>
                            <td>{{ $cabang->alamat }}</td>
                            <td>{{ $cabang->supervisor_id }} - {{ $cabang->supervisor->name }}</td>
                            <td>{{ $cabang->kasir_id }} - {{ $cabang->kasir->name }}</td>
                            <td>{{ $cabang->warehouse_id }} - {{ $cabang->warehouse->name }}</td>
                        </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>