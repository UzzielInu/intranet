<x-app-layout>
    {{-- El x-init="page = 'formLayout'" nos sirve para indicarle al sidebar dónde estamos situados --}}
    <div x-init="page = 'AdministrativeUnits', show = true" class="container">
        {{-- for retrieve information --}}
        @if (Session::has('success'))
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
            <h2 class="font-bold">Empresas</h2>
        </div>
        <button onclick="location.href = '/company/create'" class="py-2 px-3 rounded-lg bg-green-500 text-white">
            <i class="fa-regular fa-plus"></i> Agregar Empresa</button>
    </div>
    {{-- <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" x-on:click="window.livewire.emitTo('components.player-modal', 'showModal', '{{ $player->id }}')" message="Hello World"> {{ __('Delete Account') }} </x-danger-button> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto space-y-6">
            <div class="p-2 sm:p-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:company-table />
            </div>
        </div>
    </div>
</x-app-layout>
