<aside 
    :class="sidebarToggle ? 'w-72.5' : deskToggle ? 'w-72.5' : '-translate-x-full'"

    class="absolute left-0 top-0 z-9999 flex h-screen w-0 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark md:static " {{-- lg:translate-x-0 --}}
    >
    
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-center gap-2 px-6 py-5.5 lg:py-6.5">
        {{-- <a href=""> --}}
            <img src="{{URL::to('/')}}/images/logo/logo-hitronic.svg" width="200" height="200" alt="Logo" class="max-h-32"/>
        {{-- </a> --}}
        <button class="block md:hidden text-xl text-green-800" @click.stop="sidebarToggle = !sidebarToggle">
            <i class="fa-solid fa-circle-left"></i>
        </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class="mt-5 py-4 px-4 lg:mt-9 lg:px-6" x-data="{ selected: $persist('catalogues') }">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Catalogos -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="{{ route('catalogues.index') }}" @click="selected = (selected === 'catalogue' ? '':'catalogue')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'catalogue') && (page === 'catalogue') }">
                            <i class="fa-solid fa-rectangle-list"></i>
                            Catálogos
                        </a>
                    </li>
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="{{ route('company.index') }}" @click="selected = (selected === 'catalogue' ? '':'catalogue')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'catalogue') && (page === 'catalogue') }">
                            <i class="fa-solid fa-building"></i>
                            Empresas
                        </a>
                    </li>
                    <!-- Menu Item Calendar -->

                    <!-- Menu Item Profile -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="{{ route('profile.edit') }}" @click="selected = (selected === 'Profile' ? '':'Profile')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Profile') && (page === 'profile') }"
                            :class="page === 'profile' && 'bg-graydark'">
                            <i class="fa-solid fa-user"></i>
                            Usuarios
                        </a>
                    </li>
                    <!-- Menu Item Profile -->

                    <!-- Menu Item SheetNumber -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="{{ route('report.index') }}" @click="selected = (selected === 'SheetNumber' ? '':'SheetNumber')"
                            :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'SheetNumber') && (page === 'SheetNumber') }">
                            <i class="fa-solid fa-file-invoice"></i>
                            Reportes
                        </a>
                    </li>
                    <!-- Menu Item SheetNumber -->
                </ul>
            </div>
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>
