<x-app-layout>
    <!-- ====== Form Layout Section Start -->
    <div class="flex flex-col gap-9">
        <!-- Contact Form -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                <h3 class="font-semibold text-black dark:text-white">
                    Editar Empresa
                </h3>
                @if (Session::has('success'))
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                        Swal.fire({
                                title: '¡Éxito!',
                                text: '{{ Session('success') }}',
                                icon: 'success',
                                confirmButtonColor: '#00bb00',
                                confirmButtonText: 'Lo tengo',
                            });
                        })
                    </script>
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
            <form method="POST" action="{{ route('company.update', ['company' => $company]) }}" autocomplete="off">
                @method('PUT')
                @csrf
                <div class="p-6.5">
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-2/3 flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Nombre <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Nombre de la empresa" name="name" value="{{$company->name}}" required
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="flex w-1/4 self-center justify-center rounded items-center bg-primary p-3 text-lg text-gray">
                            Guardar <i class="fa-solid fa-floppy-disk ml-3"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
