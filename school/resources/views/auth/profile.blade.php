
@extends('layout.app')

@section('title', 'Stylist page')

@section('content')
    <div style=" background-image: url('/images/auth-bg.png'); background-size: cover; background-repeat: no-repeat;" class="">
        <br>
        @include('partials.header')
        <br>
    </div>

    <div class="info m-14 ml-24 text-xl">
        <p class="text-2xl m-3">Інформація про користувача</p>
        <p class="text-xl m-3 ml-5">Прізвище та ім'я: {{$user->first_name}} {{$user->last_name}}</p>
        <p class="text-xl m-3 ml-5">Пошта: {{$user->email}}</p>

        <button type="button" class=" ml-10 mt-6 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Редагувати дані</button>

    </div>




    <h2 class="text-center text-3xl mb-4">Історія записів</h2>

    <hr class="w-3/5 m-auto ">

    <div class="relative overflow-x-auto w-3/5 m-auto mt-4 mb-24">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-4 pt-3 pb-3 pl-7 pr-7">Сервіс</th>
                <th class="px-6 py-4 pt-3 pb-3 pl-7 pr-7">Стиліст</th>
                <th class="px-6 py-4 pt-3 pb-3 pl-7 pr-7">Дата</th>
                <th class="px-6 py-4 pt-3 pb-3 pl-7 pr-7">Статус</th>
                <th class="px-6 py-4 pt-3 pb-3 pl-7 pr-7">Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appointments as $appointment)
                <tr class="bg-white border-b text-gray-900 p-5">
                    <td class="px-6 py-4">{{$appointment->service->service_name}}</td>

                    <td class="px-6 py-4">{{$appointment->stylist->first_name}} {{$appointment->stylist->last_name}}</td>

                    <td class="px-6 py-4">{{$appointment->appointment_date}}</td>

                    <td class="px-6 py-4">{{$appointment->status->title}}</td>
                    <td class="px-6 py-4">
                        <form action="{{route('appointment.delete',['appointment' => $appointment->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Відмінити запис</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>







    @include('partials.footer')
@endsection
