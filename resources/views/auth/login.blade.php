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
                <x-input id="email"  style="color: black" class="block mt-1 w-full bg-white dark:bg-white text-black dark:text-black focus:border-blue-500 dark:focus:border-blue-500 focus:ring-blue-500 dark:focus:ring-blue-600" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  style="color:black"/>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-white"/>
                <x-input id="password"  style="color: black" class="block mt-1 w-full dark:bg-white text-black dark:text-black focus:border-blue-500 dark:focus:border-blue-500  focus:ring-blue-500 dark:focus:ring-blue-600 bg-white" type="password" name="password" required autocomplete="current-password" style="color:black"/>
            </div>

            <div class=" mt-4 flex items-center justify-between">
                {{-- <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" class="focus:ring-blue-600 dark:focus:ring-blue-500 dark:focus:ring-offset-blue-300 dark:bg-white border-gray-300 dark:border-gray-700 text-blue-500" />
                    <span class="ms-2 text-sm text-white dark:text-white ">{{ __('Remember me') }}</span>
                </label> --}}
            
            {{-- <div class="">
                <a class="underline text-sm text-white   hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 " href="{{ route('register') }}">
                    ¿No tienes una cuenta?
                </a>
            </div> --}}
             
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-white   hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 " href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-button class="bg-blue-600 ms-4 text-white hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 focus:ring-2 focus:ring-offset-2">    
                    {{ __('Login') }}
                </x-button>
            </div> 
        </form>
    </x-authentication-card>
</x-blank-layout>
