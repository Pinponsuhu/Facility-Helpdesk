<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/all.js') }}"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased h-screen bg-gray-50 flex text-gray-900">
        <nav class="bg-green-500 text-white w-28 h-screen">
                <img src="{{ asset('img/lasu.png') }}" class="w-12 block z-40" alt="">
                <ul class="flex flex-col mt-12 gap-y-5">
                    <li class="mb-4 py-3 text-white hover:bg-white hover:text-green-500 w-full"><a href="/admin/dashboard" class="flex flex-col gap-y-2 items-center justify-center"><i class="fa fa-chart-pie  fa-2x"></i><span class="text-md block text-center font-bold">Dashboard</span></a></li>
                    <li class="mb-4 py-3 text-white hover:bg-white hover:text-green-500 w-full"><a href="/admin/request" class="flex flex-col gap-y-2 items-center justify-center"><i class="fa fa-paper-plane fa-2x"></i><span class="text-md block text-center font-bold">Requests</span></a></li>
                    <li class="mb-4 py-3 text-white hover:bg-white hover:text-green-500 w-full"><a href="/all/admin" class="flex flex-col gap-y-2 items-center justify-center"><i class="fa fa-user-shield fa-2x"></i><span class="text-md block text-center font-bold">Admins</span></a></li>
                    <li class="mb-4 py-3 text-white hover:bg-white hover:text-green-500 w-full"><a href="/logout" class="flex flex-col gap-y-2 items-center justify-center"><i class="fa fa-power-off fa-2x"></i><span class="text-md block text-center font-bold">Logout</span></a></li>
                </ul>
        </nav>
        <main class="w-full h-full overflow-y-scroll px-6">
                <section class="py-5 mt-3 bg-white text-4xl font-black text-gray-900 px-10">
                    <h1>LASU Facility helpdesk</h1>
                </section>
                <div class="bg-white mt-6 rounded-md">
                <section class="px-10 py-6 text-gray-900">
                    <div class="flex justify-between items-center">
                        <h1 class="text-2xl text-green-500 font-bold">All Admins</h1>
                        <span onclick="openReq()" class="text-white cursor-pointer bg-green-500 py-2.5 px-8 rounded-md font-bold">Add Admin</span>
                    </div>
                    <hr class="mt-3">
                    <div class="mt-6">
                        @foreach ($admins as $admin)
                            <div class="mb-3 hover:bg-gray-100 rounded-md px-8 py-3 flex justify-between">
                                <div>
                                    <h1 class="text-xl font-bold text-green-500">{{ $admin->surname . ' ' . $admin->othernames }}</h1>
                                    <p class="text-md text-gray-600 mt-0.5">{{ $admin->email }}</p>
                                </div>
                                <div class="flex items-center gap-x-5">
                                    <a href="" class="text-white block h-11 w-28 text-center font-bold text-md bg-green-500 py-3 px-8 rounded-md">Edit</a>
                                    <a href="" class="text-white block h-11 w-28 text-center font-bold text-md bg-red-500 py-3 px-8 rounded-md">Delete</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                </div>
        </main>
    </body>
    <div id="new-req" hidden class="fixed overflow-y-scroll top-0 left-0 w-screen h-screen bg-white">
        <div class="flex items-center px-12 md:px-44 mt-10 justify-between">
            <h1 class="text-2xl font-bold text-green-500">Add New Admin</h1>
            <i onclick="clsReq()" class="fa fa-times text-3xl text-green-500"></i>
        </div>
        <form action="/add/admin" method="post" class="px-12 grid grid-cols-2 mb-36 gap-x-10 md:px-44 mt-8">
            @csrf
            <div>
                <label for="" class="text-md block mb-2 @error('email') text-red-500  @enderror font-medium">Email Address @error('email')<br> <b>Error:</b> {{ $message }}  @enderror</label>
            <input value="{{ old('email') }}" type="email" name="email" class="py-4 px-2 border-2 border-black @error('email') border-red-500  @enderror block w-full  mb-4 outline-green-500">
            </div>
            <div>
                <label for="" class="text-md block mb-2 @error('surname') text-red-500  @enderror font-medium">Surname @error('surname')<br> <b>Error:</b> {{ $message }}  @enderror</label>
            <input value="{{ old('surname') }}" type="text" name="surname" class="py-4 px-2 border-2 @error('surname') border-red-500  @enderror border-black block w-full  mb-4 outline-green-500">
            </div>
            <div>
                <label for="" class="text-md block mb-2 @error('othernames') text-red-500  @enderror font-medium">Othernames @error('othernames')<br> <b>Error:</b> {{ $message }}  @enderror</label>
            <input value="{{ old('othernames') }}" type="text" name="othernames" class="py-4 px-2 border-2 @error('othernames') border-red-500  @enderror border-black block w-full  mb-4 outline-green-500">
            </div>
            <div>
                <label for="" class="text-md block mb-2 @error('phone') text-red-500  @enderror font-medium">Phone Number @error('phone')<br> <b>Error:</b> {{ $message }}  @enderror</label>
            <input value="{{ old('phone') }}" type="text" name="phone" class="py-4 px-2 border-2 border-black block w-full @error('phone') border-red-500  @enderror mb-4 outline-green-500">
            </div>
            <div>
                <label for="" class="text-md block mb-2 @error('admin_per') text-red-500  @enderror font-medium">Admin Permission @error('admin_per')<br> <b>Error:</b> {{ $message }}  @enderror</label>
            <select  name="admin_per" class="py-4 px-2 border-2 border-black block w-full @error('phone') border-red-500  @enderror mb-4 outline-green-500">
                <option value="" selected disabled>-- Adding Admin Permission --</option>
                <option value="true">Yes</option>
                <option value="false">No</option>
            </select>
            </div>
            <div>
                <label for="" class="text-md block mb-2 @error('password') text-red-500  @enderror font-medium">Password @error('password')<br> <b>Error:</b> {{ $message }}  @enderror</label>
            <input type="password" name="password" class="py-4 px-2 border-2 border-black block w-full @error('password') border-red-500  @enderror mb-4 outline-green-500">
            </div>
            <div>
                <label for="" class="text-md block mb-2 @error('password') text-red-500  @enderror font-medium">Confirm Password @error('password')<br> <b>Error:</b> {{ $message }}  @enderror</label>
            <input type="password" name="password_confirmation" class="py-4 px-2 border-2 border-black block w-full @error('password') border-red-500  @enderror mb-4 outline-green-500">
            </div>
            <button class="px-8 py-3 w-32 col-span-2 bg-green-500 rounded-md text-white text-medium">Submit</button>
        </form>
    </div>
    <script>
        function openReq(){
            document.getElementById('new-req').removeAttribute("hidden");
        }
        function clsReq(){
            document.getElementById('new-req').hidden = true;
        }
    </script>
</html>