@extends('layouts.app')

@section('titulo')
    INFORMACION PERSONAL
@endsection

@section('contenido')
    <section class="container mx-auto mt-10">
        <div class="text-center text-white text-base border-2 border-cyan-300 rounded ">

            <div class="flex justify-evenly">
                <div class="flex gap-3 items-center p-3">
                    <img src="{{asset('img/user.jpeg')}}" alt="Yo" height="300px" width="300px">
                </div>

                <div class="flex flex-col">
                    <div>
                        <h1 class="my-3 p-3 font-bold">
                            WINSTON ALEXANDER<br>
                            URIZAR MARROQUIN
                        </h1>
                    </div>
                    <div>
                        <p class="my-3 p-3">
                            Estudiante de Licenciatura en Tecnología de Sistemas Informáticos.<br>
                            Busco formar parte de una organización en donde pueda crecer<br>
                            profesionalmente, contribuir significativamente en el área de tecnología<br>
                            y destacarme en el campo laboral por medio de mis conocimientos técnicos y<br>
                            mi disposición de aportar soluciones.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center p-3 text-white">
            <h1 class="px-3 font-bold bg-red-900">INFORMACION ACADEMICA</h1>
            <ul class="p-3">
            <li>Licenciatura en Tecnología de Sistemas Informáticos UVG Campus Sur,2022 a la fecha actual.</li>
            <li>Técnico Universitario en Informática UVG Campus Sur, 2019 a 2021.</li>
            <li> Bachiller en Ciencias y Letras con Orientaciòn en Computaciòn LETE, 2016 a 2017 .</li>
            </ul>
        </div>
                    <!--bloque final -->
        <div class="flex justify-evenly">
            <!--Informacion de contacto -->
            <div class="text-center text-white text-base rounded mt-3">
                <div class="flex flex-col gap-3 items-center p-3 bg-red-900">
                    <h1 class="font-bold">CONTACTO</h1>
                    <p class="mb-3 px-3">
                        <ul>
                            <li>Teléfono: 32418720</li>
                            <li>--Correo electrónico--</li>
                            <li><a href="mailto:winston.urizar@gmail.com">winston.urizar@gmail.com</a></li>
                        </ul>
                </div>
            </div>

            <!--Informacion de skills -->
            <div class="text-left p-3">
                <h1 class="px-3 text-center font-bold bg-red-900 text-white">SKILLS</h1>
                <div class="p-3">
                    <div class="flex mb-6 justify-between text-white">
                        <ul>
                            <li class="font-bold">Lenguajes de programación</li>
                            <li>C++</li>
                            <li>JavaScript</li>
                            <li>TypeScript</li>
                            <li>PHP</li>
                        </ul>
                        <ul class="ml-4">
                            <li class="font-bold">DevWeb</li>
                            <li>HTML 5</li>
                            <li>CSS</li>
                            <li>Angular</li>
                        </ul>
                        <ul class="ml-4">
                            <li class="font-bold">Bases de datos</li>
                            <li>My Sql</li>
                            <li>Diagrama de flujo BD</li>
                        </ul>
                        <ul class="ml-4">
                            <li class="font-bold">Gestión de versiones</li>
                            <li>Git</li>
                            <li>Github</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
