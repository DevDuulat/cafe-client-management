@extends('layouts.guest')

@section('content')
    <section class="relative bg-[url('https://github.com/TikhonovIvan/dip1/blob/main/img/bg-end.png?raw=true')] bg-cover bg-center bg-no-repeat flex items-start justify-center">
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="container py-15 sm:pt-5 z-10">
            <div class="text-center">
                <h3 class="text-2xl sm:text-4xl text-yellow-500 font-semibold mb-3">Сделать бронь столика</h3>
            </div>
            <div class="flex items-center justify-center">
                <form method="POST" action="{{ route('reservation.store') }}" class="bg-opacity-50 p-6 sm:p-10 rounded-xl max-w-3xl w-full text-yellow-500">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-1">Имя</label>
                            <input type="text" name="name" placeholder="Укажите ваше имя" class="w-full border border-yellow-500 rounded-lg p-3 bg-transparent text-white">
                        </div>
                        <div>
                            <label for="date-input" class="block mb-1">Дата</label>
                            <div class="relative">
                                <input id="date-input" type="date" name="reservation_date" class="w-full border border-yellow-500 rounded-lg p-3 bg-transparent text-white">
                                <button type="button" onclick="document.getElementById('date-input').showPicker()"
                                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-yellow-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                                        <path d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 16H5V10h14z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-1">Телефон</label>
                            <input type="text" name="phone" placeholder="+996 (...)" class="w-full border border-yellow-500 rounded-lg p-3 bg-transparent text-white">
                        </div>

                        <div>
                            <label class="block mb-1">Локация</label>
                            <input type="text" name="location" placeholder="Укажите адрес кафе" class="w-full border border-yellow-500 rounded-lg p-3 bg-transparent text-white">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block mb-1">Количество персон</label>
                                <div class="relative w-full">
                                    <input type="number" name="number_of_persons" value="1" class="custom-number-input w-full border border-yellow-500 rounded-lg p-3 bg-transparent text-white pr-10">
                                    <div class="custom-arrows"></div>
                                </div>
                            </div>
                            <div>
                                <label for="table_number" class="block mb-1">Номер столика</label>
                                <div class="relative w-full">
                                    <input id="table_number" type="number" name="table_number" value="1" class="custom-number-input w-full border border-yellow-500 rounded-lg p-3 bg-transparent text-white pr-10">
                                    <div class="custom-arrows"></div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-1">Время</label>
                            <!-- Скрытое поле для хранения выбранного времени -->
                            <input type="hidden" name="time" id="time" value="10:00">

                            <div class="grid grid-cols-4 gap-2">
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='09:00'">
                                    9:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg bg-yellow-500 text-black"
                                        onclick="document.getElementById('time').value='10:00'">
                                    10:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='11:00'">
                                    11:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='12:00'">
                                    12:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='13:00'">
                                    13:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='14:00'">
                                    14:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='15:00'">
                                    15:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='16:00'">
                                    16:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='17:00'">
                                    17:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='18:00'">
                                    18:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='19:00'">
                                    19:00
                                </button>
                                <button type="button"
                                        class="time-button p-1 sm:p-2 border border-yellow-500 rounded-lg hover:bg-yellow-500 hover:text-black"
                                        onclick="document.getElementById('time').value='20:00'">
                                    20:00
                                </button>
                            </div>

                        </div>

                        <div class="sm:col-span-2">
                            <label class="block mb-1">Пожелания</label>
                            <textarea name="wishes" placeholder="Укажите ваши пожелания" class="w-full border border-yellow-500 rounded-lg p-3 bg-transparent text-white min-h-[100px]"></textarea>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-yellow-500 text-white font-semibold text-xl py-3 rounded-lg mt-4">
                        Забронировать
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
