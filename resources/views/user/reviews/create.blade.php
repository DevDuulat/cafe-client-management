@extends('layouts.app')

@section('content')
    <section
        class="relative bg-[url('{{ asset('img/bg-end.png') }}')] bg-cover bg-center bg-no-repeat flex items-start justify-center">
        <div class="absolute inset-0 bg-black opacity-40"></div>

        <div class="container py-15 sm:pt-5 z-10">
            <div class="text-center">
                <h3 class="text-2xl sm:text-4xl text-yellow-500 font-semibold mb-3">Оставить отзыв</h3>
                <p class="text-xl sm:text-2xl text-yellow-50">
                    Уважаемые посетители и клиенты нашего кафе. <br>
                    Мы очень рады, что вы оставляете положительные и теплые отзывы.
                </p>
            </div>

            <div class="flex mt-10">
                <div class="fixed top-5 left-1/2 transform -translate-x-1/2 w-full max-w-md z-50">
                    @if (session('success'))
                        <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg text-center text-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-500 text-white p-4 rounded-lg shadow-lg text-center text-lg mt-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>


                <form action="{{ route('review.store') }}" method="post" class="flex flex-col items-start gap-4 w-full">
                    @csrf
                    <div class="flex flex-col gap-1 w-full">
                        <label for="name" class="text-xl">Имя</label>
                        <input id="name" type="text" name="name" placeholder="Введите ваше имя"
                               class="border border-yellow-500 px-6 sm:px-15 py-2 rounded-xl max-w-[350px]" required>
                    </div>
                    <div class="flex flex-col gap-1 w-full">
                        <label for="email" class="text-xl">Email</label>
                        <input id="email" type="email" name="email" placeholder="Введите ваш email"
                               class="border border-yellow-500 px-6 sm:px-15 py-2 rounded-xl max-w-[350px]" required>
                    </div>
                    <div class="flex flex-col gap-1 w-full">
                        <label for="review" class="text-xl">Отзыв</label>
                        <textarea name="review" id="review" placeholder="Напишите ваш отзыв"
                                  class="border border-yellow-500 rounded-xl w-full h-40 p-2" required></textarea>
                    </div>
                    <button type="submit"
                            class="mt-4 mb-4 text-lg bg-yellow-500 font-semibold text-yellow-50 px-15 py-2 rounded-xl">
                        Оставить отзыв
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
