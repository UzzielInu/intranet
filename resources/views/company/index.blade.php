<x-app-layout>
    {{-- El x-init="page = 'formLayout'" nos sirve para indicarle al sidebar dónde estamos situados --}}
    <div x-init="page = 'Empresas', show = true" class="container">
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
    </div>
    <div class="flex flex-row justify-between">
        <div class="flex text-center items-center">
            <h2 class="font-bold text-4xl ml-4">Empresas</h2>
        </div>
        <button onclick="location.href = '/company/create'" class="py-2 px-3 rounded-lg bg-green-500 text-white">
            <i class="fa-regular fa-plus"></i> 
            Agregar Empresa
        </button>
    </div>
    {{-- <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" x-on:click="window.livewire.emitTo('components.player-modal', 'showModal', '{{ $player->id }}')" message="Hello World"> {{ __('Delete Account') }} </x-danger-button> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto space-y-6">
            <div class="p-2 sm:p-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:company-table />
            </div>
        </div>
    </div>
    @push('scripts')
     <script>
        function validateDelete(id, name) {
            console.log(id, name);
            const companyStoreBaseUrl = "{{ route('company.destroy', ['company' => 'ID_PLACEHOLDER']) }}";
            let urlWithId = companyStoreBaseUrl.replace('ID_PLACEHOLDER', id);
            let token = "{{csrf_token()}}";
            console.log(urlWithId, token); // Muestra la URL con el ID reemplazado

            Swal.fire({
                title: "¿Desea eliminar el registro?",
                text: name,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#005000',
                cancelButtonColor: '#500000',
                confirmButtonText: "Eliminar",
                cancelButtonText: "Cancelar",
                reverseButtons: false,
                //color: "#770077",
                backdrop: `
                    rgba(123,50,50,0.4)
                `
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('se llama al delete');
                    axios.delete(urlWithId,{
                        headers: {
                            'X-CSRF-TOKEN': token
                        }
                    })
                    .then( response => {
                    //handle success
                    console.log(response.status);
                    if(response.status == 200){
                        Swal.fire({
                        title: "Eliminado",
                        text: "la empresa "+name+" ha sido eliminada",
                        showConfirmButton: false,
                        icon: "success"
                        });
                        Livewire.emit('refreshDatatable');
                    }
                    })
                    .catch( error => {
                    //handle failure
                        console.log(error);
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    console.log('NOOOOO se llama al delete');
                    Swal.fire({
                    title: "Cancelado",
                    text: "Nada se ha borrado",
                    confirmButtonColor: '#005000',
                    icon: "error"
                    });
                }
            });


            /*axios.delete(urlWithId,{
                headers: {
                    'X-CSRF-TOKEN': token
                }
            })
            .then( response => {
            //handle success
            console.log(response.status);
            if(response.status == 200){
                location.reload();
            }
            })
            .catch( error => {
            //handle failure
                console.log(error);
            });*/
        }
     </script>
    @endpush
</x-app-layout>
