<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Rezervacije-Dodavanje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{ route('store_rezervation') }}">
                        @csrf
                        <div>
                            <x-label for="date" value="{{ __('Datum') }}" />
                            <x-input id="date" class="block mt-1 w-full" type="date" name="date" required autofocus />
                        </div>
                        
                        <div class="mt-4">
                            <x-label for="client" value="{{ __('Klijent') }}" />
                            <select id="client" name="client" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 
                            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected="true" disabled="disabled">Odaberi</option>
                                @foreach($clients as $client)
                                <option value="{{$client->id}}">{{$client->name}}</option>
                                @endforeach
                            </select>
                        </div>

<div class="mt-4">
    <x-label for="treatment" value="{{ __('Tretman') }}" />
    <select id="treatment" name="treatment" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        <option selected="true" disabled="disabled">Odaberi</option>
        @foreach($treatments as $treatment)
            <option value="{{ $treatment->id }}">{{ $treatment->name }}</option>
        @endforeach
    </select>
</div>

<div class="mt-4">
    <x-label for="stylist" value="{{ __('Stilista') }}" />
    <select id="stylist" name="stylist" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        <option selected="true" disabled="disabled">Odaberi</option>
        @foreach($stylists as $stylist)
            <option value="{{ $stylist->id }}">{{ $stylist->name }}</option>
        @endforeach
    </select>
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