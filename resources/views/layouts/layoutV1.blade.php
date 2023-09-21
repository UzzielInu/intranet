<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{ config('app.name', 'Conalep') }}
    </title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ page: '', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value))); $watch('page', value => console.log(value))" :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">
    <!-- ===== Preloader Start ===== -->
    <!-- <include src="./partials/preloader.html"></include> -->
    @include('layouts.partials.preloader')
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
        <!-- ===== Sidebar Start ===== -->
        <!-- <include src="./partials/sidebar.html"></include> -->
        @include('layouts.partials.sidebar')
        <!-- ===== Sidebar End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <!-- ===== Header Start ===== -->
            <!-- <include src="./partials/header.html" /> -->
            @include('layouts.partials.header')
            <!-- ===== Header End ===== -->

            <!-- ===== Main Content Start ===== -->
            <main>
                <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                    {{ $slot }}
                </div>
            </main>
            <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
</body>
@livewireScripts
</html>