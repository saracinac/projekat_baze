<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Checkout') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_checkout" class="m-2 p-2 text-x1">Napravi novi checkout</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <p class="p-2 text-center" style="background-color: #FFC0CB;">Završni koraci! Nadamo se da ste zadovoljni našom uslugom!</p>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Rezervacija</th>
                                <th class="px-4 py-2">Proizvod za kupovinu</th>
                                <th class="px-4 py-2">Vaš utisak</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($checkouts as $checkout)
                            <tr>
                                <td class="border px-4 py-2"><strong>{{ $checkout->reservation }}</strong></td>
                                <td class="border px-4 py-2"><strong>{{ $checkout->product }}</strong></td>
                                <td class="border px-4 py-2"><strong>{{ $checkout->review }}</strong></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
