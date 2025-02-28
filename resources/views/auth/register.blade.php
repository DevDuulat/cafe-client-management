<x-app-layout>
    <section class="h-screen relative bg-cover bg-center bg-no-repeat flex items-center justify-center overflow-hidden"
             style="background-image: url('https://plus.unsplash.com/premium_photo-1675237625862-d982e7f44696?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="container z-10">
            <div class="flex flex-col items-center justify-center bg-neutral-700  p-5 sm:px-15 sm:py-10 max-w-[450px]  rounded-2xl ">
                <h3 class="text-2xl sm:text-3xl font-bold text-yellow-500 mb-3">
                    Coffee -&- Home
                </h3>
                <hr class="w-full text-yellow-500">
                <p class="my-3 text-xl sm:text-2xl font-bold text-yellow-500 text-center">Регистрация</p>

                <form method="POST" action="{{ route('register') }}" class="w-full flex flex-col gap-4">
                    @csrf

                    <!-- Name -->
                    <div class="flex flex-col gap-4 items-center justify-center text-white">
                        <!-- Name -->
                        <div class="flex flex-col gap-1 w-full max-w-md">
                            <label for="name" class="text-white text-center">Имя</label>
                            <input id="name" type="text" name="name" placeholder="Введите имя..."
                                   class="border border-yellow-500 px-4 py-2 rounded-3xl bg-transparent w-full focus:outline-none focus:ring-2 focus:ring-yellow-500 text-white text-center">
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-center" />
                        </div>

                        <!-- Email -->
                        <div class="flex flex-col gap-1 w-full max-w-md">
                            <label for="email" class="text-white text-center">Email</label>
                            <input id="email" type="email" name="email" placeholder="Введите email..."
                                   class="border border-yellow-500 px-4 py-2 rounded-3xl bg-transparent w-full focus:outline-none focus:ring-2 focus:ring-yellow-500 text-white text-center"
                                   value="{{ old('email') }}" required autocomplete="username">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-center" />
                        </div>

                        <!-- Password -->
                        <div class="flex flex-col gap-1 w-full max-w-md">
                            <label for="password" class="text-white text-center">Пароль</label>
                            <input id="password" type="password" name="password" placeholder="Введите пароль..."
                                   class="border border-yellow-500 px-4 py-2 rounded-3xl bg-transparent w-full focus:outline-none focus:ring-2 focus:ring-yellow-500 text-white text-center"
                                   required autocomplete="new-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-center" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="flex flex-col gap-1 w-full max-w-md">
                            <label for="password_confirmation" class="text-white text-center">Повторите пароль</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Повторите пароль..."
                                   class="border border-yellow-500 px-4 py-2 rounded-3xl bg-transparent w-full focus:outline-none focus:ring-2 focus:ring-yellow-500 text-white text-center"
                                   required autocomplete="new-password">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-center" />
                        </div>
                    </div>


                    <button type="submit" class="mt-4 bg-yellow-500 text-white font-semibold px-6 py-2 rounded-3xl w-full hover:bg-yellow-600 transition">
                        Регистрация
                    </button>
                </form>

                <div class="mt-4">
                    <p class="text-white">У меня есть <a href="{{ route('login') }}" class="text-yellow-500 underline">аккаунт!</a></p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
