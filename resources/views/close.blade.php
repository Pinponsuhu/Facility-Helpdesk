@extends('layouts.user')
@section('content')
        <main class="w-full h-full overflow-y-scroll md:px-6">
            @include('layouts.user-nav')
            <div class="px-4 md:px-0">
                <div class="bg-white mt-6  rounded-md">
                <section class="px-10 py-12 text-gray-900">
                    <div class="flex justify-between items-center mb-4">
                        <div>
                            <h1 class="text-2xl mb-4 font-bold">All Active Request</h1>
                            <a href="/request" class="px-8 py-3 bg-green-500 text-white font-bold rounded-md">Active Request</a>
                        </div>
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
                            @if ($req->is_read == false || $rep_c > 1)
                            <div>
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            </div>
                            @endif
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
        @endsection