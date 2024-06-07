@extends('components.navbar')

@section('container-navbar')
    <div class="container max-w-4xl mx-auto px-4 py-8">
        <div class=" max-w-7xl mx-auto">
            <div class="flex justify-center flex-col items-center mb-16">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Tentang Kami</h1>
                <img class="h-auto max-w-xl rounded-lg" src="images/tentang-kami.jpg" alt="image description">
            </div>

            <div class="bg-white shadow-md rounded-lg p-8 px-16 py-8 mb-8">
                <p class="text-lg text-gray-800 leading-relaxed mb-6">SMA Balikpapan merupakan sekolah yang
                    berfokus
                    pada pengembangan akademik, karakter, dan potensi siswa-siswinya. Dengan kurikulum yang terintegrasi
                    dan
                    fasilitas yang memadai, kami berkomitmen untuk menciptakan lingkungan belajar yang inspiratif dan
                    inklusif.</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-8 px-16 py-8 mb-8">
                <h2 class="text-2xl font-semibold text-secondary mb-4">Visi</h2>
                <p class="text-lg text-gray-800 leading-relaxed mb-6">Menjadi lembaga pendidikan yang unggul dalam
                    pengembangan akademik dan karakter serta menghasilkan individu yang berdaya saing global.</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-8 px-16 py-8 mb-8">
                <h2 class="text-2xl font-semibold text-secondary mb-4">Misi</h2>
                <ul class="list-disc text-lg text-gray-800 leading-relaxed mb-6 pl-6">
                    <li>Mengembangkan potensi akademik siswa melalui kurikulum yang komprehensif.</li>
                    <li>Mendorong pembentukan karakter yang kuat melalui program pembelajaran dan kegiatan
                        ekstrakurikuler.</li>
                    <li>Menyediakan lingkungan belajar yang kondusif dan inovatif.</li>
                    <li>Mengintegrasikan teknologi dalam proses pembelajaran.</li>
                    <li>Menjalin kemitraan dengan stakeholder untuk meningkatkan mutu pendidikan.</li>
                </ul>
            </div>

            <div class="bg-white shadow-md rounded-lg p-8 px-16 py-8 mb-8">
                <h2 class="text-2xl font-semibold text-secondary mb-4">Fasilitas</h2>
                <ul class="list-disc text-lg text-gray-800 leading-relaxed mb-6 pl-6">
                    <li>Laboratorium komputer yang lengkap.</li>
                    <li>Perpustakaan dengan koleksi buku yang beragam.</li>
                    <li>Ruang kelas yang nyaman dan dilengkapi dengan teknologi pendukung pembelajaran.</li>
                    <li>Lapangan olahraga yang luas.</li>
                    <li>Ruang seni dan musik.</li>
                </ul>
            </div>

            <div class="bg-white shadow-md rounded-lg p-8 px-16 py-8 mb-8">
                <p class="text-lg text-gray-800 leading-relaxed">Kami berkomitmen untuk terus meningkatkan kualitas
                    pendidikan dan memberikan pengalaman belajar yang berharga bagi seluruh siswa kami.</p>
            </div>
        </div>
    </div>
@endsection
