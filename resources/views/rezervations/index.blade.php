<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rezervacije') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_rezervation" class="m-2 p-2 text-x1">Dodaj rezervaciju</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <p class="p-2 text-center" style="background-color: #FFC0CB;">Ovdje možete vidjeti rezervacije!</p>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Datum</th>
                                <th class="px-4 py-2">Klijent</th>
                                <th class="px-4 py-2">Tretman</th>
                                <th class="px-4 py-2">Stilist</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rezervations as $rezervation)
                            <tr>
                                <td class="border px-4 py-2"><strong>{{ $rezervation->date }}</strong></td>
                                <td class="border px-4 py-2"><strong>{{ $rezervation->client }}</strong></td>
                                <td class="border px-4 py-2"><strong>{{ $rezervation->treatment }}</strong></td>
                                <td class="border px-4 py-2"><strong>{{ $rezervation->stylist }}</strong></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
