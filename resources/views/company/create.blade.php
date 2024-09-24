<x-app-layout>
    <!-- ====== Form Layout Section Start -->
    <div class="flex flex-col gap-9">
        <!-- Contact Form -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                <h3 class="font-semibold text-black dark:text-white">
                    Crear Unidad Administrativa
                </h3>
                @if (Session::has('success'))
                    <div class="bg-green-500">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
                @if ($errors->any())
                    <div class="bg-red-900 dark:bg-red-400 mb-2 text-white dark:text-graydark">
                        <strong>Error</strong> hay algunos problemas con los campos, favor de validar<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form method="POST" action="{{ route('administrativeUnit.store') }}" autocomplete="off">
                @csrf
                <div class="p-6.5">
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Número <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Identificador local" name="local_id"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>

                        <div class="w-full xl:w-1/2">
                            <label class="mb-2.5 block text-black dark:text-white">
                                Nombre <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Nombre de la unidad" name="name"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                    </div>

                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Mnemónico <span class="text-meta-1">*</span>
                        </label>
                        <input type="text" placeholder="Abreviatura o Mnemónico" name="mnemonic"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                    </div>

                    <div class="mb-4.5">
                        <label class="mb-2.5 block text-black dark:text-white">
                            Tipo <span class="text-meta-1">*</span>
                        </label>
                        <div class="relative z-20 bg-transparent dark:bg-form-input">
                            <select name="type"
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                <option value="">Tipo de unidad</option>
                                <option value="DG">Dirección General</option>
                                <option value="P">Plantel</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="flex w-2/4 self-center justify-center rounded items-center bg-primary p-3 font-medium text-gray">
                            Guardar <i class="fa-solid fa-floppy-disk text-xl ml-3"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
