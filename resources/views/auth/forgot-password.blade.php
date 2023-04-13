<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class=" mt-4">

            <x-primary-button class="w-full flex-col py-3">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>            
            
            <div class="flex justify-between px-2 mt-3">
                <x-Link 
                class=""
                :href="route('login')"    
                >
                    Login
                </x-Link>
                
                <x-Link 
                    class=""
                    :href="route('register')"    
                >
                    Already registered?
                </x-Link>
            </div>
            
        </div>
    </form>
</x-guest-layout>
