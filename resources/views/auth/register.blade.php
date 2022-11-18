<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Paterno -->

            <div>
                <x-input-label for="paterno" :value="__('Paterno')" />

                <x-text-input id="paterno" class="block mt-1 w-full" type="text" name="paterno" :value="old('paterno')" required autofocus />

                <x-input-error :messages="$errors->get('paterno')" class="mt-2" />
            </div>

            <!-- Materno -->

            <div>
                <x-input-label for="materno" :value="__('Materno')" />

                <x-text-input id="materno" class="block mt-1 w-full" type="text" name="materno" :value="old('materno')" required autofocus />

                <x-input-error :messages="$errors->get('materno')" class="mt-2" />
            </div>


            <!-- Edad -->

            <div>
                <x-input-label for="edad" :value="__('Edad')" />

                <x-text-input id="edad" class="block mt-1 w-full" type="number" name="edad" :value="old('edad')" required autofocus />

                <x-input-error :messages="$errors->get('edad')" class="mt-2" />
            </div>

            <!-- Fecha de nacimiento -->

            <div>
                <x-input-label for="fecha_nacimiento" :value="__('Fecha_nacimiento')" />

                <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required autofocus />

                <x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2" />
            </div>

            <!-- Genero -->
            <div class="mt-4">
                <x-input-label for="genero" :value="__('Genero')" />

                <x-text-input id="genero" class="block mt-1 w-full" type="genero" name="genero" :value="old('genero')" required />

                <x-input-error :messages="$errors->get('genero')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
