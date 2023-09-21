<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Tipo de Gasto - Detalle') }}
        </h2>
    </x-slot>
    <div class="py-12 px-6">
        <div class="container mx-auto sm:px-6 lg:px-8 space-y-6 ">
            <div class="lg:mx-48 sm:mx-0 2xl:my-40 2xl:mx-40">
                <div class="flex flex-wrap -mx-3 mb-6 self-center">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="grid-first-name">
                            Id
                        </label>
                        <input class="appearance-none block w-full bg-gray-800 text-gray-700 border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="{{ $expenseType->id}}" disabled>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="grid-city">
                            Mnemonico
                        </label>
                        <input class="appearance-none block w-full bg-gray-800 text-gray-700 border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="{{$expenseType->mnemonic}}" disabled>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-800 text-xs font-bold mb-2" for="grid-password">
                            Nombre
                        </label>
                        <input class="appearance-none block w-full bg-gray-800 text-gray-700 border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="{{$expenseType->name}}" disabled>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>