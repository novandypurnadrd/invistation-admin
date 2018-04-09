<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Mail;

use App\Model\Order_confirm;
use App\Model\Project_waiting;
use App\Model\User;

class orderconfirmed extends Controller
{
    public function show()
    {
    	
    
    	$table = Order_confirm::all();
    
    	$start="";
        $end="";
        return view('order\table-orderconfirmed', ['table' => $table, 'start' => $start, 'end' => $end]);
    }


    public function edit($order_id)
    {
    	$table = Order_confirm::where('order_id',$order_id)->get()->first();

        $tbl_user = User::all();
      
    	return view('order\activate-order', ['table' => $table, 'tbl_user' => $tbl_user]);
    }


    public function update(Request $req, $order_id)
    {
      
       
        $table = DB::table('order_confirm')
                ->where('order_id', $order_id)
                    ->update(['status_order' => $req->status_order,
                              'updated_at' => Carbon::now(),
                              'pic' => $req->pic]);

        if($req->status_order == "Active"){


        
        $data = ['order_id'=>$req->order_id,'level_project'=>$req->level_order,'type_project'=>$req->type_order];
        Mail::send('emails.email-assignto',$data, function($pesan) {
            $pesan->to('novandypurnadrd@gmail.com', 'Invistation.com')->subject('Project has assign to you.');
        });


        $project = new Project_waiting;
        $project->project_id = $req->order_id;
        $project->level_project = $req->level_order;
        $project->type_project = $req->type_order;
        $project->deadline = $req->deadline;
        $project->pic = $req->pic;
        $project->tema = $req->tema;
        $project->source = $req->source;
        $project->note = $req->note;
        $project->created_at = Carbon::now();
        $project->status_project = "Not Accept";
        $project->save();


       

        }
      
       
        $table = Order_confirm::all();
    
        $start="";
        $end="";
        return view('order\table-orderconfirmed', ['table' => $table, 'start' => $start, 'end' => $end]);

    }

     public function view(Request $req)
    {

        $start_date = $req->start_date;
        $end_date = $req->end_date;

        $start = explode('/', $start_date)[2].'-'.explode('/', $start_date)[0].'-'.explode('/', $start_date)[1];
        $end = explode('/', $end_date)[2].'-'.explode('/', $end_date)[0].'-'.explode('/', $end_date)[1];

        $start = $start." 00:00:00";
        $end = $end." 23:59:59";
    

        $table = Order_confirm::whereBetween('created_at',array($start, $end ) )->get();
        
        return view('order\table-orderconfirmed', ['table' => $table, 'start' => $start_date, 'end' => $end_date]);

    }
    
}
