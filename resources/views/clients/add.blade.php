<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Klijenti-Dodavanje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{ route('store_client') }}">
                        @csrf
                        <div>
                            <x-label for="name" value="{{ __('Ime') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="surname" value="{{ __('Prezime') }}" />
                            <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="phone" value="{{ __('Telefon') }}" />
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="adress" value="{{ __('Adresa') }}" />
                            <x-input id="adress" class="block mt-1 w-full" type="text" name="adress" required autofocus />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>