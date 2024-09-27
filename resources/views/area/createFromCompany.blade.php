<x-app-layout>
    <!-- ====== Form Layout Section Start -->
    <div class="flex flex-col gap-9">
        <!-- Contact Form -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark flex justify-center">
                <h3 class="font-semibold text-black dark:text-white text-lg">
                    Crear área en : <span class="text-md text-orange-800 dark:text-orange-700"> {{$company->name}} </span>
                </h3>
                @if ($errors->any())
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                        Swal.fire({
                                title: 'Error',
                                html: `
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    `,
                                //text: '{{ Session('success') }}',
                                icon: 'error',
                                confirmButtonColor: '#bb0000',
                                confirmButtonText: 'Aceptar',
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
            <form method="POST" action="{{ route('area.store') }}" autocomplete="off">
                @csrf
                <div class="p-6.5">
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-2/3 flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Nombre <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Nombre del área" name="name" required
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                    </div>
                    <div class="mb-4.5 flex-col gap-6 xl:flex-row justify-center content-center hidden">
                        <div class="w-2/3 flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Empresa <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="" name="company" value="{{$company->id}}"
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
    {{-- <script>
        document.addEventListener('DOMContentLoaded', () => {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
                });
                Toast.fire({
                icon: "success",
                title: "Empresa Creada"
            });                  
        })
    </script> --}}
</x-app-layout>
