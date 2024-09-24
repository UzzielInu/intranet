<x-app-layout>
    <div class="flex flex-col gap-9">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                <h3 class="font-semibold text-black dark:text-white">
                    Detalle Unidad Administrativa
                </h3>
            </div>
            <div class="p-6.5">
                <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                    <div class="w-full xl:w-1/2">
                        <label class="mb-2.5 block text-black dark:text-white" for="id">
                            Identificador en BD
                        </label>
                        <input
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                            id="id" name="id" type="text" placeholder="{{ $administrativeUnit->id }}"
                            disabled>
                    </div>
                    <div class="w-full xl:w-1/2">
                        <label class="mb-2.5 block text-black dark:text-white" for="local_id">
                            Número
                        </label>
                        <input
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                            id="local_id" name="local_id" type="text"
                            placeholder="{{ $administrativeUnit->local_id }}" disabled>
                    </div>
                </div>
                <div class="mb-4.5">
                    <label class="mb-2.5 block text-black dark:text-white" for="name">
                        Nombre
                    </label>
                    <input
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                        id="name" name="name" type="text" placeholder="{{ $administrativeUnit->name }}"
                        disabled>
                </div>
                <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                    <div class="w-full xl:w-1/2">
                        <label class="mb-2.5 block text-black dark:text-white" for="mnemonic">
                            Mnemónico
                        </label>
                        <input
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                            id="mnemonic" type="text"
                            placeholder="{{ $administrativeUnit->mnemonic != null ? $administrativeUnit->mnemonic : 'Sin Mnemónmico' }}"
                            disabled>
                    </div>
                    <div class="w-full xl:w-1/2">
                        <label class="mb-2.5 block text-black dark:text-white" for="type">
                            Tipo
                        </label>
                        <input
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                            id="type" type="text"
                            placeholder="@switch($administrativeUnit->type) @case('P') Plantel @break @case('DG') Dirección General @break @default Sin tipo @endswitch"
                            disabled>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
