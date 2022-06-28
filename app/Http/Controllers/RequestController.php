<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\RequestReply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RequestController extends Controller
{
    public function dashboard(){
        if(auth()->user()->is_admin == true){
            abort(401);
        }
        return view('dashboard');
    }
    public function request_page(){
        if(auth()->user()->is_admin == true){
            abort(401);
        }
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
        if(auth()->user()->is_admin == true){
            abort(401);
        }
        $req = ModelsRequest::find($id);
        // dd($req);
        $replies = RequestReply::where('request_id',$req->id)->get();
// dd($replies);
        if($req->user_id != auth()->user()->id){
            abort(401);
        }
        return view('request-details',['req'=>$req,'replies' => $replies]);
    }

    public function req_det_two($id){
        if(auth()->user()->is_admin == false){
            abort(401);
        }
        $req = ModelsRequest::find($id);
        // dd($req);
        $replies = RequestReply::where('request_id',$req->id)->where('sender_id',auth()->user()->id)->get();


        return view('request-details-two',['req'=>$req,'replies' => $replies]);
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
        if(auth()->user()->is_admin == false){
            return redirect('/request/details/' . $request->request_id);
        }
        return redirect('/admin/request/details/' . $request->request_id);
    }


    public function close_request(){

        if(auth()->user()->is_admin == true){
            abort(401);
        }
        $reqs = ModelsRequest::where('user_id',auth()->user()->id)->where('status','Closed')->paginate(5);
        return view('close',['reqs' => $reqs]);
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
    public function admin_dashboard(){
        $active_count = ModelsRequest::where('status','Active')->count();
        $cls_count = ModelsRequest::where('status','Closed')->count();
        return view('dashboard-two',['active_count'=> $active_count,'cls_count'=> $cls_count]);
    }
    public function admin_request_page(){
        // if(auth()->user()->is_admin == false){
        //     abort(401);
        // }
        $reqs = ModelsRequest::where('status','Active')->paginate(5);
        return view('request-two',['reqs' => $reqs]);
}
public function all_admin(){
    $admins = User::where('is_admin',true)->where('admin_per',false)->get();
    // dd($admins);
    return view('all-admin', ['admins'=>$admins]);
}

public function registering(Request $request){
    $request->validate([
        'surname' => 'required',
        'othernames' => 'required',
        'admin_per' => 'required',
        'email' => 'required|unique:users,email',
        'phone' => 'required|unique:users,phone|numeric|digits:11',
        'password' => 'required|confirmed',
    ]);
    $student = new User;
    $student->phone = $request->phone;
    $student->email = $request->email;
    $student->surname = $request->surname;
    $student->othernames = $request->othernames;
    $student->is_admin = true;
    if($request->admin_per == 'true'){
        $student->admin_per = true;
    }else{
        $student->admin_per = false;
    }
    $student->password = Hash::make($request->password);
    $student->save();

    return back();
}
}
