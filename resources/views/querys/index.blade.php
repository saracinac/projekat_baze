<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upiti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> <!-- Add container with max width and padding -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 mb-4 px-4"> <!-- Add padding to the rounded div -->
                <div class="flex flex-col gap-4 p-4"> <!-- Flex column with gap between items -->
                    <div class="bg-gray-200 p-4 rounded-lg"> <!-- First "row" -->
                        <h1>Upit 1</h1>
                        <hr/>
                        <p>Tretman 'Balayage' urađen je {{ $balayage_count }} puta.</p>
                    </div>
                    <div class="bg-gray-200 p-4 rounded-lg"> <!-- Second "row" -->
                        <h1>Upit 2</h1>
                        <hr/>
                        <p>Stilista pod imenom 'Sara' i prezime 'Cinaci' angažovan je {{ $stylist_count }} puta.</p>
                    </div>
                    <div class="bg-gray-200 p-4 rounded-lg"> <!-- Third "row" -->
                        <h1>Upit 3</h1>
                        <hr/>
                        <p>Rezervacija u kojoj je bio uključen klijent Amra korištena je {{ $checkout_count }} puta.</p>
                    </div>
                    <div class="bg-gray-200 p-4 rounded-lg"> <!-- Third "row" -->
    <h1>Upit 4</h1>
    <hr/>
    <p>Klijenti koji su rezervisali tretman Balayage:</p>
    <ul>
        @foreach ($balayage_clients as $client)
            <li>{{ $client->name }} {{ $client->surname }}</li>
        @endforeach
    </ul>
</div>

<div class="bg-gray-200 p-4 rounded-lg"> <!-- Third "row" -->
    <h1>Upit 5</h1>
    <hr/>
    <p>Reviews na stilistu Elmin Midzic:</p>
    <ul>
        @foreach ($reviews as $review)
            <li>{{ $review->review }}</li>
        @endforeach
    </ul>
</div>


                </div>
            </div>

          
        </div>
    </div>

    
</x-app-layout>