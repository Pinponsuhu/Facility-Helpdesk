@extends('layouts.user')
@section('content')
        <main class="w-full h-full overflow-y-scroll md:px-6">
            @include('layouts.user-nav')
            <div class="px-4 md:px-0">
                <div class="bg-white mt-6  rounded-md">
                <section class="px-10 py-12 text-gray-900">
                    <div class="flex flex-col md:justify-between md:flex-row md:items-center mb-4">
                        <div class="mb-4 md:mb-0">
                            <h1 class="text-xl md:text-2xl mb-4 font-bold">All Active Request</h1>
                            <a href="/close/request" class="px-8 py-3 bg-red-500 text-white font-bold rounded-md">Closed Request</a>
                        </div>
                        <span onclick="openReq()" class="bg-green-500 py-3 px-8 rounded-md font-bold text-md md:text-lg cursor-pointer text-white flex w-48 gap-x-1 items-center">New request <i class="fa fa-plus"></i></span>
                    </div>
                    <hr>
                    <div class="mt-6">
                       @foreach ($reqs as $req)
                       @php
                            $rep_c = \App\Models\RequestReply::where('sender_id',$req->id)->where('request_id',$req->id)->where('is_read',false)->count();
                            // print_r($rep_c);
                       @endphp
                       <a href="/request/details/{{ $req->id }}">
                        <div class="flex justify-between p-6 hover:bg-gray-100 mb-2 rounded-md items-center">
                            <div>
                                <h1 class="text-lg font-bold">{{ $req->subject }}</h1>
                                <p class="text-md font-medium text-gray-500">{{ Str::limit($req->message, 18, '...') }}</p>
                                <p class="text-sm text-gray-20">{{ $req->created_at->format('d-m-Y') }}</p>
                            </div>
                            <div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                        </div>
                    </a>
                       @endforeach
                    </div>
                </section>
                <div class="flex p-4 justify-end mt-2">
                    <div>{{ $reqs->links() }}</div>
                </div>
            </div>
        </div>
        </main>
        <section id="new-req" hidden class="fixed top-0 left-0 bg-gray-900 bg-opacity-80 h-screen w-screen">
            <div class="p-6 bg-white mx-auto rounded-md w-80 md:w-96 mt-20">
                <div class="flex justify-end">
                    <i onclick="clsReq()" class="fa fa-times text-2xl"></i>
                </div>
                <div class="mt-2">
                    <h1 class="text-2xl font-bold mb-2">Create New Request</h1>
                    <hr>
                    <form action="/new/request" class="mt-2" method="post">
                        @csrf
                        <input type="text" hidden name="user_id" value="{{ auth()->user()->id }}">
                        <label for="" class="text-md block mb-2 font-medium">Subject</label>
                        <input type="text" name="subject" class="py-4 px-2 border-2 border-black block w-full  mb-3 outline-green-500">
                        <label for="" class="text-md block mb-2 font-medium">Message</label>
                        <textarea rows="3" name="message" class="py-4 px-2 border-2 resize-none border-black block w-full  mb-3 outline-green-500"></textarea>
                        <button class="px-8 py-3 bg-green-500 rounded-md text-white text-medium">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    <script>
        function openReq(){
            document.getElementById('new-req').removeAttribute("hidden");
        }
        function clsReq(){
            document.getElementById('new-req').hidden = true;
        }
    </script>
@endsection
