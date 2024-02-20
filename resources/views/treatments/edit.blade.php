<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Tretmani-Uredi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($treatments as $treatment)
                    <form method="POST" action="{{ route('update_treatment') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$treatment->id}}"/>
                        <div>
                            <x-label for="name" value="{{ __('Ime') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$treatment->name}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                        <x-label for="description" value="{{ __('Opis') }}" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{$treatment->description}}" required autofocus />
                        </div>
                        <div class="mt-4">
                        <x-label for="price" value="{{ __('Cijena') }}" />
                            <x-input id="price" class="block mt-1 w-full" type="text" name="price" value="{{$treatment->price}}" required autofocus />
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