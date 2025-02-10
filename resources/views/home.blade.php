@extends('layouts.guest')

@section('content')
    <section class="h-screen relative bg-cover bg-center bg-no-repeat flex items-center justify-center overflow-hidden"
             style="background-image: url('https://github.com/TikhonovIvan/dip1/blob/main/img/hero_bg2.jpg?raw=true');">
        <div class="absolute top-1/2 -right-30 transform -translate-y-1/2  w-1/2 hidden sm:block">
            <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/rectangle.png?raw=true" alt="Rectangle">
        </div>
        <div class="absolute inset-0 bg-black opacity-40 "></div>
        <div class="container ml-0  flex flex-col sm:items-start  justify-start text-center lg:ml-50 z-1  ">
            <div class="-mt-50 sm:mt-0">
                <h2 class="text-[35px] sm:text-[40px] text-yellow-500 font-[Tinos] mb-1 sm:-mb-5 ">
                    Добро пожаловать в
                </h2>
                <h1 class="text-[50px] sm:text-[60px] md:text-[90px] text-yellow-500 font-[Tinos]">
                    Наше кафе
                </h1>
                <div class="flex items-center justify-center gap-4 text-center ">
                    <span class="relative before:content-[''] before:block before:w-[31px] sm:before:w-[61px] before:h-[2px] before:bg-white"></span>
                    <span class="text-sm sm:text-lg font-semibold uppercase">Дом лучшей еды</span>
                    <span class="relative after:content-[''] after:block after:w-[31px]  sm:after:w-[61px] after:h-[2px] after:bg-white"></span>
                </div>
            </div>
        </div>
    </section>

    <div class="relative">
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5  absolute top-2/3 sm:top-1/2
    left-0 right-0 transform -translate-y-1/3 sm:-translate-y-1/3 justify-center place-items-center ">
            <article
                class="max-w-[350px] w-full h-full pt-10 pb-5 px-5  gap-y-4 bg-neutral-700 flex flex-col
      items-center text-center transition-transform duration-300 hover:-translate-y-3">
                <header>
                    <img src="https://raw.githubusercontent.com/TikhonovIvan/dip1/def5c2ff610f30bfedf0320d3cb9c88da9116cd8/img/mask.svg" alt="" class="mx-auto">
                    <h3 class="text-xl sm:text-2xl">Магическая <span class="text-yellow-500">Атмосфера</span></h3>
                </header>
                <p class="w-60 text-center text-lg sm:text-xl">В нашем заведении царит магическая атмосфера, наполненная
                    вкусными ароматами
                </p>
            </article>
            <article class="max-w-[350px]  w-full  h-full pt-10 pb-5 px-5   gap-y-4 bg-neutral-700 flex
      flex-col items-center text-center transition-transform duration-300 hover:-translate-y-3">
                <header>
                    <img src="https://raw.githubusercontent.com/TikhonovIvan/dip1/def5c2ff610f30bfedf0320d3cb9c88da9116cd8/img/mask.svg" alt="" class="mx-auto">
                    <h3 class="text-xl sm:text-2xl">Лучшее качество <span class="text-yellow-500">Еды</span></h3>
                </header>
                <p class="w-60 text-center text-lg sm:text-xl">Качество нашей <br> Еды - отменное!</p>
            </article>
            <article class="max-w-[350px] w-full   h-full pt-10 pb-5 px-5  gap-y-4 bg-neutral-700 flex
      flex-col items-center text-center transition-transform duration-300 hover:-translate-y-3 sm:col-span-3 md:col-span-1 ">
                <header>
                    <img src="https://raw.githubusercontent.com/TikhonovIvan/dip1/def5c2ff610f30bfedf0320d3cb9c88da9116cd8/img/mask.svg" alt="" class="mx-auto">
                    <h3 class="text-xl sm:text-2xl">Незабываемый <span class="text-yellow-500">Вкус</span></h3>
                </header>
                <p class="w-60 text-center text-lg sm:text-xl">Наши повара готовят <br> Удивительно вкусные блюда</p>
            </article>
        </div>
    </div>

    <section class="pb-10" id="about">
        <div class=" container mt-140 sm:mt-100 md:mt-60 flex flex-col md:flex-row gap-y-4 justify-center  md:justify-between ">
            <div class="flex flex-col items-center justify-center gap-4 ">
                <h2 class="text-2xl sm:text-4xl mt-10 mb-4 text-center">
                    Наша
                    <span class="text-yellow-500">История</span>
                </h2>
                <p class="max-w-[450px] w-full text-center text-md sm:text-xl">Как и у любого другого самобытного места,
                    у нас есть своя,
                    особая
                    история. Идея ресторана пришла
                    основателям неожиданно. Во время прогулки по лесу создатель нашего ресторана застрял в сотнях
                    километров от ближайшего населенного пункта. Вдали от цивилизации и связи им пришлось на время
                    обустраивать себе нехитрый быт, добывать и готовить себе еду.
                </p>
                <div class="mt-10 sm:mt-20 flex items-center  justify-center gap-10 ">
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <h4 class="text-4xl text-yellow-500">
                            93
                        </h4>
                        <p class="text-xl">Напитки</p>
                    </div>
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <h4 class="text-4xl text-yellow-500">
                            206
                        </h4>
                        <p>Еда</p>
                    </div>
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <h4 class="text-4xl text-yellow-500">
                            71
                        </h4>
                        <p>Закуски</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/history.png?raw=true" alt="">
            </div>
        </div>
    </section>

    <section class="relative pt-20 pb-28 bg-cover bg-center bg-no-repeat"
             style="background-image: url('https://github.com/TikhonovIvan/dip1/blob/main/img/bg_02.png?raw=true');">
        <!-- Затемнение -->
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="container  relative flex flex-col gap-y-6 md:gap-0 md:flex-row items-center justify-between ">
            <div class="w-full text-center md:w-2/4">
                <h3 class="text-3xl sm:text-5xl mb-8 text-yellow-500 font-[Tinos] tracking-wider">
                    Отпразднуйте в одном из
                    самых лучших ресторанов.
                </h3>
                <p class="text-xl font-bold ">Только в этом месяце бизнес-ланч от 2000 сом </p>
            </div>
            <div>
                <a href="{{ route('reservation.create') }}"
                   class="text-white bg-yellow-500 px-4 py-2 rounded-2xl uppercase font-semibold hover:bg-yellow-700 ">Заказ
                    столик</a>
            </div>
        </div>
    </section>
    <section id="menu" class="pt-20 pb-30 font-[Tinos] bg-cover bg-bottom bg-no-repeat"
             style="background-image: url('https://github.com/TikhonovIvan/dip1/blob/main/img/menu/menu-bg.png?raw=true');">
        <div class="container flex flex-col justify-center items-center gap-10 ">
            <h2 class="pb-12 text-4xl text-yellow-500 text-center">Блюда</h2>
            <div class=" flex justify-between gap-10 ">
                <div class=" hidden lg:grid grid-cols-2 grid-rows-3 gap-3 w-[555px]  h-[1100px] ">
                    <!-- Первая картинка (верхняя, большая, на 2 колонки) -->
                    <div class="col-span-2">
                        <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/menu/menu-1.png?raw=true" alt="" class="w-[555px] h-full ">
                    </div>
                    <!-- Вторая картинка (левая, маленькая) -->
                    <div class="col-span-1 row-span-1">
                        <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/menu/menu-2.png?raw=true" alt="" class="w-[332px]  h-full ">
                    </div>
                    <!-- Третья картинка (2 строки, 1 колонка) -->
                    <div class="col-span-1 row-span-2">
                        <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/menu/menu-3.png?raw=true" alt="" class="w-full h-full ">
                    </div>
                    <!-- Четвёртая картинка (пересекается с 3 картинкой, но стоит в третьей строке первой колонки) -->
                    <div class="col-span-1 row-start-3">
                        <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/menu/menu-4.png?raw=true" alt="" class="w-[332px] h-full ">
                    </div>
                </div>
                <div class="flex flex-col  gap-y-18">
                    <div class="flex  flex-col sm:flex-row items-center text-center   sm:text-start bg-neutral-700 text-white
          p-4 rounded-xl relative  ">
                        <!-- Изображение блюда -->
                        <div class="w-40 h-40 rounded-full overflow-hidden">
                            <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/menu/dish-1.png?raw=true" alt="" class="w-full h-full object-cover">
                        </div>
                        <!-- Контент (название и описание) -->
                        <div class="ml-4  flex-1 pr-5">
                            <h3 class="mt-2 mb-3 text-yellow-500 text-xl font-semibold">Лумпия с соусом</h3>
                            <p class="text-md text-gray-300">
                                Начинка из свиного фарша, обжаренного с луком, морковью и другими овощами
                            </p>
                        </div>
                        <!-- Цена -->
                        <div class="absolute top-5 xs-left-10 sm:left-30   bg-black text-white text-sm font-bold px-4 py-1 rounded-full">
                            3500
                        </div>
                    </div>
                    <div class="flex  flex-col sm:flex-row items-center text-center   sm:text-start bg-neutral-700 text-white
          p-4 rounded-xl relative  ">
                        <!-- Изображение блюда -->
                        <div class="w-40 h-40 rounded-full overflow-hidden">
                            <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/menu/dish-1.png?raw=true" alt="" class="w-full h-full object-cover">
                        </div>
                        <!-- Контент (название и описание) -->
                        <div class="ml-4  flex-1 pr-5">
                            <h3 class="mt-2 mb-3 text-yellow-500 text-xl font-semibold">Лумпия с соусом</h3>
                            <p class="text-md text-gray-300">
                                Начинка из свиного фарша, обжаренного с луком, морковью и другими овощами
                            </p>
                        </div>
                        <!-- Цена -->
                        <div class="absolute top-5 xs-left-10 sm:left-30   bg-black text-white text-sm font-bold px-4 py-1 rounded-full">
                            3500
                        </div>
                    </div>
                    <div class="flex  flex-col sm:flex-row items-center text-center   sm:text-start bg-neutral-700 text-white
          p-4 rounded-xl relative  ">
                        <!-- Изображение блюда -->
                        <div class="w-40 h-40 rounded-full overflow-hidden">
                            <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/menu/dish-1.png?raw=true" alt="" class="w-full h-full object-cover">
                        </div>
                        <!-- Контент (название и описание) -->
                        <div class="ml-4  flex-1 pr-5">
                            <h3 class="mt-2 mb-3 text-yellow-500 text-xl font-semibold">Лумпия с соусом</h3>
                            <p class="text-md text-gray-300">
                                Начинка из свиного фарша, обжаренного с луком, морковью и другими овощами
                            </p>
                        </div>
                        <!-- Цена -->
                        <div class="absolute top-5 xs-left-10 sm:left-30   bg-black text-white text-sm font-bold px-4 py-1 rounded-full">
                            3500
                        </div>
                    </div>
                    <div class="flex  flex-col sm:flex-row items-center text-center   sm:text-start bg-neutral-700 text-white
          p-4 rounded-xl relative  ">
                        <!-- Изображение блюда -->
                        <div class="w-40 h-40 rounded-full overflow-hidden">
                            <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/menu/dish-1.png?raw=true" alt="" class="w-full h-full object-cover">
                        </div>
                        <!-- Контент (название и описание) -->
                        <div class="ml-4  flex-1 pr-5">
                            <h3 class="mt-2 mb-3 text-yellow-500 text-xl font-semibold">Лумпия с соусом</h3>
                            <p class="text-md text-gray-300">
                                Начинка из свиного фарша, обжаренного с луком, морковью и другими овощами
                            </p>
                        </div>
                        <!-- Цена -->
                        <div class="absolute top-5 xs-left-10 sm:left-30   bg-black text-white text-sm font-bold px-4 py-1 rounded-full">
                            3500
                        </div>
                    </div>
                    <div class="hidden md:block md- text-center">
                        <a href="{{ route('reservation.create') }}"

                        class="text-white bg-yellow-500 px-4 py-2 rounded-2xl uppercase font-semibold hover:bg-yellow-700 ">Заказ
                            столик</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-cover bg-bottom bg-no-repeat"
             style="background-image: url('https://github.com/TikhonovIvan/dip1/blob/main/img/bg-slider.png?raw=true');">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="w-full relative">
            <div class="swiper default-carousel swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class=" h-96 flex justify-center items-center text-white">
                            <div class="text-center px-4">
                                <p class="text-sm md:text-lg font-semibold mb-4 mx-auto max-w-[700px] w-full  italic">
                                    Вид из ресторана потрясающий, интерьер необычный, еда отличная, обслуживание
                                    отличное,
                                    понравились закуски и десерт, утка с картошкой была восхитительна, все отлично дома
                                    в Мексике
                                    я не встречал таких отменных заведений, однозначно рекомендую.
                                </p>
                                <div class="flex flex-col items-center ">
                                    <img class="w-16 h-16 rounded-full mr-4 " src="https://github.com/TikhonovIvan/dip1/blob/main/img/user-1.png?raw=true" alt="User Avatar">
                                    <div>
                                        <p class="text-xl font-semibold">Имя пользователя</p>
                                        <p class="text-md text-gray-400 mb-4">Город, страна</p>
                                        <a href="review.html" class="bg-yellow-500 py-2 px-5 rounded-3xl">Оставить свой отзыв</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class=" h-96 flex justify-center items-center text-white">
                            <div class="text-center px-4 ">
                                <p class="text-sm md:text-lg font-semibold mb-4 mx-auto max-w-[700px] w-full  italic">
                                    Вид из ресторана потрясающий, интерьер необычный, еда отличная, обслуживание
                                    отличное,
                                    понравились закуски и десерт, утка с картошкой была восхитительна, все отлично дома
                                    в Мексике
                                    я не встречал таких отменных заведений, однозначно рекомендую.
                                </p>
                                <div class="flex flex-col items-center ">
                                    <img class="w-16 h-16 rounded-full mr-4 " src="https://github.com/TikhonovIvan/dip1/blob/main/img/user-1.png?raw=true" alt="User Avatar">
                                    <div>
                                        <p class="text-xl font-semibold">Имя пользователя</p>
                                        <p class="text-md text-gray-400 mb-4">Город, страна</p>
                                        <a href="review.html" class="bg-yellow-500 py-2 px-5 rounded-3xl">Оставить свой отзыв</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class=" h-96 flex justify-center items-center text-white">
                            <div class="text-center px-4">
                                <p class="text-sm md:text-lg font-semibold mb-4 mx-auto max-w-[700px] w-full  italic">
                                    Вид из ресторана потрясающий, интерьер необычный, еда отличная, обслуживание
                                    отличное,
                                    понравились закуски и десерт, утка с картошкой была восхитительна, все отлично дома
                                    в Мексике
                                    я не встречал таких отменных заведений, однозначно рекомендую.
                                </p>
                                <div class="flex flex-col items-center ">
                                    <img class="w-16 h-16 rounded-full mr-4 " src="https://github.com/TikhonovIvan/dip1/blob/main/img/user-1.png?raw=true" alt="User Avatar">
                                    <div>
                                        <p class="text-xl font-semibold">Имя пользователя</p>
                                        <p class="text-md text-gray-400 mb-4">Город, страна</p>
                                        <a href="review.html" class="bg-yellow-500 py-2 px-5 rounded-3xl">Оставить свой отзыв</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section id="gelari" class="py-5 sm:py-10">
        <div class="container text-center">
            <h3 class="text-4xl mb-10 ">
                Галерея
                <span class="text-yellow-500">Блюд</span>
            </h3>
            <div class="grid grid-cols-2 grid-rows-4 md:grid-cols-4 md:grid-rows-2 gap-4">
                <div class="col-span-2">
                    <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/gallery/i1.png?raw=true" alt="" class="w-full h-auto object-cover">
                </div>
                <div>
                    <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/gallery/i2.png?raw=true" alt="" class="w-full h-auto object-cover">
                </div>
                <div>
                    <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/gallery/i3.png?raw=true" alt="" class="w-full h-auto object-cover">
                </div>
                <div>
                    <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/gallery/i4.png?raw=true" alt="" class="w-full h-auto object-cover">
                </div>
                <div>
                    <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/gallery/i5.png?raw=true" alt="" class="w-full h-auto object-cover">
                </div>
                <div class="col-span-2">
                    <img src="https://github.com/TikhonovIvan/dip1/blob/main/img/gallery/i6.png?raw=true" alt="" class="w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-cover bg-center bg-no-repeat h-screen"
             style="background-image: url('https://github.com/TikhonovIvan/dip1/blob/main/img/bg-end.png?raw=true');">
    </section>


@endsection
