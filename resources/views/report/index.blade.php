<x-app-layout>
    {{-- El x-init="page = 'formLayout'" nos sirve para indicarle al sidebar dónde estamos situados --}}
    <div  x-init="page = 'AdministrativeUnits', show = true" class="container">
        @if(Session::has('success'))
        <div class="bg-green-500">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
    </div>
    <div class="flex flex-row justify-between">
        <div class="flex text-center items-center">
            <h2 class="font-bold">Unidades Administrativas</h2>
        </div>
        <button onclick="location.href = '/administrativeUnit/create'" class="py-2 px-3 rounded-lg bg-green-500 text-white"><i class="fa-regular fa-plus"></i> Agregar Unidad</button>
    </div>
    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <div class="py-12">
        <div class="max-w-7xl mx-auto space-y-6">
            <div class="p-2 sm:p-2 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:administrative-unit-table/>
            </div>
        </div>
    </div>
    
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</x-app-layout>