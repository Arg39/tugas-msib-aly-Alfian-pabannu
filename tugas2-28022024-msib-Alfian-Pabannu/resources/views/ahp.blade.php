@extends('components.sidebar')

@section('container-sidebar')
    <div class="ml-48 mt-8 max-w-4xl text-primary-900">
        <!-- Pembobotan Nilai Section -->
        <div class="mb-4">
            <h1 class="mb-4 font-semibold text-lg text-primary-600">Pembobotan Nilai</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-secondary-100 dark:bg-secondary-700 dark:text-secondary-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Kriteria</th>
                            <th scope="col" class="px-6 py-3">Nilai/Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kriteria as $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-secondary-50 dark:hover:bg-secondary-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <p>{{ $item->kriteria }}</p>
                                </th>
                                <td class="px-6 py-4">
                                    <p>{{ $item->nilai }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Perbandingan Section -->
        <div class="mb-4">
            <h1 class="mb-4 font-semibold text-lg text-primary-600">Perbandingan</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-secondary-100 dark:bg-secondary-700 dark:text-secondary-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Kriteria</th>
                            @foreach ($kriteria as $item)
                                <th scope="col" class="px-6 py-3">{{ $item->kriteria }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perbandingan as $index => $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-secondary-50 dark:hover:bg-secondary-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    @if (isset($kriteria[$index]))
                                        <p>{{ $kriteria[$index]->kriteria }}</p>
                                    @else
                                        <p>Total</p>
                                    @endif
                                </th>
                                @foreach ($item['data'] as $value)
                                    <td class="px-6 py-4">{{ $value }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Perbandingan Normalisasi Section -->
        <div class="mb-4">
            <h1 class="mb-4 font-semibold text-lg text-primary-600">Perbandingan Normalisasi</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-secondary-100 dark:bg-secondary-700 dark:text-secondary-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Kriteria</th>
                            @foreach ($kriteria as $item)
                                <th scope="col" class="px-6 py-3">{{ $item->kriteria }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perbandingan_normalisasi as $index => $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-secondary-50 dark:hover:bg-secondary-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    @if (isset($kriteria[$index]))
                                        <p>{{ $kriteria[$index]->kriteria }}</p>
                                    @else
                                        <p>Total</p>
                                    @endif
                                </th>
                                @foreach ($item['data'] as $value)
                                    <td class="px-6 py-4">{{ $value }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bobot Kriteria Section -->
        <div class="mb-4">
            <h1 class="mb-4 font-semibold text-lg text-primary-600">Bobot Kriteria</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-secondary-100 dark:bg-secondary-700 dark:text-secondary-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Kriteria</th>
                            <th scope="col" class="px-6 py-3">Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bobot_kriteria as $index => $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-secondary-50 dark:hover:bg-secondary-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    @if (isset($kriteria[$index]))
                                        <p>{{ $kriteria[$index]->kriteria }}</p>
                                    @else
                                        <p>Total</p>
                                    @endif
                                </th>
                                <td class="px-6 py-4">{{ $bobot_kriteria[$index]['data'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Konsistensi Matrix Section -->
        <div class="mb-4">
            <h1 class="mb-4 font-semibold text-lg text-primary-600">Konsistensi Matrix</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-secondary-100 dark:bg-secondary-700 dark:text-secondary-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Kriteria</th>
                            <th scope="col" class="px-6 py-3">λa<span class="lowercase">x</span></th>
                            <th scope="col" class="px-6 py-3">λa<span class="lowercase">x/x</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($konsistensi_matrix as $index => $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-secondary-50 dark:hover:bg-secondary-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    @if (isset($kriteria[$index]))
                                        <p>{{ $kriteria[$index]->kriteria }}</p>
                                    @else
                                        <p>Total</p>
                                    @endif
                                </th>
                                <td class="px-6 py-4">{{ $konsistensi_matrix[0][$index] }}</td>
                                <td class="px-6 py-4">{{ $konsistensi_matrix[1][$index] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-4">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-secondary-100 dark:bg-secondary-700 dark:text-secondary-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Kriteria</th>
                            <th scope="col" class="px-6 py-3">Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-secondary-50 dark:hover:bg-secondary-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">λ max</th>
                            <td class="px-6 py-4">{{ $konsistensi_matrix[0][0] }}</td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-secondary-50 dark:hover:bg-secondary-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">CI</th>
                            <td class="px-6 py-4">{{ $konsistensi_matrix[0][1] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
