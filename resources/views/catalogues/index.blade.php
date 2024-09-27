<x-app-layout>
    <div class="py-12">
        <div class="grid grid-cols-3 gap-4 text-center">
            <a href="{{ route('company.index') }}"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 border border-blue-500 hover:border-transparent rounded">
                Empresas
            </a>
            <a href="{{ route('area.index') }}"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 border border-blue-500 hover:border-transparent rounded">
                Áreas
            </a>
            <a href="{{ route('machine.index') }}"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-4 border border-blue-500 hover:border-transparent rounded">
                Máquinas
            </a>
        </div>
    </div>
</x-app-layout>