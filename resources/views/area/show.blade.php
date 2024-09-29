<x-app-layout>
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
            Swal.fire({
                    title: '¡Éxito!',
                    text: '{{ Session('success') }}',
                    icon: 'success',
                    confirmButtonColor: '#00bb00',
                    confirmButtonText: 'Simón Prro',
                });
            })
        </script>
    @endif
    <div class="flex flex-col gap-9">
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark flex justify-between">
                <h3 class="font-semibold text-black dark:text-white text-3xl">
                    Empresa: {{$area->company->name}}
                </h3>
                <h3 class="font-semibold text-black dark:text-white text-3xl">
                    Área : {{ $area->name }}
                </h3>
            </div>
            <div class="p-6.5">
                <div class="flex flex-row justify-end">
                    <button onclick="location.href = '/machine/create/{{$area->id}}'" class="py-2 px-3 rounded-lg bg-green-500 text-white">
                        <i class="fa-regular fa-plus"></i> 
                        Agregar Máquina
                    </button>
                </div>
                <div class="mb-4.5">
                    <div class="flex flex-row w-full xl:flex-row justify-center">
                        <h1 class="text-3xl">Máquinas</h1>
                    </div>
                    <livewire:machine-table :area="$area->id"/>
                </div>
            </div>
        </div>
</x-app-layout>
