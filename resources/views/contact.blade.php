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
    <body class="antialiased bg-gray-50 text-gray-900">
        <header class="py-4 w-full flex justify-between px-8 bg-white ">
            <div class="gap-x-1 flex items-center">
                <img src="{{ asset('img/lasu.png') }}" class="w-12 h-auto" alt="Logo">
                <h1 class="font-black text-4xl text-gray-900">Facility</h1>
            </div>
            <div class="flex gap-x-9 items-center">
                <a href="/" class="text-lg">Home</a>
                <a href="" class="text-lg">About</a>
                <a href="/contact" class="text-lg">Contact</a>
                <a href="" class="text-lg">Facilities</a>
                <a href="/login" class="text-lg py-3 px-7 font-bold bg-green-500 rounded-md text-white font-medium">Sign in</a>

            </div>
        </header>
        <main>
            <div class="px-12 mt-14">
                <h1 class="text-4xl mt-4 px-12 md:px-36 mb-1 font-extrabold">Got Any Questions</h1>
                <p class="text-lg  px-12 md:px-36 text-gray-600 mt-2">Kindly send your enquiries or complaints to us and we'll be more than happy happy to respond</p>
                <form action="" method="post" class="px-12 md:px-44 mt-12">
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
                <div class="flex justify-center mt-10 gap-x-6">
                    <a href="" class="text-md text-gray-600">Home</a>
                    <a href="" class="text-md text-gray-600">About</a>
                    <a href="" class="text-md text-gray-600">Contact</a>
                    <a href="" class="text-md text-gray-600">Brochure</a>
                </div>
                <div class="flex justify-center mt-6 gap-x-6">
                    <i class="fab text-3xl fa-facebook text-green-500"></i>
                    <i class="fab text-3xl fa-twitter text-green-500"></i>
                    <i class="fab text-3xl fa-instagram text-green-500"></i>
                </div>
            </div>
        </main>
    </body>
</html>
