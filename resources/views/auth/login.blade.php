<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<section class="h-screen relative bg-cover bg-center bg-no-repeat
            flex items-center justify-center overflow-x-hidden overflow-y-hidden"
         style="background-image: url('https://plus.unsplash.com/premium_photo-1675237625862-d982e7f44696?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

        <div class="absolute inset-0 bg-black opacity-40 "></div>
    <div class="container z-10">
        <div class="flex flex-col items-center justify-center bg-neutral-700  p-6 sm:px-16 sm:py-10 max-w-[450px]  rounded-2xl ">
        <h3 class="text-2xl sm:text-3xl font-bold text-yellow-500 mb-3">
            Coffee -&- Home
        </h3>
        <hr class="w-full text-yellow-500">
            <p class="my-3 text-xl  sm:text-2xl font-bold text-yellow-500 text-center">Добро пожаловать <br> в наше кафе</p>
            <form method="POST" action="{{ route('login') }}" class="flex flex-col items-center justify-center gap-4">
                @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input id="email" class="border border-yellow-500 px-5 sm:px-10 py-2 !rounded-3xl bg-transparent" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="border border-yellow-500 px-5 sm:px-10 py-2 !rounded-3xl bg-transparent"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-white">{{ __('Запомнить меня') }}</span>
                    </label>
                </div>

            <div class="flex flex-col items-center justify-center gap-1">
                <button class="mt-4 mb-4 bg-yellow-500 text-yellow-50 px-15 py-2 text-center rounded-3xl w-64">
                    {{ __('Войти') }}
                </button>
            </div>
    </form>

            <div>
                <p>У меня нет <a href="{{ route('register') }}" class="text-yellow-500 ">аккаунта!</a></p>
            </div>

            @if (Route::has('password.request'))
                <a class="text-sm text-white hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Забыли пароль?') }}
                </a>
            @endif
        </div>
    </div>
</section>
</x-guest-layout>
