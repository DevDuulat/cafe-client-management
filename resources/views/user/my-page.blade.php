@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="text-center">
            <h3 class="text-2xl sm:text-4xl text-yellow-500  mb-3">Личный кабинет</h3>
        </div>

        <section id="menu" class="pt-20 pb-30 font-[Tinos]  bg-top bg-no-repeat">
            <h2 class="pb-12 text-4xl text-yellow-500 text-center">Мои бронирования</h2>
            <div class="container flex flex-wrap justify-center gap-5">
                @foreach ($reservations as $reservation)
                    <div class="p-4 border border-yellow-500 rounded-2xl max-w-[350px] w-full flex flex-col gap-4">
                        <div class="flex flex-col sm:flex-row justify-between items-center gap-y-5">
                            <div class="flex flex-col gap-2">
                                <p>Дата: {{ \Carbon\Carbon::parse($reservation->reservation_date)->format('d.m.Y') }}</p>
                                <p>Время: {{ $reservation->time }}</p>
                                <p>Количество: {{ $reservation->number_of_persons }} чел</p>
                                <p>Номер столика: {{ $reservation->table_number }}</p>
                            </div>
                            <hr class="block sm:hidden w-full text-yellow-500">
                            <div class="flex flex-col gap-2 items-center text-sm">
                                <p>Статус</p>
                                <div class="p-5 border border-yellow-500 rounded-2xl font-semibold">
                                    @if ($reservation->status === 'pending')
                                        <p class="text-yellow-500">В обработке</p>
                                    @elseif ($reservation->status === 'approved')
                                        <p class="text-green-500">Принят</p>
                                    @elseif ($reservation->status === 'rejected')
                                        <p class="text-red-600">Отклонен</p>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <button class="w-full bg-yellow-500 text-white font-semibold text-lg py-1 rounded-2xl">Отменить</button>
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <div class="container flex flex-col items-center justify-center pt-10 pb-20">
                <h2 class="text-2xl sm:text-4xl text-yellow-500 font-semibold mb-10">Мои отзывы</h2>

                <div class="flex justify-center items-center flex-wrap gap-5 w-full">
                    @foreach ($reviews as $review)
                        <div class="p-4 flex flex-col gap-3 max-w-[550px] w-full border border-yellow-500 rounded-3xl">
                            <div class="flex justify-between items-center gap-1 w-full">
                                <h4 class="text-2xl text-yellow-500">{{ $review->name }}</h4>
                                <p class="text-yellow-500">{{ $review->created_at->format('d.m.Y') }}</p>
                            </div>
                            <p>{{ $review->review }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
