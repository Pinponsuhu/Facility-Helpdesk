@extends('layouts.normal')
@section('content')
        <main>
            <div class="px-8 md:px-12">
                <h1 class="text-2xl md:text-4xl mt-4 px-3 md:px-36 mb-1 font-extrabold">Sign In</h1>
                <p class="text-md md:text-lg  px-3 md:px-36 text-gray-600 mt-1">Don't have an account? <a href="/register" class="text-green-500 underline">Sign Up</a></p>
                <form action="/login" method="post" class="px-3 md:px-44 mt-12">
                    @csrf
                    <label for="" class="text-md block mb-4 font-medium">Email Address</label>
                    <input type="text" name="email" class="py-4 px-2 border-2 border-black block w-full  mb-8 outline-green-500">
                    <label for="" class="text-md block mb-4 font-medium">Password</label>
                    <input type="password" name="password" class="py-4 px-2 border-2 border-black block w-full  mb-6 outline-green-500">
                    <div class="mb-4 flex items-center gap-x-4">
                        <input type="checkbox" name="remember_me" id="">
                        <label for="" class="text-md font-bold">Remember me</label>
                    </div>
                    <button class="px-8 py-3 bg-green-500 rounded-md text-white text-medium">Submit</button>
                </form>
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
        @if (Session('msg'))
        <div id="msg" class="fixed p-4 top-10 right-2 bg-green-500 w-8/12 text-white flex justify-between">
            <p class="text-lg">{{ Session('msg') }}</p>
        </div>
        @endif
    <script>
        setTimeout(() => {
            document.getElementById('msg').hidden = true;
        }, 2000);
    </script>
@endsection
