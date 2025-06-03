<x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.5/dist/signature_pad.umd.min.js"></script>
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
                        <div class="w-full flex flex-row content-center justify-center">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Empresa <span class="text-meta-1">*</span>
                            </label>
                            <select id="company" name="company_id" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                <option value=""></option>
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
                            <select id="area" name="area_id" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                {{-- <option value=""></option> --}}
                            </select>
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Máquina <span class="text-meta-1">*</span>
                            </label>
                            <select id="machine" name="machine_id" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                {{-- <option value=""></option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Actividades <span class="text-meta-1">*</span>
                            </label>
                            <textarea class="w-full min-h-[100px] rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                            placeholder="Escriba las actividades" name="activities"></textarea>
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Faltantes <span class="text-meta-1">*</span>
                            </label>
                            <textarea class="w-full min-h-[100px] rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                            placeholder="Escriba los faltantes" name="missing"></textarea>
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Estado <span class="text-meta-1">*</span>
                            </label>
                            <select id="status" name="status" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                <option value="" selected hidden></option>
                                <option value="Terminado">Terminado</option>
                                <option value="Pendiente">Pendiente</option>
                            </select>
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Tipo Cobranza <span class="text-meta-1">*</span>
                            </label>
                            <select id="cobranza" name="cobranza" class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                <option value="" selected hidden></option>
                                <option value="Presupuestado">Presupuestado</option>
                                <option value="Por Cobrar">Por Cobrar</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
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
                            {{-- <input type="text" placeholder="Firma" name="signature"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" /> --}}
                            <div style="border: 1px solid #ccc; width: 400px; height: 200px;">
                                <canvas id="signature-pad" width="400" height="200"></canvas>
                            </div>
                            <button type="button" id="clear">Limpiar</button>
                            <input type="hidden" name="signature" id="signature">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-center content-center">
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Llegada <span class="text-meta-1">*</span>
                            </label>
                            <input id="arrival" type="text" placeholder="Hora de llegada" name="arrival"
                                class="time w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Salida <span class="text-meta-1">*</span>
                            </label>
                            <input id="exit" type="time" placeholder="Hora de salida" name="exit"
                                class="time w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                        </div>
                        <div class="w-full flex flex-row">
                            <label class="flex my-auto mr-2 text-black dark:text-white">
                                Horas de trabajo <span class="text-meta-1">*</span>
                            </label>
                            <input id="total_work" type="text" placeholder="Horas Trabajadas" name="total_work"
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
                        <div class="w-full flex flex-row justify-between">
                            <label class="flex text-black dark:text-white">Partida</label>
                            <label class="flex text-black dark:text-white">Cantidad</label>
                            <label class="flex text-black dark:text-white">Material</label>
                            {{-- <label class="flex text-black dark:text-white">Ubicación</label> --}}
                            <label class="flex text-black dark:text-white">Procedencia</label>
                        </div>
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
    <script type='module'>
        $(document).ready(function() {
            flatpickr("#arrival", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i", // Formato 24 horas: HH:mm
                time_24hr: true
            });
            flatpickr("#exit", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i", // Formato 24 horas: HH:mm
                time_24hr: true
            });
            // Initialize Select2
            $('#company').select2({
                placeholder: "Empresa",
            });
            $('#area').select2({
                placeholder: "Área",
            });
            $('#machine').select2({
                placeholder: "Máquina",
            });

            $('#area').on( "change", function() {
                $("#machine").html('').select2({data: [{id: '', text: ''}]});
                console.log($(this).val());
                let uri = ('{{URL::to('/')}}'+'/options/machine/'+$(this).val());
                $.get(uri, function(data, status){
                    console.log(data.length, status);
                    if(status != "success"){
                        console.log("error");
                    }else{
                        $("#machine").select2({
                            placeholder: "Máquina",
                            data: data
                        })
                    }
                });
            });

            $('#company').on( "change", function() {
                $("#area").html('').select2({data: [{id: '', text: ''}]});
                console.log($(this).val());
                let uri = ('{{URL::to('/')}}'+'/options/area/'+$(this).val());
                $.get(uri, function(data, status){
                    console.log(data.length, status);
                    if(status != "success"){
                        console.log("error");
                    }else{
                        $("#area").select2({
                            placeholder: "Área",
                            data: data
                        })
                    }
                });
            });

            $('input.time').on( "change", function() {
                let entrada = $('#arrival').val();
                let salida = $('#exit').val();
                console.log(entrada, salida);
                if (entrada && salida) {
                    let [horaEntrada, minutoEntrada] = entrada.split(':');
                    let [horaSalida, minutoSalida] = salida.split(':');

                    let fechaEntrada = new Date();
                    let fechaSalida = new Date();

                    fechaEntrada.setHours(horaEntrada, minutoEntrada);
                    fechaSalida.setHours(horaSalida, minutoSalida);

                    // Calcular la diferencia en milisegundos
                    let diferencia = fechaSalida - fechaEntrada;
                    //if (diferencia < 0) {
                    //    alert('La hora de salida debe ser mayor que la hora de entrada');
                    //    return;
                    //}
                    let horasTranscurridas = Math.floor(diferencia / (1000 * 60 * 60));
                    let minutosTranscurridos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
                    $("#total_work").val(`${horasTranscurridas} horas y ${minutosTranscurridos} minutos`);
                }else {
                    $("#total_work").val('Ingrese entrada y salida');
                }
            });
        });
    </script>
    <script>
        function addMaterial() {
            var materialDiv = document.createElement("div");
            materialDiv.setAttribute("class", "w-full flex flex-col lg:flex-row gap-6");
            
            // Create div Item
            var divItem = document.createElement("div");
            divItem.setAttribute("class", "w-full lg:w-2/12 flex flex-row");
            var labelItem = document.createElement("label");
            labelItem.setAttribute("class", "flex my-auto mr-2 text-black dark:text-white");
            labelItem.innerHTML = "partida";
            var inputItem = document.createElement("input");
            inputItem.setAttribute("type", "text");
            inputItem.setAttribute("placeholder", "Partida");
            inputItem.setAttribute("name", "item[]");
            inputItem.setAttribute("class", "w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary");
            divItem.append(inputItem);
            // Create div Quantity
            var divQuantity = document.createElement("div");
            divQuantity.setAttribute("class", "w-full lg:w-2/12 flex flex-row");
            var labelQuantity = document.createElement("label");
            labelQuantity.setAttribute("class", "flex my-auto mr-2 text-black dark:text-white");
            labelQuantity.innerHTML = "Cantidad";
            var inputQuantity = document.createElement("input");
            inputQuantity.setAttribute("type", "text");
            inputQuantity.setAttribute("placeholder", "Cantidad");
            inputQuantity.setAttribute("name", "quantity[]");
            inputQuantity.setAttribute("class", "w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary");
            divQuantity.append(inputQuantity);
            // Create div Description
            var divDescription = document.createElement("div");
            divDescription.setAttribute("class", "w-full lg:w-4/12 flex flex-row");
            var labelDescription = document.createElement("label");
            labelDescription.setAttribute("class", "flex my-auto mr-2 text-black dark:text-white");
            labelDescription.innerHTML = "Material";
            var inputDescription = document.createElement("input");
            inputDescription.setAttribute("type", "text");
            inputDescription.setAttribute("placeholder", "Material");
            inputDescription.setAttribute("name", "description[]");
            inputDescription.setAttribute("class", "w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary");
            divDescription.append(inputDescription);
            
            // Create div Origin
            var divOrigin = document.createElement("div");
            divOrigin.setAttribute("class", "w-full lg:w-4/12 flex flex-row");
            var labelOrigin = document.createElement("label");
            labelOrigin.setAttribute("class", "flex my-auto mr-2 text-black dark:text-white");
            labelOrigin.innerHTML = "Procedencia";
            var inputOrigin = document.createElement("select");
            inputOrigin.setAttribute("name", "origin[]");
            inputOrigin.setAttribute("class", "w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary");
            var option1 = document.createElement("option");
            option1.setAttribute("value", "Procedencia");
            option1.setAttribute("selected");
            option1.setAttribute("hidden");
            option1.innerHTML = "";
            var option2 = document.createElement("option");
            option2.setAttribute("value", "Tienda");
            option2.innerHTML = "Tienda";
            var option3 = document.createElement("option");
            option3.setAttribute("value", "Bodega");
            option3.innerHTML = "Bodega";
            inputOrigin.append(option1, option2, option3)
            divOrigin.append(inputOrigin);
            
            materialDiv.append(divItem, divQuantity, divDescription, divOrigin);
           document.getElementById("materials").append(materialDiv);
        }
    </script>
    <script>
    const canvas = document.getElementById('signature-pad');
    const signaturePad = new SignaturePad(canvas);
    const clearButton = document.getElementById('clear');
    const saveButton = document.getElementById('save');
    const form = document.getElementById('signature-form');
    const input = document.getElementById('signature');

    clearButton.addEventListener('click', function () {
        signaturePad.clear();
    });

    saveButton.addEventListener('click', function () {
        if (signaturePad.isEmpty()) {
            alert("Por favor firma antes de guardar.");
        } else {
            const dataURL = signaturePad.toDataURL(); // Imagen base64
            input.value = dataURL;
            form.submit();
        }
    });
</script>
</x-app-layout>
