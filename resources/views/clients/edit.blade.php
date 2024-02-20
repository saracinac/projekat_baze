<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Klijenti-Uredi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($clients as $client)
                    <form method="POST" action="{{ route('update_client') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$client->id}}"/>
                        <div>
                            <x-label for="name" value="{{ __('Ime') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$client->name}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                        <x-label for="surname" value="{{ __('Prezime') }}" />
                            <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" value="{{$client->surname}}" required autofocus />
                        </div>
                        <div class="mt-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{$client->email}}" required autofocus />
                        </div>
                        <div class="mt-4">
                        <x-label for="phone" value="{{ __('Mobitel') }}" />
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{$client->phone}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                        <x-label for="adress" value="{{ __('Adresa') }}" />
                            <x-input id="adress" class="block mt-1 w-full" type="text" name="adress" value="{{$client->adress}}" required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>