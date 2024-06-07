@extends('components.template')
@section('container')
    <nav class="navbar bg-accent-200 dark:bg-gray-900 shadow-md fixed w-full top-0 z-10">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-2 rtl:space-x-reverse">
                <img src="images/logo.png" class="h-16" alt="SMA Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-primary-900">SMA BALIKPAPAN</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-row p-4">
                    <li class="flex-1 uppercase font-bold mr-8">
                        <a href="/"
                            class="block relative py-2 px-3 group text-primary-900 hover:text-secondary-700 dark:hover:text-primary-400"
                            aria-current="page">
                            <span class="block">Home</span>
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-transparent {{ $page === 'home' ? 'bg-tertiary-800 transition-all duration-300 origin-left' : 'group-hover:bg-tertiary-800 transition-all duration-300 origin-left' }}"></span>
                        </a>
                    </li>
                    <li class="flex-1 uppercase font-bold mr-8">
                        <a href="/about"
                            class="block relative py-2 px-3 group text-primary-900 hover:text-secondary-700 dark:hover:text-primary-400"
                            aria-current="page">
                            <span class="block">About</span>
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-transparent {{ $page === 'about' ? 'bg-tertiary-800 transition-all duration-300 origin-left' : 'group-hover:bg-tertiary-800 transition-all duration-300 origin-left' }}"></span>
                        </a>
                    </li>
                    <li class="flex-1 uppercase font-bold mr-8">
                        <a href="/pendaftaran"
                            class="block relative py-2 px-3 group text-primary-900 hover:text-secondary-700 dark:hover:text-primary-400"
                            aria-current="page">
                            <span class="block">Pendaftaran</span>
                            <span
                                class="absolute left-0 bottom-0 w-full h-0.5 bg-transparent {{ $page === 'pendaftaran' ? 'bg-tertiary-800 transition-all duration-300 origin-left' : 'group-hover:bg-tertiary-800 transition-all duration-300 origin-left' }}"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <div>
                    <a href="/login">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 text-primary-900 hover:text-secondary-700 dark:hover:text-primary-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="mt-24">
        @yield('container-navbar')
    </div>
@endsection
