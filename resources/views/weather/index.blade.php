<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trenutno vrijeme u gradu Bihaću') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <table class="table-auto w-full">
            <tbody>
                <tr>
                    <td class="text-xl font-semibold bg-gray-200">Temperatura:</td>
                    <td class="text-4xl font-bold text-blue-500">{{ round($temperature['main']['temp']) }}°C</td>
                </tr>
                <tr>
                    <td class="text-xl font-semibold bg-gray-200">Vjetar:</td>
                    <td>{{ $temperature['wind']['speed'] }} m/s, {{ $temperature['wind']['deg'] }}°</td>
                </tr>
                <tr>
                    <td class="text-xl font-semibold bg-gray-200">Tlak zraka:</td>
                    <td>{{ $temperature['main']['pressure'] }} hPa</td>
                </tr>
                <tr>
                    <td class="text-xl font-semibold bg-gray-200">Vlažnost zraka:</td>
                    <td>{{ $temperature['main']['humidity'] }}%</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


</x-app-layout>
