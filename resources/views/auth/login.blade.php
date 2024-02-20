<x-guest-layout>

    <x-authentication-card >
    <img src="https://st2.depositphotos.com/7725722/12036/v/950/depositphotos_120366882-stock-illustration-glamorous-logo-for-a-beauty.jpg" alt="Beauty Logo" class="mx-auto mt-8 mb-2" style="max-width: 300px;">
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Lozinka') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Zapamti me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Zaboravili ste lozinku?') }}
                    </a>
                @endif

                <a class="underline text-sm text-gray-600 hover:text-gray-900 ml-2" href="{{ route('register') }}">
                    {{ __('Registracija') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Prijavi se') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
