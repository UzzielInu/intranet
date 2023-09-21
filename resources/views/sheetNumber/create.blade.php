<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Folios') }}
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
        <button onclick="location.href = '/sheetNumber/create'" class="py-2 px-3 rounded-lg bg-green-500 text-white"><i class="fa-regular fa-plus"></i> Agregar Tipo</button>
    </div>
    <div class="container mx-auto sm:px-6 lg:px-8 space-y-6 ">
        <form method="POST" action="{{ route('sheetNumber.store') }}" class="lg:mx-48 sm:mx-0 2xl:my-40 2xl:mx-40">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label class="form-label" for="inputName">Unidad Administrativa :</label>
                <select name="administrativeUnitId" id="inputAdministrativeUnitId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-4/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('type') is-invalid @enderror">
                    <option selected value="" disabled>Unidad Administrativa</option>
                    @foreach ($administrativeUnits as $adminstrativeUnit)
                    <option value="{{ $adminstrativeUnit -> id}}">{{ $adminstrativeUnit -> name }}</option>
                    @endforeach
                </select>
                <!-- Way 2: Display Error Message -->
                @error('type')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputName">Submenú :</label>
                <select name="submenuId" id="inputSubmenuId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-4/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('type') is-invalid @enderror">
                    <option selected value="" disabled>Submenú</option>
                    @foreach ($submenus as $submenu)
                    <option value="{{ $submenu -> id}}">{{ $submenu -> name }}</option>
                    @endforeach
                </select>
                <!-- Way 2: Display Error Message -->
                @error('type')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputName">Tipo de Gasto :</label>
                <select name="expenseTypeId" id="inputExpenseTypeId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-4/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('type') is-invalid @enderror">
                    <option selected value="" disabled>Tipo Gasto</option>
                    @foreach ($expensesType as $expenseType)
                    <option value="{{ $expenseType -> id}}">{{ $expenseType -> name }}</option>
                    @endforeach
                </select>
                <!-- Way 2: Display Error Message -->
                @error('type')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputName">Asunto :</label>
                <!-- <input type="text" name="name" id="inputName" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre"> -->
                <textarea name="subject" id="inputSubject"></textarea>
                <!-- Way 2: Display Error Message -->
                @error('name')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputName">Destinatario :</label>
                <!-- <input type="text" name="name" id="inputName" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre"> -->
                <textarea name="receiver" id="inputReceiver"></textarea>
                <!-- Way 2: Display Error Message -->
                @error('name')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="inputName">Elabora :</label>
                <input type="text" name="name" id="inputName" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" disabled value="{{Auth::user()->name}}">
                <!-- Way 2: Display Error Message -->
                @error('name')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <button class="px-4 py-2 font-semibold text-sm bg-sky-500 text-white rounded-none shadow-sm">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>