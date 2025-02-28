<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="h-screen relative bg-cover bg-center bg-no-repeat flex items-center justify-center overflow-hidden"
             style="background-image: url('https://github.com/TikhonovIvan/dip1/blob/main/img/hero_bg.png?raw=true');">
        <div class="absolute top-1/2 -right-30 transform -translate-y-1/2  w-1/2 hidden sm:block">
            <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/rectangle.png?raw=true" alt="Rectangle">
        </div>

        <div class="container z-10">
            <div class="bg-neutral-700 p-6 sm:px-16 sm:py-10 max-w-[450px] rounded-2xl shadow-lg">
                <h3 class="w-full mb-3 text-2xl font-bold text-center text-yellow-500 sm:text-3xl">
                    Coffee -&- Home
                </h3>
                <hr class="w-full border-yellow-500">
                <p class="my-3 text-xl font-bold text-center text-yellow-500 sm:text-2xl">Добро пожаловать <br> в наше кафе</p>

                <form method="POST" action="{{ route('login') }}" class="flex flex-col w-full gap-4">
                    @csrf

                    <!-- Email Address -->
                    <div class="flex flex-col gap-1">
                        <label for="email" class="text-center text-white">Email</label>
                        <input id="email" type="email" name="email" placeholder="Введите email..."
                               class="w-full px-4 py-2 text-center text-white bg-transparent border border-yellow-500 rounded-3xl focus:outline-none focus:ring-2 focus:ring-yellow-500"
                               value="{{ old('email') }}" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col gap-1">
                        <label for="password" class="text-center text-white">Пароль</label>
                        <input id="password" type="password" name="password" placeholder="Введите пароль..."
                               class="w-full px-4 py-2 text-center text-white bg-transparent border border-yellow-500 rounded-3xl focus:outline-none focus:ring-2 focus:ring-yellow-500"
                               required autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-center w-full gap-2 mt-2">
                        <input id="remember_me" type="checkbox" class="text-yellow-500 border-gray-300 rounded shadow-sm focus:ring-yellow-500" name="remember">
                        <label for="remember_me" class="text-sm text-center text-white">Запомнить меня</label>
                    </div>

                    <button class="w-full px-6 py-2 mt-4 font-semibold text-white transition bg-yellow-500 rounded-3xl hover:bg-yellow-600">
                        Войти
                    </button>
                </form>

                <div class="mt-4">
                    <p class="text-center text-white">У меня нет <a href="{{ route('register') }}" class="text-yellow-500 underline">аккаунта!</a></p>
                </div>

                @if (Route::has('password.request'))
                    <a class="block mt-2 text-center text-white ext-sm hover:text-gray-400" href="{{ route('password.request') }}">
                        Забыли пароль?
                    </a>
                @endif
            </div>
        </div>
    </section>
</x-app-layout>
