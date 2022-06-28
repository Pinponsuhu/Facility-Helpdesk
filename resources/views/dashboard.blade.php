
        @extends('layouts.user')
        @section('content')
        <main class="w-full h-full overflow-y-scroll md:px-6">
            @include('layouts.user-nav')
                <div class="px-4 md:px-0">
                    <div class="bg-white mt-6  rounded-md">
                    <section class="px-10 py-12 text-gray-900">
                        <h1 class="text-xl md:text-3xl font-bold">Welcome {{ auth()->user()->surname . ' ' . auth()->user()->othernames }}</h1>
                        <object data="{{ asset('img/contact.svg') }}" class="md:w-4/12 w-8/12 mx-auto mt-12" type=""></object>
                       <div class="flex mt-8 justify-center">
                        <a href="/request" class="text-white py-3 px-8 bg-green-500 rounded-md font-bold">Ask Us</a>
                       </div>
                    </section>
                </div>
                </div>
        </main>
      @endsection
