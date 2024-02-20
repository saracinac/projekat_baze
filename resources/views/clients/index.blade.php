<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klijenti') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <a href="\add_client" class="m-2 p-2 text-x1">Dodaj klijenta</a>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-2">
        <p class="p-2 text-center" style="background-color: #FFC0CB;">Ovdje možete vidjeti popis naših klijenata i postati jedan od njih!</p>
            @foreach ($clients as $client)
            <p class="p-2 text-center"><strong>{{ $client->name }}</strong> - <strong>{{ $client->surname}}</strong> - {{ $client->email}} - {{ $client->phone}} - <em>{{ $client->adress}}</em></p>
            <div class="flex justify-center">
                            <form method="POST" action="{{ route('delete_client') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$client->id}}">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Obrisi') }}
                                </button>
                            </form>
                            <form method="POST" action="{{ route('edit_client') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$client->id}}">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Uredi') }}
                                </button>
                            </form>
                        </div>
            @endforeach
            
            </div>
        </div>
    </div>
</div>
</x-app-layout>