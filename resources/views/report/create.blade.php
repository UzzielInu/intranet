<x-app-layout>
    <!-- ====== Form Layout Section Start -->
    <div class="flex flex-col gap-9">
        <!-- Contact Form -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark flex justify-center">
                <h3 class="font-semibold text-black dark:text-white text-xl">
                    Crear Reporte
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
            </div>
            <form method="POST" action="{{ route('report.store') }}" autocomplete="off">
                @csrf
                <div class="p-6.5">
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Reportó <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Nombre del área" name="partner" disabled value="{{Auth::user()->name}}"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Compañero <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Nombre del Compañero" name="partner" required
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Fecha <span class="text-meta-1">*</span>
                            </label>
                            <input type="date" placeholder="fecha" name="date" value="{{today()->toDateString()}}"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Empresa <span class="text-meta-1">*</span>
                            </label>
                            <select name="company" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                <option value="0" selected>Selecciona Empresa</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">
                                        {{ $company->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Área de Trabajo <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="select area" name="area"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Actividades <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Escriba las actividades" name="activities"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Faltantes <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Escriba los faltantes" name="missing"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Estado <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Select estado" name="status"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Nombre Firma <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Nombre de quien firma" name="signature_name"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Firma <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Firma" name="signature"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Llegada <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Hora de llegada" name="quantity"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Salida <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Hora de salida" name="exit"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Horas de trabajo <span class="text-meta-1">*</span>
                            </label>
                            <input type="text" placeholder="Horas Trabajadas" name="total_work"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                    </div>
                    <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark flex justify-between">
                        <h3 class="font-semibold text-black dark:text-white text-xl">Materiales</h3>
                        <button type="button" onclick="addMaterial()" class="py-2 px-3 rounded-lg bg-green-500 text-white">
                            <i class="fa-regular fa-plus"></i> 
                            Agregar Material
                        </button>
                    </div>
                    <div id="materials" class="mb-4.5 flex flex-col gap-6 justify-center content-center">
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class="flex w-2/4 self-center justify-center rounded items-center bg-primary p-3 text-lg text-gray">
                            Guardar <i class="fa-solid fa-floppy-disk ml-3"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function addMaterial() {
            var materialDiv = document.createElement("div");
            materialDiv.setAttribute("class", "w-full flex flex-row gap-6");
            
            // Create div Item
            var divItem = document.createElement("div");
            divItem.setAttribute("class", "w-full flex flex-row");
            var labelItem = document.createElement("label");
            labelItem.setAttribute("class", "flex my-auto mr-2 text-black dark:text-white");
            labelItem.innerHTML = "Item";
            var inputItem = document.createElement("input");
            inputItem.setAttribute("type", "text");
            inputItem.setAttribute("placeholder", "Partida");
            inputItem.setAttribute("name", "item[]");
            inputItem.setAttribute("class", "w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary");
            divItem.append(labelItem, inputItem);
            // Create div Quantity
            var divQuantity = document.createElement("div");
            divQuantity.setAttribute("class", "w-full flex flex-row");
            var labelQuantity = document.createElement("label");
            labelQuantity.setAttribute("class", "flex my-auto mr-2 text-black dark:text-white");
            labelQuantity.innerHTML = "Cantidad";
            var inputQuantity = document.createElement("input");
            inputQuantity.setAttribute("type", "text");
            inputQuantity.setAttribute("placeholder", "Cantidad");
            inputQuantity.setAttribute("name", "quantity[]");
            inputQuantity.setAttribute("class", "w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary");
            divQuantity.append(labelQuantity, inputQuantity);
            // Create div Description
            var divDescription = document.createElement("div");
            divDescription.setAttribute("class", "w-full flex flex-row");
            var labelDescription = document.createElement("label");
            labelDescription.setAttribute("class", "flex my-auto mr-2 text-black dark:text-white");
            labelDescription.innerHTML = "Descripción";
            var inputDescription = document.createElement("input");
            inputDescription.setAttribute("type", "text");
            inputDescription.setAttribute("placeholder", "Material");
            inputDescription.setAttribute("name", "description[]");
            inputDescription.setAttribute("class", "w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary");
            divDescription.append(labelDescription, inputDescription);
            // Create div Location
            var divLocation = document.createElement("div");
            divLocation.setAttribute("class", "w-full flex flex-row");
            var labelLocation = document.createElement("label");
            labelLocation.setAttribute("class", "flex my-auto mr-2 text-black dark:text-white");
            labelLocation.innerHTML = "Location";
            var inputLocation = document.createElement("input");
            inputLocation.setAttribute("type", "text");
            inputLocation.setAttribute("placeholder", "Ubicación");
            inputLocation.setAttribute("name", "location[]");
            inputLocation.setAttribute("class", "w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary");
            divLocation.append(labelLocation, inputLocation);
            // Create div Origin
            var divOrigin = document.createElement("div");
            divOrigin.setAttribute("class", "w-full flex flex-row");
            var labelOrigin = document.createElement("label");
            labelOrigin.setAttribute("class", "flex my-auto mr-2 text-black dark:text-white");
            labelOrigin.innerHTML = "Origin";
            var inputOrigin = document.createElement("input");
            inputOrigin.setAttribute("type", "text");
            inputOrigin.setAttribute("placeholder", "Procedencia");
            inputOrigin.setAttribute("name", "origin[]");
            inputOrigin.setAttribute("class", "w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary");
            divOrigin.append(labelOrigin, inputOrigin);


            materialDiv.append(divItem, divQuantity, divDescription, divLocation, divOrigin);
           document.getElementById("materials").append(materialDiv);
        }
    </script>
</x-app-layout>
