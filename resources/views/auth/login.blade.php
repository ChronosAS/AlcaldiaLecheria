<x-blank-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" class="text-white"/>
                <x-input id="email" class="block mt-1 w-full bg-white focus:border-orange-500 dark:focus:border-orange-500 focus:ring-orange-500 dark:focus:ring-orange-600" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  style="color:black"/>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-white"/>
                <x-input id="password" class="block mt-1 w-full focus:border-orange-500 dark:focus:border-orange-500  focus:ring-orange-500 dark:focus:ring-orange-600 bg-white" type="password" name="password" required autocomplete="current-password" style="color:black"/>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" class="focus:ring-orange-600 dark:focus:ring-orange-500 dark:focus:ring-offset-orange-300 dark:bg-white border-gray-300 dark:border-gray-700 text-orange-500" />
                    <span class="ms-2 text-sm text-white dark:text-white ">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="">
                <a class="underline text-sm text-white   hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 " href="{{ route('register') }}">
                    ¿No tienes una cuenta?
                </a>
            </div>
            <div class="flex items-center justify-between ">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white   hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 " href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4 text-blue-900">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-blank-layout>
