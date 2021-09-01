@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                The best reviews for your favourite games
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase"> 
                Read More
            </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
        <img src="https://cdn.pixabay.com/photo/2016/07/30/20/39/mario-1557974_960_720.jpg" width="700" alt="">
        </div>

        <div class ="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Want to know about the latest and greatest games?
            </h2>

            <p class="py-8 text-gray-500 text-s">
               We have the most honest and accurate reviews so you can decide whether a game is right for you or not!
            </p>

           

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-l font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>

        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
           Reviews of...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Triple A Titles
        </span>

        <span class="font-extrabold block text-4xl py-1">
            Indie Games
        </span>

        <span class="font-extrabold block text-4xl py-1">
            And More...
        </span>
    </div>

    

    @endsection 