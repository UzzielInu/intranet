<x-app-layout>
    <div class="flex flex-col gap-9">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark flex justify-center">
                <h3 class="font-semibold text-black dark:text-white text-3xl">
                    Empresa : {{ $company->name }}
                </h3>
            </div>
            <div class="p-6.5">
                {{-- <div class="mb-4.5">
                    <label class="mb-2.5 block text-black dark:text-white" for="name">
                        Nombre
                    </label>
                    <input
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                        id="name" name="name" type="text" placeholder="{{ $company->name }}"
                        disabled>
                </div> --}}
                <div class="flex flex-row justify-end">
                    {{-- <div class="flex text-center items-center">
                        <h2 class="font-bold text-4xl ml-4">{{ $company->name }}</h2>
                    </div> --}}
                    <button onclick="location.href = '/area/create'" class="py-2 px-3 rounded-lg bg-green-500 text-white">
                        <i class="fa-regular fa-plus"></i> 
                        Agregar Área
                    </button>
                </div>
                <div class="mb-4.5">
                    <div class="flex flex-row w-full xl:flex-row justify-center">
                        <h1 class="text-3xl">Areas</h1>
                    </div>
                    <livewire:area-table/>
                </div>
            </div>
        </div>
</x-app-layout>
