<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
<<<<<<< HEAD
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
=======
            {{ __('Gracias por registrarte! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.') }}
>>>>>>> paz
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
<<<<<<< HEAD
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
=======
                {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.') }}
>>>>>>> paz
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
<<<<<<< HEAD
                        {{ __('Resend Verification Email') }}
=======
                        {{ __('Reenviar correo electrónico de verificación') }}
>>>>>>> paz
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
<<<<<<< HEAD
                    {{ __('Log Out') }}
=======
                    {{ __('Cerrar sesión') }}
>>>>>>> paz
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
