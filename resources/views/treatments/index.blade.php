<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tretmani u ponudi') }}
        </h2>
    </x-slot>



    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <a href="\add_treatment" class="m-2 p-2 text-x1">Dodaj tretman</a>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <p class="p-2 text-center" style="background-color: #FFC0CB;">
                    Ovdje možete vidjeti popis svih kozmetičkih tretmana koje nudi naš salon. Sigurni smo da će svako od vas pronaći nešto za sebe!
                </p>

                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="p-2">Naziv</th>
                            <th class="p-2">Opis</th>
                            <th class="p-2">Cijena</th>
                            <th class="p-2">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($treatments as $treatment)
                            <tr>
                                <td class="p-2"><strong>{{ $treatment->name }}</strong></td>
                                <td class="p-2"><em>{{ $treatment->description }}</em></td>
                                <td class="p-2"><u>{{ $treatment->price }}</u></td>
                                <td class="p-2"><u>{{ $treatment->status }}</u></td>
                                <td class="p-2"><form method="POST" action="{{ route('delete_treatment') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$treatment->id}}">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Obrisi') }}
                                </button>
                            </form></td>
                            <td class="p-2"><form method="POST" action="{{ route('edit_treatment') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$treatment->id}}">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Uredi') }}
                                </button>
                            </form></td>

                            <td class="p-2"><form action="{{ route('file_add') }}" enctype="multipart/form-data" method="POST" class="inline">
                                @csrf
                                <input type="hidden" name="id" value="{{$treatment->id}}">
                                <input type="file" name="fajl" accept=".jpg">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Dodaj kupon - SVE PO 5 KM') }}
                                </button>
                            </form></td>

                            

                                
                            </tr>
                            
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</x-app-layout>