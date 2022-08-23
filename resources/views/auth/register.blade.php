<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
<<<<<<< HEAD
                <x-label for="name" :value="__('Name')" />
=======
                <x-label for="dni" :value="__('DNI/NIE')" />

                <x-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required autofocus />
            </div>

            
            <div>
                <x-label for="name" :value="__('Nombre')" />
>>>>>>> paz

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="password" :value="__('Password')" />
=======
                <x-label for="password" :value="__('Contraseña')" />
>>>>>>> paz

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
=======
                <x-label for="password_confirmation" :value="__('Confirma la contraseña')" />
>>>>>>> paz

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
<<<<<<< HEAD
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
=======
                    {{ __('Ya te encuentras registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrarme') }}
>>>>>>> paz
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
