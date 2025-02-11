@extends('layouts.guest')

@section('content')
    <section id="menu" class="pt-10 pb-30 font-[Tinos] bg-[url('../img/menu/menu-bg.png')] bg-scroll center bg-no-repeat">
        <div class="container flex flex-col justify-center items-center gap-5">
            <h2 class="text-4xl text-yellow-500 text-center">Меню</h2>

            <div class="flex justify-center border-t border-b border-yellow-500 w-full mb-5">
                <nav class="py-4">
                    <ul class="flex flex-wrap items-center justify-center gap-x-12 gap-y-4 text-xl">
                        <li>
                            <a href="{{ route('menu.index') }}" class="category-link">Все</a>
                        </li>
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('menu.category', $category->id) }}" class="category-link">{{ $category->name_category }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-8" id="cards-container">
                @foreach($menus as $menu)

                    <div class="flex flex-col sm:flex-row items-center text-center sm:text-start bg-neutral-700 text-white p-4 rounded-xl relative transition-transform duration-300 hover:-translate-y-3" data-category="{{ $menu->menuCategory->name_category }}">
                        <div class="w-40 h-40 rounded-full overflow-hidden">
                            <img src="{{ Storage::url($menu->img_menu) }}" alt="{{ $menu->title_menu }}" class="w-full h-full object-cover">
                        </div>
                        <div class="ml-4 flex-1 pr-5">
                            <h3 class="mt-2 mb-3 text-yellow-500 text-xl font-semibold">{{ $menu->title_menu }}</h3>
                            <p class="text-md text-gray-300">{{ $menu->body_menu }}</p>
                        </div>
                        <div class="absolute top-5 xs-left-10 sm:left-30 bg-black text-white text-sm font-bold px-4 py-1 rounded-full">
                            {{ $menu->price }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
