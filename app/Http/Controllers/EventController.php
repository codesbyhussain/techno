<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    
    public function detail($id)
    {
        $data = Event::find($id);
        return view('detailEvent', ['event' => $data]);
    }

    
    function enroll(Request $req){

        if(Session::has('user')){
        $userId=Session::get('user')['id'];
        $order = new Order;
        $order->event_id=$req->id;
        $order->user_id=$userId; 
        $order->save();

    return redirect("/events");
    }
    else{
        return redirect("/login");
    }
    }

    function disenroll($id){
        Order::destroy($id);
        return redirect("/enrolled");
    }

    function myevents(){
        
        $userId=Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('events','orders.event_id','=','events.id')
        ->select('events.*','orders.id as order_id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myevents',[
            'orders'=>$orders
        ]);
    }
}
