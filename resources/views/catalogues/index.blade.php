<x-app-layout>
    <div class="py-12">
        <div class="grid grid-cols-3 gap-4 text-center">
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
        </div>
    </div>
</x-app-layout>