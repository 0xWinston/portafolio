<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
        <title>PORTAFOLIO - @yield('titulo')</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

    <body class=" bg-red-700">
        <header class="p-5 shadow border-cyan-300 border-2  bg-red-900">
            <div class="container mx-auto flex justify-between items-center">
                <a class="text-3xl text-white" href="/">
                    PORTAFOLIO
                </a>

                @auth
                <nav class="flex gap-2 items-center">

                    <a class="flex items-center gap-2 bg-white border p-2 font-bold text-gray-600 rounded text-sm uppercase cursor-pointer"
                        href="{{route('posts.create')}}">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Agregar proyecto
                    </a>
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button class="flex items-center gap-2 bg-white border p-2 font-bold text-gray-600 rounded text-sm uppercase cursor-pointer" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                            Cerrar Sesión
                        </button>
                    </form>
                </nav>
                @endauth

                @guest
                <nav class="flex gap-2 items-center">
                    <a class="flex items-center gap-2 p-2 font-bold text-gray-100 text-sm uppercase cursor-pointer"
                        href="{{route('posts.proyectos')}}">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        PROYECTOS
                    </a>
                    <a class="flex items-center gap-2 p-2 font-bold text-gray-100 text-sm uppercase cursor-pointer"
                        href="/about">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                        INFO
                    </a>
                    <a class="p-2 font-bold text-gray-100 text-sm uppercase cursor-pointer"
                        href="{{ route('login') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                    </a>
                </nav>
                @endguest

            </div>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class=" text-white text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
        <footer class=" text-left p-5 text-gray-400 uppercase mt-10">
            wUrizar -  derechos reservados &copy; 2023
        </footer>
    </body>
</html>
