@extends('layouts.normal')
@section('content')
        <main>
            <div class="px-8 md:px-12">
                <h1 class="text-2xl md:text-4xl mt-4 px-3 md:px-36 mb-1 font-extrabold">Sign Up</h1>
                <p class="text-md md:text-lg  px-3 md:px-36 text-gray-600 mt-1">Already have an account? <a href="/login" class="text-green-500 underline">Sign In</a></p>
                <form action="/register" method="post" class="px-12 md:px-44 mt-12">
                    @csrf
                    <label for="" class="text-md block mb-4 @error('email') text-red-500  @enderror font-medium">Email Address @error('email')<br> <b>Error:</b> {{ $message }}  @enderror</label>
                    <input value="{{ old('email') }}" type="email" name="email" class="py-4 px-2 border-2 border-black @error('email') border-red-500  @enderror block w-full  mb-8 outline-green-500">
                    <label for="" class="text-md block mb-4 @error('surname') text-red-500  @enderror font-medium">Surname @error('surname')<br> <b>Error:</b> {{ $message }}  @enderror</label>
                    <input value="{{ old('surname') }}" type="text" name="surname" class="py-4 px-2 border-2 @error('surname') border-red-500  @enderror border-black block w-full  mb-8 outline-green-500">
                    <label for="" class="text-md block mb-4 @error('othernames') text-red-500  @enderror font-medium">Othernames @error('othernames')<br> <b>Error:</b> {{ $message }}  @enderror</label>
                    <input value="{{ old('othernames') }}" type="text" name="othernames" class="py-4 px-2 border-2 @error('othernames') border-red-500  @enderror border-black block w-full  mb-8 outline-green-500">
                    <label for="" class="text-md block mb-4 @error('phone') text-red-500  @enderror font-medium">Phone Number @error('phone')<br> <b>Error:</b> {{ $message }}  @enderror</label>
                    <input value="{{ old('phone') }}" type="text" name="phone" class="py-4 px-2 border-2 border-black block w-full @error('phone') border-red-500  @enderror mb-8 outline-green-500">
                    <label for="" class="text-md block mb-4 @error('password') text-red-500  @enderror font-medium">Password @error('password')<br> <b>Error:</b> {{ $message }}  @enderror</label>
                    <input type="password" name="password" class="py-4 px-2 border-2 border-black block w-full @error('password') border-red-500  @enderror mb-8 outline-green-500">
                    <label for="" class="text-md block mb-4 @error('password') text-red-500  @enderror font-medium">Confirm Password @error('password')<br> <b>Error:</b> {{ $message }}  @enderror</label>
                    <input type="password" name="password_confirmation" class="py-4 px-2 border-2 border-black block w-full @error('password') border-red-500  @enderror mb-8 outline-green-500">
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
