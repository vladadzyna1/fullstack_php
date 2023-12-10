
@extends('layout.app')

@section('title', 'Вхід адмін панель')

@section('content')

    <br>
    <h1 class="font-medium text-white text-5xl">Clients</h1>
    <br>
    <div class="relative overflow-x-auto bg-gray-800">
        <br>
        <br>
        <br>
        <table class=" w-full  text-lg text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xl text-gray-700 uppercase bg-gray-40 dark:bg-gray-600 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Client_name
                </th>
                <th scope="col" class="px-6 py-3">
                    Client_identification
                </th>
                <th scope="col" class="px-6 py-3">
                    Ciscount_percentage
                </th>
                <th scope="col" class="px-6 py-3">
                    Cayment_terms_days
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr class="bg-white border-b dark:bg-gray-700 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-500">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $client-> client_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $client-> client_identification }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $client-> discount_percentage }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $client-> payment_terms_days }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('client.edit',$client->client_id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
