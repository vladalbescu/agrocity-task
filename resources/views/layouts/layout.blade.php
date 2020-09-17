<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Task Firme</title>
    </head>
    <body class="bg-gray-300 lg:flex pb-10">
        <nav class="fixed top-0 flex md:block w-full lg:h-screen lg:w-2/12 bg-white px-8 lg:pl-16 py-4 lg:py-10">
            <a href="/"><div class="text-blue-600 text-2xl font-semibold lg:mb-20">Task Firme</div></a>
            <ul class="flex md:block items-center ml-auto">
                {{-- <li class="text-md font-semibold text-gray-700 lg:mb-3 hover:text-blue-700 mr-5 lg:mr-0"><a href="/">Dashboard</a></li> --}}
                <li class="text-md font-semibold text-gray-700 lg:mb-3 hover:text-blue-700 mr-5 lg:mr-0"><a href="/companies">Vezi firme</a></li>
                <li class="text-md font-semibold text-gray-700 lg:mb-3 hover:text-blue-700"><a href="/companies/create">Adaugă firmă</a></li>
            </ul>
        </nav>
        <div class="mx-auto mt-24 md:w-11/12 xl:w-10/12">
            <main class="mx-2 lg:ml-48 xl:ml-64">
                {{-- Content --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>
