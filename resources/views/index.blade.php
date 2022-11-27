<!--Pagina Index-->
@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Querés ser tu propio jefe?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Leer más
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://preview.redd.it/m0zhfbiq61v21.png?auto=webp&s=a33df442f3a83d062e777faba8dcf9466a438b77" width="700" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Te cuesta ser mejor?
            </h2>
            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            </p>
            <p class="font-extrabold text-gray-600 text-l pb-9">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Conocé más
            </a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            Soy un experto en...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            PHP
        </span>
        <span class="font-extrabold block text-4xl py-1">
            SQL
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Javascript
        </span>
        <span class="font-extrabold block text-4xl py-1">
            CSS
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Entradas recientes
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Quo aperiam ducimus sint explicabo officiis ut fuga atque 
                    aliquid facere. Facere qui atque recusandae eos assumenda, 
                    culpa dicta officiis inventore expedita.
                </h3>
                <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100
                text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Conoce mas
                </a>
            </div>
        </div>
        <div>
            <img src="https://preview.redd.it/m0zhfbiq61v21.png?auto=webp&s=a33df442f3a83d062e777faba8dcf9466a438b77" width="700" alt="">
        </div>
    </div>
@endsection