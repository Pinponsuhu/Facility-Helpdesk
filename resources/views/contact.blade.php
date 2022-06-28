@extends('layouts.normal')
@section('content')
        <main>
            <div class="px-8 md:px-12 mt-14">
                <h1 class="text-2xl md:text-4xl mt-4 px-3 md:px-36 mb-1 font-extrabold">Got Any Questions</h1>
                <p class="text-md md:text-lg px-3 md:px-36 text-gray-600 mt-2">Kindly send your enquiries or complaints to us and we'll be more than happy happy to respond</p>
                <form action="" method="post" class="px-3 md:px-44 mt-12">
                    @csrf
                    <label for="" class="text-md block mb-4 font-medium">Name</label>
                    <input type="text" class="py-4 px-2 border-2 border-black block w-full  mb-8 outline-green-500">
                    <label for="" class="text-md block mb-4 font-medium">Email</label>
                    <input type="email" class="py-4 px-2 border-2 border-black block w-full  mb-8 outline-green-500">
                    <label for="" class="text-md block mb-4 font-medium">Subject</label>
                    <input type="text" class="py-4 px-2 border-2 border-black block w-full  mb-8 outline-green-500">
                    <label for="" class="text-md block mb-4 font-medium">Message</label>
                    <textarea rows="6" class="py-4 px-2 border-2 resize-none border-black block w-full  mb-8 outline-green-500"></textarea>
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
@endsection
