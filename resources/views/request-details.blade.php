@extends('layouts.user')
@section('content')
        <main class="w-full h-full overflow-y-scroll md:px-6">
            @include('layouts.user-nav')
            <div class="px-4 md:px-0">
                <div class="bg-white mt-6  rounded-md">
                <section class="px-10 py-6 text-gray-900">
                    <div class="">
                        <div class="flex justify-between p-6 mb-2 rounded-md items-center">
                            <div>
                                <h1 class="text-2xl font-bold">{{ $req->subject }}</h1>
                                <p class="text-lg mt-2 font-medium text-gray-500">{{ $req->message }}</p>
                                @php
                                    $user = \App\Models\User::find($req->user_id)
                                @endphp
                                <p class="text-md"><b>Sent by:</b> {{ $user->surname . ' ' . $user->othernames }}</p>
                                <p class="text-sm text-gray-700 mt-1">{{ $req->created_at->format('d-m-Y H:i') }}</p>
                            </div>
                        </div>
                        <div class="px-6 mb-2">
                                @foreach($replies as $reply)
                                <div class="flex justify-between mb-2 rounded-md items-center">
                                    <div>
                                        <p class="text-lg mt-2 font-medium text-gray-500">{{ $reply->message }}</p>
                                        @php
                                            $user = \App\Models\User::find($reply->sender_id)
                                        @endphp
                                        <p class="text-md"><b>Sent by:</b> {{ $user->surname . ' ' . $user->othernames }}</p>
                                        <p class="text-sm text-gray-700 mt-1">{{ $reply->created_at->format('d-m-Y H:i') }}</p>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                    @if ($req->status == 'Active')
                    <div class="mt-6">
                        <span onclick="openRep()" class="bg-blue-500 cursor-pointer text-white font-bold rounded-md py-3 px-8">Reply</span>
                    </div>
                    @endif
                </section>
            </div>
            </div>
        </main>
        <section id="new-rep" hidden class="fixed top-0 left-0 bg-gray-900 bg-opacity-80 h-screen w-screen">
            <div class="p-6 bg-white mx-auto rounded-md w-80 md:w-96 mt-20">
                <div class="flex justify-end">
                    <i onclick="clsRep()" class="fa fa-times text-2xl"></i>
                </div>
                <div class="mt-2">
                    <h1 class="text-2xl font-bold mb-2">Send a reply</h1>
                    <hr>
                    <form action="/reply/request" class="mt-2" method="post">
                        @csrf
                        <input type="text" hidden name="user_id" value="{{ $req->user_id }}">
                        <input type="text" hidden name="request_id" value="{{ $req->id }}">
                        <label for="" class="text-md block mb-2 font-medium">Message</label>
                        <textarea rows="3" name="message" class="py-4 px-2 border-2 resize-none border-black block w-full  mb-3 outline-green-500"></textarea>
                        @if (auth()->user()->is_admin == true)
                            <label for="" class="text-md block mb-2 font-medium">Status</label>
                            <select name="status" id="">
                                <option value="" disabled selected>-- Change status --</option>
                                <option value="Active">Active</option>
                                <option value="Closed">Closed</option>
                            </select>
                        @endif
                        <button class="px-8 py-3 bg-green-500 rounded-md text-white text-medium">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    <script>
        function openRep(){
            document.getElementById('new-rep').removeAttribute("hidden");
        }
        function clsRep(){
            document.getElementById('new-rep').hidden = true;
        }
    </script>
@endsection
