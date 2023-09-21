<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Tipo de Gastos - Editar') }}
        </h2>
    </x-slot>
    <div class="py-12 px-6">
        @if(Session::has('success'))
        <div class="bg-green-500">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif

        <!-- Way 1: Display All Error Messages -->
        @if ($errors->any())
        <div class="bg-red-600">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="container mx-auto sm:px-6 lg:px-8 space-y-6 ">
            <form method="POST" action="{{ route('expenseType.update', ['expenseType' => $expenseType]) }}" class="lg:mx-48 sm:mx-0 2xl:my-40 2xl:mx-40">
                @method('PUT')
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Id
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" value="{{$expenseType -> id}}" disabled>
                        <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                    </div>
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Nombre
                        </label>
                        <input name="name" id="inputName" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" value="{{$expenseType -> name}}">
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            Mnemonico
                        </label>
                        <input name="mnemonic" id="inputMnemonic" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" value="{{$expenseType -> mnemonic}}">
                    </div>
                </div>
                <div class="mb-3">
                    <button class="px-4 py-2 font-semibold text-sm bg-sky-500 text-white rounded-none shadow-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>