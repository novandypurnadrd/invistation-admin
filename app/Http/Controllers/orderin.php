<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Model\Order;
use App\Model\Order_confirm;
use App\Model\Balance_in;

class orderin extends Controller
{
    public function show()
    {
    	$table = Order::all();
        
        $start="";
        $end="";
    	return view('order\table-orderin', ['table' => $table, 'start' => $start, 'end' => $end]);
    }

   public function confirmed($order_id)
    {

    	$table = Order::where('order_id',$order_id)->get()->first();

    	
    	return view('order\confirmed-order', ['table' => $table]);

    }


    public function update(Request $req, $order_id)
    {
      
       
        $table = DB::table('order')
                ->where('order_id', $order_id)
                    ->update(['status_pembayaran' => $req->status_pembayaran,
                              'created_at' => $req->tgl_assign,
                              'updated_at' => Carbon::now()]);

        if($req->status_pembayaran == "Confirmed"){


        $order = new Order_confirm;

        $order->order_id = $req->order_id;
        $order->level_order = $req->level_order;
        $order->type_order = $req->type_order;
        $order->deadline = $req->deadline;
        $order->costumer = $req->costumer;
        $order->price = $req->price;
        $order->status_order = "In-Active";
        $order->pic = "Unassign";
        $order->note = $req->note;
        $order->created_at = Carbon::now();
        $order->tema = $req->tema;
        $order->source = $req->source;
        $order->save();


        $in = new Balance_in;

        $in->order_id = $req->order_id;
        $in->produk = $req->type_order;
        $in->tgl_transaksi = Carbon::now();
        $in->total = $req->price;
        $in->bukti_transfer = $req->bukti_transfer;
        $in->save();

        }
      
       
        $table = Order::all();
    
       
        $start="";
        $end="";
        return view('order\table-orderin', ['table' => $table, 'start' => $start, 'end' => $end]);

    }


    public function view(Request $req)
    {

        $start_date = $req->start_date;
        $end_date = $req->end_date;

        $start = explode('/', $start_date)[2].'-'.explode('/', $start_date)[0].'-'.explode('/', $start_date)[1];
        $end = explode('/', $end_date)[2].'-'.explode('/', $end_date)[0].'-'.explode('/', $end_date)[1];

        $start = $start." 00:00:00";
        $end = $end." 23:59:59";
    

        $table = Order::whereBetween('created_at',array($start, $end ) )->get();
        
        return view('order\table-orderin', ['table' => $table, 'start' => $start_date, 'end' => $end_date]);

    }


    
}
