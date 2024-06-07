@extends('components.template')
@section('container')
    <div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
        <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md">
            <div class="flex items-center justify-center">
                <img class="w-24" src="images/logo.png" alt="logo">
            </div>
            <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">Selamat datang!</h1>
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email
                        Address</label>
                    <input type="email" id="email" name="email"
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-tertiary-500 focus:border-tertiary-500"
                        placeholder="anda@email.com" required>
                </div>
                <div class="mb-4">
                    <label for="password"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-tertiary-500 focus:border-tertiary-500"
                        placeholder="Masukkan password" required>
                    <a href="#"
                        class="text-xs text-gray-600 hover:text-tertiary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tertiary-500">Forgot
                        Password?</a>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember"
                            class="h-4 w-4 rounded border-gray-300 text-tertiary-600 focus:ring-tertiary-500 focus:outline-none"
                            checked>
                        <label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Remember
                            me</label>
                    </div>
                    <a href="#"
                        class="text-xs text-tertiary-500 hover:text-tertiary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tertiary-500">Create
                        Account</a>
                </div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-tertiary-600 hover:bg-tertiary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-tertiary-500">Login</button>
            </form>
        </div>
    </div>
@endsection
