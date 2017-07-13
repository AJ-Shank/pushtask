<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PushNotification;
use Illuminate\Support\Facades\Auth;

class PushNotifController extends Controller
{
  public function __construct(){
      echo "string";
      $this->middleware('auth');
 }

  public function store(Request $request){
    $data=$request->all();
    $entry = new PushNotification;
    $entry->user_id = Auth::id();
    $entry->device_type=1;
    $entry->pushKey=$data['pushDetails'];
    $entry->save();
    return response()->json(array('data'=>$entry,'status'=>'success'));
  }
  public function test(){
    echo Auth::id();
  }
}
