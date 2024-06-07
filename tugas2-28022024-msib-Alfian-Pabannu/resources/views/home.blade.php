@extends('components.navbar')

@section('container-navbar')
    <section class="bg-center bg-no-repeat bg-[url('/public/images/home.jpg')] bg-gray-700 bg-blend-multiply bg-cover">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat
                Datang di SMA Balikpapan</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Bergabunglah dengan kami untuk
                mendapatkan pengalaman pendidikan yang luar biasa!</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="/pendaftaran"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Daftar Sekarang
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <div class="bg-secondary py-12">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-primary-900 mb-8">Kenapa Memilih SMA Balikpapan?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-prtext-primary-900 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Pengajar Berpengalaman</h3>
                    <p class="text-gray-600">Guru-guru kami memiliki pengalaman yang luas dalam bidangnya masing-masing
                        untuk memberikan pendidikan terbaik kepada siswa.</p>
                </div>
                <div class="bg-prtext-primary-900 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Fasilitas Terbaik</h3>
                    <p class="text-gray-600">Kami menyediakan fasilitas terbaik, mulai dari laboratorium komputer hingga
                        lapangan olahraga, untuk mendukung perkembangan siswa.</p>
                </div>
                <div class="bg-prtext-primary-900 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Kurikulum Inovatif</h3>
                    <p class="text-gray-600">Kami memiliki kurikulum yang terus diperbarui dan disesuaikan dengan
                        perkembangan zaman untuk memastikan siswa siap menghadapi tantangan masa depan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary py-12">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-primary-900 mb-8">Bergabunglah Sekarang dan Raih Masa Depan Anda!</h2>
            <a href=""
                class="bg-accent hover:bg-secondary text-primary-900 font-bold py-3 px-8 rounded-full inline-block transition duration-300">Daftar
                Sekarang</a>
        </div>
    </div>
@endsection
