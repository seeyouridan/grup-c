<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
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
                        @foreach ($branches as $gudang)
                        <tr class="text-justify">
                            <td>{{ $num++ }} </td>
                            <td>{{ $gudang->manajer_id }} - {{ $gudang->manajer->name }}</td>
                            <td>{{ $gudang->nama_cabang }}</td>
                            <td>{{ $gudang->alamat }}</td>
                            <td>{{ $gudang->supervisor_id }} - {{ $gudang->supervisor->name }}</td>
                            <td>{{ $gudang->kasir_id }} - {{ $gudang->kasir->name }}</td>
                            <td>{{ $gudang->warehouse_id }} - {{ $gudang->warehouse->name }}</td>
                        </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>