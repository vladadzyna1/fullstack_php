
@extends('layout.app')

@section('title', 'Реєстрація')

@section('content')
    <div class="">
        <div class="flex flex-col items-center justify-center h-full w-full px-10 pb-40 lg:pt-20 lg:flex-row ">
            <div class="relative z-10 w-full max-w-xl mt-20 lg:mt-0 lg:w-5/12">
                <div class="relative z-10 flex flex-col items-start justify-start p-10 bg-white shadow-2xl rounded-xl">
                    <h1 class="w-full text-center text-4xl font-medium leading-snug">Registration</h1>
                    <h2 class="w-full text-center text-1.5xl font-medium leading-snug">create your account</h2>
                    <form action="{{route('register_process')}}" method="post" class="relative w-full mt-6 space-y-8">
                        @csrf
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white"> Name</label>
                            <input name="name" type="text" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="first name">
                        </div>
                        @error('name')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Email Address</label>
                            <input name="email" type="text" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="example@email.com">
                        </div>
                        @error('email')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Password</label>
                            <input name="password" type="password" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="password">
                        </div>
                        @error('password')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                        <div class="relative">
                            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black" placeholder="password">
                        </div>
                        @error('password_confirmation')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                        <div class="relative">
                            <button type="submit" class="inline-block w-full px-5 py-4 text-xl font-medium text-center text-white transition duration-200 bg-neutral-800 rounded-lg hover:bg-neutral-600 ease">Register</button>
                        </div>
                        <h2 class="w-full text-center text-1.5xl font-medium leading-snug">You already have an account?
                            <a class="text-xl underline text-blue-700 hover:text-blue-600" href="/login">Log in</a></h2>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
