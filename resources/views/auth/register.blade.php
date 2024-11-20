<x-guest-layout>
    <style>
        body {
            background-color: lavender; /* Warna background halaman */
            margin: 0; /* Menghapus jarak default pada body */
            padding: 0;
        }
        form {
            background-color: white; /* Warna background form */
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: 0 auto; /* Form tetap di tengah tanpa jarak tambahan */
        }
        h1 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin: 0; /* Hapus margin pada header */
            padding: 20px 0; /* Tambahkan padding untuk ruang */
            color: #333; /* Warna teks header */
        }
    </style>

    <!-- Header -->
    <h1>Form Register</h1>

    <!-- Session Status -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already Register?') }}
            </a>

            <x-primary-button class="ms-4 bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-700">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
