@extends('components.sidebar')

@section('container-sidebar')
    <div class="ml-48 mt-8 max-w-4xl">
        <h1 class="mb-4 font-semibold text-lg text-primary-600">Ranking</h1>

        <div class="max-w-5xl relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-gray-700 uppercase bg-secondary-100 dark:bg-secondary-700 dark:text-secondary-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Rank
                        </th>
                        <th scope="col" class="px-6 py-3">
                            score
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($data as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-secondary-50 dark:hover:bg-secondary-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item['nama'] }}
                            </th>
                            <td class="px-4 py-4">
                                {{ $i }}
                            </td>
                            <td class="px-4 py-4">
                                {{-- {{ $item['hasil'] }} --}}
                                {{ number_format($item['hasil'], 4) * 10000 }}
                            </td>
                        </tr>
                        @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
