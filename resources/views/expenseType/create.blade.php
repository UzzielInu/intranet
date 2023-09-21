<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Agregar Tipo de Gasto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex items-center">
                    <div class="container">

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

                        <form method="POST" action="{{ route('expenseType.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="inputName">Nombre :</label>
                                <input type="text" name="name" id="inputName" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre">

                                <!-- Way 2: Display Error Message -->
                                @error('name')
                                <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputPassword">Mnemónico :</label>
                                <input type="text" name="mnemonic" id="inputMnemonic" class="form-control @error('mnemonic') is-invalid @enderror" placeholder="Mnemonico">

                                <!-- Way 3: Display Error Message -->
                                @if ($errors->has('mnemonic'))
                                <span class="text-red-600">{{ $errors->first('mnemonic') }}</span>
                                @endif
                            </div>
                            <!-- <div class="mb-3">
                                <label class="form-label" for="inputName">Tipo :</label>
                                <input type="text" name="type" id="inputType" class="form-control @error('type') is-invalid @enderror" placeholder="Tipo">

                                Way 2: Display Error Message -->
                            <!-- @error('type') -->
                            <!-- <span class="text-red-600">{{ $message }}</span> -->
                            <!-- @enderror -->
                            <!-- </div> -->
                            <div class="mb-3">
                                <button class="px-4 py-2 font-semibold text-sm bg-sky-500 text-white rounded-none shadow-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>