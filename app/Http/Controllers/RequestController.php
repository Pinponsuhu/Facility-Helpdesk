<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\RequestReply;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function request_page(){
        $reqs = ModelsRequest::where('user_id',auth()->user()->id)->where('status','Active')->paginate(5);
        return view('outbox',['reqs' => $reqs]);
    }
    public function new_request(Request $request){
        $request->validate([
            'subject' => 'required',
            'message' => 'required'
        ]);

        $req = new ModelsRequest;
        $req->status = 'Active';
        $req->subject = $request->subject;
        $req->message = $request->message;
        $req->is_read = false;
        $req->request_id = "FAC" .  random_int(0000000,9999999);
        $req->user_id = auth()->user()->id;
        $req->save();
        return back();
    }

    public function req_det($id){
        $req = ModelsRequest::find($id);
        $replies = RequestReply::where('request_id',$req->id)->get();
        if($req->user_id != auth()->user()->id){
            abort(401);
        }
        return view('request-details',['req'=>$req,'replies' => $replies]);
    }

    public function reply_request(Request $request){
        $reply = $request->validate([
            'request_id' => 'required',
            'message' => 'required'
        ]);
        if(auth()->user()->is_admin == true){
            $request->validate([
                'status' => 'required'
            ]);
        }

        $reply = new RequestReply;
        $reply->request_id = $request->request_id;
        $reply->message = $request->message;
        $reply->sender_id = auth()->user()->id;
        $reply->is_read = false;
        $reply->save();

        if(auth()->user()->is_admin == true){
            $req = ModelsRequest::find($request->request_id);
            $req->status = $request->status;
            $req->save();
        }
        return redirect('/request/details/' . $request->request_id);
    }
}
