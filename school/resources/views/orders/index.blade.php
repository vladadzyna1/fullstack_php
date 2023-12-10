
@extends('layout.app')

@section('title', 'Вхід адмін панель')

@section('content')

    <br>
    <br>
    <h1 class="font-medium text-white text-5xl">Orders</h1>
    <br>
    <br>
    <h2 class="font-medium text-white text-3xl">Add new order:</h2>
    <br>
    <table>
        <thead class="text-xl text-gray-700 uppercase bg-gray-40 dark:bg-gray-600 dark:text-gray-400">
        <tr class="bg-white dark:bg-gray-800 dark:border-gray-600 ">
            <form class="update-form " action="{{route('orders.store')}}" method="POST">
                @csrf
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <select name="client_id" class="p-2 pl-8 pr-8 text-sm text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white">
                        <option value="">Оберіть клієнта</option>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->client_name }}</option>
                        @endforeach
                    </select>
                </th>
                <td class="px-6 py-4">
                    <input type="date" placeholder="order_date" class=" p-1.5 pl-8 text-sm text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white" name="order_date" >
                </td>
                <td class="px-6 py-4">
                    <input type="hidden" value="0" placeholder="total_order_quantity" class=" p-2 pl-8 text-sm text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white" name="total_order_quantity" >
                    <input type="hidden" value="0" placeholder="total_order_cost" class=" p-2 pl-6 pr-6 text-sm text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white" name="total_order_cost" >
                </td>
                </td>
                <td class="px-6 py-4">
                    <input type="date" placeholder="payment_date" class=" p-1.5 pl-8 text-sm text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white" name="payment_date" >
                </td>
                <td class="px-6 py-4">
                    <input type="text" placeholder="payment_amount" class=" p-2 pl-8 text-sm text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white" name="payment_amount" >
                </td>
                <td class="px-6 py-4">

                    <button type="submit" class="add-button font-medium text-green-600 dark:text-green-500 hover:underline">Add</button>

                </td>
            </form>
        </tr>
        </thead>
    </table>

    <div class="relative overflow-x-auto bg-gray-800">


        <br>
        <table class=" text-lg text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xm text-gray-700 uppercase bg-gray-40 dark:bg-gray-600 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-5 py-3">
                    client_id
                </th>
                <th scope="col" class="px-5 py-3">
                    order_date
                </th>
                <th scope="col" class="px-5 py-3">
                    total_order_quantity
                </th>
                <th scope="col" class="px-5 py-3">
                    total_order_cost
                </th>
                <th scope="col" class="px-5 py-3">
                    payment_date
                </th>
                <th scope="col" class="px-5 py-3">
                    payment_amount
                </th>
                <th scope="col" class="px-5 py-3">
                    Action
                </th>
                <th scope="col" class="px-5 py-3">
                    Delete
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr class="bg-white border-b dark:bg-gray-700 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-500">
                    <form class="update-form " action="{{ route('order.update', ['order' => $order->id]) }}" method="POST">
                        @csrf
                        @method('patch')
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <span class="view-mode">{{ $order->client->client_name }}</span>
                            <select name="client_id" class="edit-mode hidden p-2 pl-8 pr-8 text-sm text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white">
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}" @if($client->id == $order->client_id) selected @endif>{{ $client->client_name }}</option>
                                @endforeach
                            </select>
                        </th>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $order->order_date }}</span>
                            <input type="date" class="edit-mode hidden p-1.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white" name="order_date" value="{{ $order->order_date }}">
                        </td>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $order->total_order_quantity }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $order->total_order_cost }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $order->payment_date }}</span>
                            <input type="date" class="edit-mode hidden p-1.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white" name="payment_date" value="{{ $order->payment_date }}">
                        </td>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $order->payment_amount }}</span>
                            <input type="text" class="edit-mode hidden p-1.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white" name="payment_amount" value="{{ $order->payment_amount }}">
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="view-mode edit-button font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <button type="submit" class="save-button hidden font-medium text-green-600 dark:text-green-500 hover:underline">Save</button>

                        </td>

                    </form>
                    <td class="px-6 py-4">
                        <form class="delete-form " action="{{ route('order.delete', ['order' => $order->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button  font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
