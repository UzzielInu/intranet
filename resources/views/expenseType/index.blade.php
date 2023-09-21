<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Tipo de Gastos') }}
        </h2>
    </x-slot>
    <div class="container">
        @if(Session::has('success'))
        <div class="bg-green-500">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
    </div>
    <div class="flex flex-row-reverse">
        <button onclick="location.href = '/expenseType/create'" class="py-2 px-3 rounded-lg bg-green-500 text-white"><i class="fa-regular fa-plus"></i> Agregar Tipo</button>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto space-y-6">
            <div class="p-2 sm:p-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:expense-type-table/>
            </div>
        </div>
    </div>
</x-app-layout>