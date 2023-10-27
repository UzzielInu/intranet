<x-app-layout>
    <div x-init="page = 'AdministrativeUnits', show = true" class="flex justify-center">
        <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-ride="carousel">
            <!--Carousel indicators-->
            <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 3"></button>
            </div>

            <!--Carousel items-->
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!--First item-->
                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                    <img src="https://conalepveracruz.edu.mx/wp-content/uploads/2023/02/Banner-Proceso-de-Admision1.jpg" class="block w-full"
                        alt="..." />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white dark:text-bodydark2 md:block">
                        <h5 class="text-xl">CONALEP</h5>
                        <p>
                            Por un mejor futuro.
                        </p>
                    </div>
                </div>
                <!--Second item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item style="backface-visibility: hidden">
                    <img src="https://conalepveracruz.edu.mx/wp-content/uploads/2022/06/Captura-de-Pantalla-2022-06-07-a-las-23.47.46.jpg" class="block w-full"
                        alt="..." />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white dark:text-bodydark2 md:block">
                        <h5 class="text-xl">Ejemplo</h5>
                        <p>
                            Texto ejemplo.
                        </p>
                    </div>
                </div>
                <!--Third item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item style="backface-visibility: hidden">
                    <img src="https://conalepveracruz.edu.mx/wp-content/uploads/2022/09/Banner-Conalep-Veracruz-1519.jpg" class="block w-full"
                        alt="..." />
                    <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white dark:text-bodydark2 md:block">
                        <h5 class="text-xl">Ejemplo</h5>
                        <p>
                            Texto ejemplo.
                        </p>
                    </div>
                </div>
            </div>

            <!--Carousel controls - prev item-->
            {{-- <button
                class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
            </button> --}}
            <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
            <!--Carousel controls - next item-->
            {{-- <button
                class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
            </button> --}}
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row pt-10 mx-2">
        <div class="w-full shadow-inner">
            <div class="flex">
                <h1 class="text-2xl font-bold tracking-wide">Noticias</h1>
            </div>
            {{-- item noticia --}}
            <div class="flex flex-row py-2">
                <div class="w-1/3 pr-2">
                    <img src="https://conalepveracruz.edu.mx/wp-content/uploads/2023/09/029651b6-9dc2-4f4c-ad62-3c914e76028c-300x300.jpg" alt="" class="block w-full">
                </div>
                <div class="w-2/3 text-black dark:text-white">
                    <div class="text-xl font-semibold pb-1 text-center">
                        Ceremonia de Premiación Intel AI Global Impact Festival
                    </div>
                    <div class="text-xs font-light pb-2 pt-1">
                        By Jose Martin Cuevas Guerra In Blog 27 Septiembre, 2023
                    </div>
                    <div class="text-base font-normal pt-1 text-justify">
                        Ingenio, creatividad, determinación y empatía son piezas fundamentales para la creación de proye
                    </div>
                </div>
            </div>
            {{-- item noticia --}}
            <div class="flex flex-row py-2">
                <div class="w-1/3 pr-2">
                    <img src="https://conalepveracruz.edu.mx/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-12-at-18.46.35-10-300x300.jpeg" alt="" class="block w-full">
                </div>
                <div class="w-2/3 text-black dark:text-white">
                    <div class="text-xl font-semibold pb-1 text-center">
                        Segunda Sesión del Comité de Vinculación
                    </div>
                    <div class="text-xs font-light pb-2 pt-1">
                        By Jose Martin Cuevas Guerra In Blog 12 Septiembre, 2023
                    </div>
                    <div class="text-base font-normal pt-1 text-justify">
                        El día de hoy, martes 12 de septiembre de 2023, se celebró la Segunda Sesión Ordinaria del Comit
                    </div>
                </div>
            </div>

            <div class="flex flex-row py-2">
                <div class="w-1/3 pr-2">
                    <img src="https://conalepveracruz.edu.mx/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-11-at-14.14.28-300x300.jpeg" alt="" class="block w-full">
                </div>
                <div class="w-2/3 text-black dark:text-white">
                    <div class="text-xl font-semibold pb-1 text-center">
                        El día de hoy, martes 12 de septiembre de 2023, se celebró la Segunda Sesión Ordinaria del Comit
                    </div>
                    <div class="text-xs font-light pb-2 pt-1">
                        By Jose Martin Cuevas Guerra In Blog 11 Septiembre, 2023
                    </div>
                    <div class="text-base font-normal pt-1 text-justify">
                        Obtienen los planteles Conalep 122 "Dr. Gonzalo Aguirre Beltrán" Carlos A. Carrillo y Conalep 201
                    </div>
                </div>
            </div>
            
        </div>

        <div class="w-full shadow-inner mx-2 container">
            <div class="text-2xl font-bold tracking-wide">
                <div class="flex">
                    <h1 class="text-2xl font-bold tracking-wide">Eventos</h1>
                </div>
            </div>
        </div>

        {{-- <div class="bg-blue-400 w-1/3">
            3
        </div> --}}
    </div>
</x-app-layout>
