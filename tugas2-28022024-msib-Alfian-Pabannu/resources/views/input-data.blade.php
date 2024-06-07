@extends('components.navbar')

@section('container-navbar')
    <div class="max-w-2xl mx-auto">
        <div class="py-4">
            <h1
                class="mb-4 flex justify-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Pendaftaran</h1>

            <form class="" action="{{ url('/add-data-siswa') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="nama" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                        Nama
                    </label>
                    <p class="mb-2 text-xs">masukkan nama panjang anda</p>
                    <input type="text" id="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="nama" required />
                </div>
                <div class="mb-5">
                    <label for="NIS" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                        NIS
                    </label>
                    <p class="mb-2 text-xs">masukkan nomor induk siswa anda</p>
                    <input type="number" id="nama"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="nis" required />
                </div>
                <div class="mb-5">
                    <label for="US" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nilai Ujian Sekolah
                    </label>
                    <p class="mb-2 text-xs">masukkan nilai ujian sekolah anda, gunakan titik sebagai pengganti koma</p>
                    <input type="number" id="US"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="us" required />
                </div>
                <div class="mb-5">
                    <label for="UN" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nilai Ujian Nasional
                    </label>
                    <p class="mb-2 text-xs">masukkan nilai ujian nasional anda, gunakan titik sebagai pengganti koma</p>
                    <input type="number" id="UN"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="un" required />
                </div>
                <div class="mb-5">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Penghasilan Orang Tua
                    </label>
                    <p class="mb-2 text-xs">pilih penghasilan orang tua anda</p>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="ekonomi" required>
                        <option disabled selected>Choose a country</option>
                        <option value="5">dibawah Rp.500.000</option>
                        <option value="4">Rp.500.000 - Rp.1.000.000</option>
                        <option value="3">Rp.1.000.000 - Rp.3.000.000</option>
                        <option value="2">Rp.3.000.000 - Rp.5.000.000</option>
                        <option value="1">diatas Rp.5.000.000</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="keaktifan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Keaktifan Siswa
                    </label>
                    <p class="mb-2 text-xs">Seberapa aktif anda disekolah anda sebelumnya
                        (kegiatan ekstrakulikuler/organisasi)</p>
                    <select id="keaktifan"
                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="keaktifan" required>
                        <option disabled selected>Choose a country</option>
                        <option value="1">tidak sama sekali</option>
                        <option value="2">1 kegiatan</option>
                        <option value="3">2 kegiatan</option>
                        <option value="4">lebih dari 2 kegiatan</option>
                    </select>
                    <p class="mb-2 text-xs">masukkan dan jelaskan kegiatan ekstrakulikuler/organisasi apa yang anda ikuti.
                        jika tidak ada silahkan kosongkan.
                    </p>
                    <textarea id="message" rows="2"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <div class="mb-5">
                    <label for="prestasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Prestasi Siswa
                    </label>
                    <p class="mb-2 text-xs">Seberapa berprestasi anda disekolah anda sebelumnya</p>
                    <select id="prestasi"
                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="prestasi" required>
                        <option disabled selected>Choose a country</option>
                        <option value="1">tidak sama sekali</option>
                        <option value="2">1 prestasi</option>
                        <option value="3">2 prestasi</option>
                        <option value="4">lebih dari 2 prestasi</option>
                    </select>
                    <p class="mb-2 text-xs">masukkan dan jelaskan prestasi apa saja yang anda dapatkan.
                        jika tidak ada silahkan kosongkan.
                    </p>
                    <textarea id="message" rows="2"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
                <div class="flex items-start mb-5 mt-8">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Data yang saya berikan sudah benar dan dapat dipertanggung jawabkan
                    </label>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Kirim Data</button>
            </form>

        </div>
    </div>
@endsection
