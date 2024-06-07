@extends('components.sidebar')

@section('container-sidebar')
    <div class="ml-48 mt-8 max-w-4xl">
        <h1 class="mb-4 font-semibold text-lg text-primary-600">Pendaftar</h1>

        <div class="max-w-7xl relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-gray-700 uppercase bg-secondary-100 dark:bg-secondary-700 dark:text-secondary-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            nis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            US
                        </th>
                        <th scope="col" class="px-6 py-3">
                            UN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ekonomi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            keaktifan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            prestasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tgl mendaftar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-secondary-50 dark:hover:bg-secondary-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->nama }}
                            </th>
                            <td class="px-4 py-4">
                                {{ $item->nis }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $item->us }}
                            </td>
                            <td class="px-4 py-4">
                                {{ $item->un }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($item->ekonomi == 1)
                                    <span class="text-green-600">diatas 5 juta</span>
                                @elseif($item->ekonomi == 2)
                                    <span class="text-blue-600">3 - 5 juta</span>
                                @elseif($item->ekonomi == 3)
                                    <span class="text-yellow-600">1 - 5 jt</span>
                                @elseif($item->ekonomi == 4)
                                    <span class="text-orange-600">500 ribu - 5 juta</span>
                                @elseif($item->ekonomi == 5)
                                    <span class="text-red-600">dibawah 500 ribu</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if ($item->keaktifan == 1)
                                    <span>Tidak sama sekali</span>
                                @elseif($item->keaktifan == 2)
                                    <span>1 Kegiatan</span>
                                @elseif($item->keaktifan == 3)
                                    <span>2 Kegiatan</span>
                                @elseif($item->keaktifan == 4)
                                    <span>lebih dari 2 kegiatan</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if ($item->prestasi == 1)
                                    <span>Tidak sama sekali</span>
                                @elseif($item->prestasi == 2)
                                    <span>1 Prestasi</span>
                                @elseif($item->prestasi == 3)
                                    <span>2 Prestasi</span>
                                @elseif($item->prestasi == 4)
                                    <span>lebih dari 2 Prestasi</span>
                                @endif
                            </td>
                            <td class="px-4 py-4">
                                {{ $tanggal[$index] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
