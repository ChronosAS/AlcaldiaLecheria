<x-blank-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" class="text-white"/>
                <x-input id="name" style="color: black" class="block mt-1 w-full  bg-white  text-black  focus:border-blue-500  focus:ring-blue-600" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" class="text-white"/>
                <x-input id="email"  style="color: black" class="block mt-1 w-full   text-black bg-white focus:border-blue-500  focus:ring-blue-600" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-white"/>
                <x-input id="password"  style="color: black" class="block mt-1 w-full  bg-white  text-black focus:border-blue-500  focus:ring-blue-600" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-white"/>
                <x-input id="password_confirmation" style="color: black" class="block mt-1 w-full  bg-white  text-black focus:border-blue-500  focus:ring-blue-600" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm  text-gray-400  hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm  text-gray-400  hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-white  hover:text-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 focus:ring-offset-blue-400" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4 text-white bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 focus:ring-2 focus:ring-offset-2">
                    {{ __('Register') }}
                </x-button> --}}
            </div>
        </form>
    </x-authentication-card>
</x-blank-layout>
