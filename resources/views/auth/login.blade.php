<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="h-screen relative bg-cover bg-center bg-no-repeat flex items-center justify-start pl-10"
             style="background-image: url('https://plus.unsplash.com/premium_photo-1675237625862-d982e7f44696?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="absolute inset-0 bg-black opacity-40"></div>

        <div class="container z-10">
            <div class="bg-neutral-700 p-6 sm:px-16 sm:py-10 max-w-[450px] rounded-2xl shadow-lg">
                <h3 class="text-2xl sm:text-3xl font-bold text-yellow-500 mb-3">
                    Coffee -&- Home
                </h3>
                <hr class="w-full border-yellow-500">
                <p class="my-3 text-xl sm:text-2xl font-bold text-yellow-500">Добро пожаловать <br> в наше кафе</p>

                <form method="POST" action="{{ route('login') }}" class="w-full flex flex-col gap-4">
                    @csrf

                    <!-- Email Address -->
                    <div class="flex flex-col gap-1">
                        <label for="email" class="text-yellow-500">Email</label>
                        <input id="email" type="email" name="email" placeholder="Введите email..."
                               class="border border-yellow-500 px-4 py-2 rounded-3xl bg-transparent w-full focus:outline-none focus:ring-2 focus:ring-yellow-500 text-white"
                               value="{{ old('email') }}" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col gap-1">
                        <label for="password" class="text-yellow-500">Пароль</label>
                        <input id="password" type="password" name="password" placeholder="Введите пароль..."
                               class="border border-yellow-500 px-4 py-2 rounded-3xl bg-transparent w-full focus:outline-none focus:ring-2 focus:ring-yellow-500 text-white"
                               required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center gap-2 mt-2">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-yellow-500 shadow-sm focus:ring-yellow-500" name="remember">
                        <label for="remember_me" class="text-sm text-white">Запомнить меня</label>
                    </div>

                    <button class="mt-4 bg-yellow-500 text-black font-semibold px-6 py-2 rounded-3xl w-full hover:bg-yellow-600 transition">
                        Войти
                    </button>
                </form>

                <div class="mt-4">
                    <p class="text-white">У меня нет <a href="{{ route('register') }}" class="text-yellow-500 underline">аккаунта!</a></p>
                </div>

                @if (Route::has('password.request'))
                    <a class="text-sm text-white hover:text-gray-400 mt-2 block" href="{{ route('password.request') }}">
                        Забыли пароль?
                    </a>
                @endif
            </div>
        </div>
    </section>
</x-app-layout>
