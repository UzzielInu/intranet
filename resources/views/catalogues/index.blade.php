<x-app-layout>
    
    <div x-init="page = 'catalogue'" class="container">
        @if(Session::has('success'))
        <div class="bg-green-500">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
    </div>
    <div class="py-12">
        <div class="max-w-sm rounded overflow-hidden shadow-lg border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Folios</div>
                <div class="grid grid-rows-4 grid-flow-col gap-4 text-center">
                    <a href="{{ route('administrativeUnit.index') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 border border-blue-500 hover:border-transparent rounded">
                        Unidades Administrativas
                    </a>
                    <a href="{{ route('submenu.index') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 border border-blue-500 hover:border-transparent rounded">
                        Submenús
                    </a>
                    <a href="{{ route('expenseType.index') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 border border-blue-500 hover:border-transparent rounded">
                        Tipo de Gastos
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="grid grid-cols-3 gap-4 text-center">
            <a href="{{ route('administrativeUnit.index') }}"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 border border-blue-500 hover:border-transparent rounded">
                Unidades Administrativas
            </a>
            <a href="{{ route('submenu.index') }}"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 border border-blue-500 hover:border-transparent rounded">
                Submenús
            </a>
            <a href="{{ route('expenseType.index') }}"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 border border-blue-500 hover:border-transparent rounded">
                Tipo de Gastos
            </a>
        </div> -->
    </div>
</x-app-layout>