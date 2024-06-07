@extends('components.template')
@section('container')
    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="min-h-screen ">
            <div class="sidebar min-h-screen w-[3.35rem] overflow-hidden border-r hover:w-56 hover:bg-white hover:shadow-lg">
                <div class="flex h-screen flex-col justify-between pt-2 pb-6">
                    <div class="mt-8">
                        <div class="w-max p-2">
                            <div class="relative flex items-center space-x-2  text-primary-900">
                                <img src="images/logo.png" class="w-10" alt="logo sekolah">
                                <span class=" font-bold uppercase">SMA BALIKPAPAN</span>
                            </div>
                        </div>
                        <ul class="mt-6 space-y-2 tracking-wide">
                            <li class="min-w-max">
                                <a href="/dashboard" aria-label="dashboard"
                                    class="{{ $page === 'dashboard' ? 'relative flex items-center space-x-4  bg-gradient-to-r from-tertiary-700 to-tertiary-400 px-4 py-3 text-white' : 'bg group flex items-center space-x-4 rounded-full px-4 py-3 text-primary-900' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6 ">
                                        <path fill-rule="evenodd"
                                            d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="-mr-1 font-medium">Dashboard</span>
                                </a>
                            </li>
                            <li class="min-w-max">
                                <a href="/pendaftar" aria-label="data-pendaftar"
                                    class="{{ $page === 'data-pendaftar' ? 'relative flex items-center space-x-4  bg-gradient-to-r from-tertiary-700 to-tertiary-400 px-4 py-3 text-white' : 'bg group flex items-center space-x-4 rounded-full px-4 py-3 text-primary-900' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15Zm-6.75-10.5a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V10.5Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="-mr-1 font-medium">Data pendaftar</span>
                                </a>
                            </li>
                            <li class="min-w-max">
                                <a href="/decision" aria-label="decision"
                                    class="{{ $page === 'decision' ? 'relative flex items-center space-x-4  bg-gradient-to-r from-tertiary-700 to-tertiary-400 px-4 py-3 text-white' : 'bg group flex items-center space-x-4 rounded-full px-4 py-3 text-primary-900' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15ZM9 12.75a.75.75 0 0 0 0 1.5h6a.75.75 0 0 0 0-1.5H9Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="-mr-1 font-medium">Decision</span>
                                </a>
                            </li>
                            <li class="min-w-max">
                                <a href="/rank" aria-label="rank"
                                    class="{{ $page === 'rank' ? 'relative flex items-center space-x-4  bg-gradient-to-r from-tertiary-700 to-tertiary-400 px-4 py-3 text-white' : 'bg group flex items-center space-x-4 rounded-full px-4 py-3 text-primary-900' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                                    </svg>
                                    <span class="-mr-1 font-medium">Ranking Beasiswa</span>
                                </a>
                            </li>
                        </ul>
                    </div>



                    <div class="w-max -mb-3">
                        <div class="relative">
                            <form action="{{ url('/logout') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button
                                    class="group flex items-center space-x-4 rounded-md px-4 py-3 text-primary-900 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:fill-tertiary-600"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="group-hover:text-gray-700">Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </aside>


    <div class="p-4 sm:ml-12">
        @yield('container-sidebar')
    </div>

    <script>
        function closeSidebar() {
            document.getElementById('default-sidebar').classList.add('-translate-x-full');
        }
    </script>
@endsection
