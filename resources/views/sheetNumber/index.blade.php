<x-app-layout>
    <div x-init="page = 'SheetNumber'" class="container">
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
        <button onclick="location.href = '/sheetNumber/create'" class="py-2 px-3 rounded-lg bg-green-500 text-white"><i class="fa-regular fa-plus"></i> Nuevo Folio</button>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto space-y-6">
            <div class="p-2 sm:p-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:sheet-number-table/>
            </div>
        </div>
    </div>
</x-app-layout>