<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Checkout-Dodavanje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{ route('store_checkout') }}">
                        @csrf
                        <div>
                            <x-label for="review" value="{{ __('Recenzija') }}" />
                            <x-input id="review" class="block mt-1 w-full" type="string" name="review" required autofocus />
                        </div>
                        
                        <div class="mt-4">
                            <x-label for="reservation" value="{{ __('Broj rezervacije') }}" />
                            <select id="reservation" name="reservation" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 
                            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected="true" disabled="disabled">Odaberi</option>
                                @foreach($availableRezervations as $reservation)
                                <option value="{{ $reservation->id }}">{{ $reservation->id }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="product" value="{{ __('Proizvod') }}" />
                            <select id="product" name="product" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 
                            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected="true" disabled="disabled">Odaberi</option>
                                @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
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