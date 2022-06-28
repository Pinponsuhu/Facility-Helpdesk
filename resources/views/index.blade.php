@extends('layouts.normal')
@section('content')
        <main>
            <object class="w-80 md:w-96 mx-auto mt-6" data="{{ asset('img/knowledge.svg') }}" type=""></object>
            <h1 class="font-black text-4xl md:text-7xl text-center mt-5">How can we help you?</h1>
            <p class="text-md md:text-lg text-center px-12 md:px-36 text-gray-600 mt-2">Through this platform to get trusted information(Prices and availability date) about the rental of Lagos State University(LASU) facilities</p>
            <div class="px-4 md:px-12">
                <h1 class="text-4xl mt-4 text-center mb-6 font-extrabold">Our Facilities</h1>
                <div id="facilities" class="md:grid-cols-2 lg:grid-cols-3 gap-y-4 grid gap-x-8 mb-20">
                    <div class="bg-white hover:shadow-md p-6">
                        <img src="{{ asset('img/main.jpeg') }}" class="h-64 md:h-80 w-full" alt="">
                        <h1 class="text-xl font-bold mt-2.5"><b>Hall Name: </b> Main Auditorium</h1>
                        <p class="text-md"><b>Capacity: </b> 1500</p>
                </div>
                    <div class="bg-white hover:shadow-md p-6">
                        <img src="{{ asset('img/mba.jpeg') }}" class="h-64 md:h-80 w-full" alt="">
                        <h1 class="text-xl font-bold mt-2.5"><b>Hall Name: </b> MBA Hall</h1>
                        <p class="text-md"><b>Capacity: </b> 800</p>
                </div>
                    <div class="bg-white hover:shadow-md p-6">
                        <img src="{{ asset('img/makan.jpeg') }}" class="h-64 md:h-80 w-full" alt="">
                        <h1 class="text-xl font-bold mt-2.5"><b>Hall Name </b> Makanjuola Theatre</h1>
                        <p class="text-md"><b>Capacity: </b> 500</p>
                </div>
            </div>
            <div>
                <h1 class="text-2xl md:text-4xl font-black text-center mt-4">Didn't find an answer?</h1>
                <p class="text-md md:text-lg text-center px-8 md:px-36 text-gray-600 mt-2">Get in touch with us for additional information on our facilities and pricing</p>
                <a href="" class="block w-36 py-3 rounded-md text-center mx-auto bg-green-500 text-white font-bold mt-5">Contact us</a>
            </div>
            <div>
                <div class="flex justify-center mt-10 gap-x-3 md:gap-x-6">
                    <a href="" class="text-md text-gray-600">Home</a>
                    <a href="" class="text-md text-gray-600">About</a>
                    <a href="" class="text-md text-gray-600">Contact</a>
                    <a href="" class="text-md text-gray-600">Brochure</a>
                    <a href="" class="text-md text-gray-600">Sign in</a>
                </div>
                <div class="flex justify-center my-6 gap-x-6">
                    <i class="fab text-3xl fa-facebook text-green-500"></i>
                    <i class="fab text-3xl fa-twitter text-green-500"></i>
                    <i class="fab text-3xl fa-instagram text-green-500"></i>
                </div>
            </div>
        </main>
@endsection
