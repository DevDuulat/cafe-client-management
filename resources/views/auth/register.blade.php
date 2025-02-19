<x-guest-layout>
    <section class="h-screen relative bg-cover bg-center bg-no-repeat
            flex items-center justify-center overflow-x-hidden overflow-y-hidden"
             style="background-image: url('https://plus.unsplash.com/premium_photo-1675237625862-d982e7f44696?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="absolute inset-0 bg-black opacity-40 "></div>
        <div class="container z-10">
            <div class="flex flex-col items-center justify-center bg-neutral-700  p-5 sm:px-15 sm:py-10 max-w-[450px]  rounded-2xl ">
                <h3 class="text-2xl sm:text-3xl font-bold text-yellow-500 mb-3">
                    Coffee -&- Home
                </h3>
                <hr class="w-full text-yellow-500">
                <p class="my-3 text-xl sm:text-2xl font-bold text-yellow-500 text-center">Регистрация</p>
        <form method="POST" action="{{ route('register') }}" class="flex flex-col items-center justify-center gap-4">
            @csrf

        <!-- Name -->
        <div class="flex flex-col items-center justify-center gap-1 ">
            <x-input-label for="name" :value="__('Name')" />
            <input id="name" type="email" name="name" placeholder="Введите имя..."
                   class="border border-yellow-500 px-5 sm:px-10 py-2 rounded-3xl bg-transparent">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" placeholder="Введите еmail..."
                   class="border border-yellow-500 px-5 sm:px-10 py-2 !rounded-3xl bg-transparent"
                          :value="old('email')" required autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="border border-yellow-500 px-5 sm:px-10 py-2 !rounded-3xl bg-transparent"
                            type="password"
                            name="password"
                            placeholder="Введите пароль..."
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="border border-yellow-500 px-5 sm:px-10 py-2 !rounded-3xl bg-transparent"
                            type="password"
                            placeholder="Повторите пароль..."
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">


            <button type="submit" class="mt-4 mb-4 bg-yellow-500 text-yellow-50 px-15 py-2 rounded-3xl w-64">Регистрация</button>
        </div>
    </form>

                <div>
                    <p>У меня есть <a href="{{ route('login') }}" class="text-yellow-500 ">аккаунт! </a></p>
                </div>
        </div>
        </div>
    </section>
</x-guest-layout>
