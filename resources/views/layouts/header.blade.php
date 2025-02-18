<header class="bg-neutral-800 fixed top-0 inset-x-0 z-20 sm:static">
    <div class="flex px-5 items-center justify-between text-yellow-500 py-3 sм:py-6">
        <a href="{{ route('home') }}">
            <span class="text-xl sm:text-2xl">Coffee -&- Home</span>
        </a>

        <nav class="hidden lg:block">
            <ul class="flex items-center gap-x-4 lg:gap-x-8 uppercase">


                @auth
                    <li><a href="{{ route('dashboard') }}" class="font-bold hover:text-yellow-50">Моя страница</a></li>
                    <li><a href="{{ route('menu.index') }}" class="font-bold hover:text-yellow-50">Меню</a></li>
                    <li><a href="{{ route('reservation.create') }}" class="font-bold hover:text-yellow-50">Бронь</a></li>
                    <li><a href="{{ route('reviews.create') }}" class="font-bold hover:text-yellow-50">Отзывы</a></li>
                @else
                    <li><a href="#menu" class="font-bold hover:text-yellow-50">Меню</a></li>
                    <li><a href="#about" class="font-bold hover:text-yellow-50">О нас</a></li>
                    <li><a href="#gallery" class="font-bold hover:text-yellow-50">Галерея</a></li>
                    <li><a href="#footer" class="font-bold hover:text-yellow-50">Контакты</a></li>
                @endauth
            </ul>
        </nav>


        <div class="items-center gap-x-6 hidden sm:flex">
            @auth
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-yellow-50 uppercase text-xs md:text-base font-semibold px-2 py-2 md:px-3 md:py-2 border
                border-red-500 rounded-3xl bg-red-500 hover:bg-red-400 hover:border-red-400">Выйти</button>
                </form>
            @else
                <a href="{{ route('reservation.create') }}" class="text-yellow-50 uppercase text-xs md:text-base font-semibold px-2 py-2 md:px-3 md:py-2 border
            border-yellow-500 rounded-3xl bg-yellow-500 hover:bg-yellow-400 hover:border-yellow-400">Заказать столик</a>

                <a href="{{ route('login') }}" class="uppercase font-semibold text-xs md:text-base px-3 md:px-5 py-2 border
            border-yellow-500 rounded-3xl hover:bg-amber-400 hover:text-white">Кабинет</a>
            @endauth
        </div>


        <!--Иконка меню-->
        <div class="flex lg:hidden ">
            <nav id="nav"
                 class="absolute inset-x-0 bg-neutral-700 top-13 sm:top-14  border-b-1 hidden target:block peer ">
                <ul class="flex flex-col items-center gap-y-2 px-3 py-2">
                    <li class="w-full">
                        <a href="#menu" class="w-full inline-block font-bold text-center">Меню</a>
                    </li>
                    <li class="w-full">
                        <a href="#about" class="w-full inline-block font-bold text-center">О нас</a>
                    </li>
                    <li class="w-full">
                        <a href="#gelari" class="w-full inline-block font-bold text-center">Галерея</a>
                    </li>
                    <li class="w-full">
                        <a href="#footer" class="w-full inline-block font-bold text-center">Контакты</a>
                    </li>
                    <li class="w-full">
                        <a href="#" class=" w-full inline-block text-yellow-50 uppercase text-center text-xs  font-semibold px-2 py-2 border
                                        border-yellow-500 rounded-3xl bg-yellow-500   ">Заказать
                            столик</a>
                    </li>
                    <li class="w-full">
                        <a href="login.html" class="w-full inline-block uppercase text-center font-semibold text-xs py-2 border
                            border-yellow-500 rounded-3xl">Кабинет</a>
                    </li>
                </ul>
            </nav>

            <!--Кнопка открыть меню -->
            <a href="#nav" class="peer-target:hidden peer-target:[&+a]:block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                          d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                          clip-rule="evenodd"/>
                </svg>
            </a>
            <!--Кнопка закрыть меню -->
            <a href="" class="hidden ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                          d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                          clip-rule="evenodd"/>
                </svg>
            </a>


        </div>
    </div>
</header>
