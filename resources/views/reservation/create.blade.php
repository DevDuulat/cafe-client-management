@extends('layouts.guest')

@section('content')
    <section class="relative bg-[url('https://github.com/TikhonovIvan/dip1/blob/main/img/bg-end.png?raw=true')] bg-cover bg-center bg-no-repeat flex items-start justify-center">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container py-15 sm:pt-5 z-10">
            @if (session('success'))
                <div class="bg-green-500 text-white p-3 rounded-lg text-center mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-500 text-white p-3 rounded-lg text-center mb-4">
                    {{ session('error') }}
                </div>
            @endif
            <div class="text-center">
                <h3 class="text-2xl sm:text-4xl text-yellow-500  mb-3">Сделать бронь столика</h3>
            </div>
            <div class="flex items-center justify-center">
                <form method="POST" action="{{ route('reservation.store') }}"
                      class="bg-opacity-50 p-6 sm:p-10 rounded-xl max-w-3xl w-full text-yellow-500"
                      x-data="reservationData()">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-lg mb-2 ">Имя</label>
                            <input type="text" name="name" placeholder="Укажите ваше имя"
                                   class="w-full border border-yellow-500 rounded-lg p-4 bg-transparent text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div>
                            <label class="block text-lg mb-2">Дата</label>
                            <input type="date" name="reservation_date" x-model="selectedDate"
                                   class="w-full border border-yellow-500 rounded-lg p-4 bg-transparent text-white focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                   :min="today()">
                        </div>

                        <div>
                            <label class="block text-lg mb-2">Телефон</label>
                            <input type="text" name="phone" value="{{ old('phone', '+996 ') }}"
                                   class="w-full border border-yellow-500 rounded-lg p-4 bg-transparent text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div>
                            <label class="block text-lg mb-2 ">Локация</label>
                            <input type="text" name="location" placeholder="Укажите адрес кафе"
                                   class="w-full border border-yellow-500 rounded-lg p-4 bg-transparent text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div>
                            <label class="block text-lg mb-2 ">Количество персон</label>
                            <input type="number" name="number_of_persons" value="1"
                                   class="w-full border border-yellow-500 rounded-lg p-4 bg-transparent text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div>
                            <label class="block text-lg mb-2 ">Номер столика</label>
                            <select name="table_number" x-model="selectedTable"
                                    class="w-full border border-yellow-500 rounded-lg p-4 bg-transparent text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                @for ($i = 1; $i <= 20; $i++)
                                    <option value="{{ $i }}">Столик {{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label class="block text-lg mb-2 ">Время</label>
                            <input type="hidden" name="time" x-model="selectedTime">
                            <div class="grid grid-cols-4 gap-4">
                                @foreach (['09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00'] as $time)
                                    <button type="button"
                                            class="time-button w-full p-3 border border-yellow-500 rounded-lg text-xl focus:outline-none"
                                            :class="isBooked('{{ $time }}') ? 'bg-red-500 text-white' : 'hover:bg-yellow-500 hover:text-black'"
                                            @click="setTime('{{ $time }}')">
                                        {{ $time }}
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label class="block text-lg mb-2">Пожелания</label>
                            <textarea name="wishes" placeholder="Укажите ваши пожелания"
                                      class="w-full border border-yellow-500 rounded-lg p-4 bg-transparent text-white focus:outline-none focus:ring-2 focus:ring-yellow-500 min-h-[100px]"></textarea>
                        </div>

                    </div>

                    <button type="submit" class="w-full bg-yellow-500 text-white text-xl py-4 rounded-lg mt-6">
                        Забронировать
                    </button>
                </form>

            </div>
        </div>
    </section>
@endsection

<script>
    function reservationData() {
        return {
            reservations: @json($reservations),
            selectedDate: '',
            selectedTable: '',
            selectedTime: '',


            isBooked(time) {
                const formattedTime = time.split(':')[0] + ':' + time.split(':')[1];
                const isSlotBooked = this.reservations.some(reservation =>
                    reservation.reservation_date === this.selectedDate &&
                    reservation.table_number == this.selectedTable &&
                    reservation.time === formattedTime
                );

                return isSlotBooked;
            },


            setTime(time) {

                if (!this.isBooked(time)) {
                    this.selectedTime = time;
                }
            }
        };
    }

</script>
<script>
    function today() {
        const date = new Date();
        const yyyy = date.getFullYear();
        let mm = date.getMonth() + 1;
        let dd = date.getDate();

        mm = mm < 10 ? '0' + mm : mm;
        dd = dd < 10 ? '0' + dd : dd;

        return `${yyyy}-${mm}-${dd}`;
    }
</script>
