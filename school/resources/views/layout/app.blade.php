<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class>
    <div class="wrapper w-screen h-screen flex flex-row  bg-gray-800 text-gray-500">
        <div class="navbar w-1/4 p-20  font-medium text-white flex flex-col justify-between bg-gray-900">
            <h1 class="text-5xl h-1/4">AdminOptimal</h1>


            <div class="menu flex flex-col justify-between h-full">
                <h2 class="text-3xl ml-10">Tables:</h2>

                <div class="ml-20 links flex flex-col h-full text-2xl justify-evenly ">
                    <a class="hover:underline" href="{{ route('orders.index') }}">Orders</a>

                </div>

            </div>

        </div>
        <div class="conteiner w-full m-10 h-full pb-20 bg-gray-800">
            @yield('content')
        </div>
    </div>


    @vite('resources/js/app.js')
</body>
</html>
