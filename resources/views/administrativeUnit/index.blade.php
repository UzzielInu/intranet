<x-app-layout>
    {{-- El x-init="page = 'formLayout'" nos sirve para indicarle al sidebar dónde estamos situados --}}
    <div  x-init="page = 'AdministrativeUnits'" class="container">
        @if(Session::has('success'))
        <div class="bg-green-500">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
    </div>
    <div class="flex flex-row justify-between">
        <div class="flex text-center items-center">
            <h2 class="font-bold">Unidades Administrativas</h2>
        </div>
        <button onclick="location.href = '/administrativeUnit/create'" class="py-2 px-3 rounded-lg bg-green-500 text-white"><i class="fa-regular fa-plus"></i> Agregar Unidad</button>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto space-y-6">
            <div class="p-2 sm:p-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:administrative-unit-table/>
            </div>
        </div>
    </div>
</x-app-layout>