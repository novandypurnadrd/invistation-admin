<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Model\Balance_in;
use App\Model\Balance_out;
use App\Model\Project_done;


class inout extends Controller
{
    public function showIn()
    {
    	$table = Balance_in::all();
    
        $start_date = "";
        $end_date = "";
    	return view('inout\in', ['table' => $table, 'start' => $start_date, 'end' => $end_date]);
    }


     function checkcode($code){
        $exist = Balance_out::where('balance_code','$code')->first();
        return $exist;

    }

    function generatecode($tujuan){
        $number = mt_rand(1000, 9999);

        if($tujuan == "Maintenance"){
        	$tuj = "M";
        }
        elseif ($tujuan == "Operasional"){
        	$tuj = "O";
        }
        elseif ($tujuan == "Template") {
        	$tuj = "T";
        }
        else{
        	$tuj = "OT";
        }

        $skrg = Carbon::Now();

        $tahun = Carbon::createFromFormat('Y-m-d H:i:s',$skrg)->year;

        $str_tahun = substr($tahun, 2);

        $bulan = Carbon::createFromFormat('Y-m-d H:i:s',$skrg)->month;


       
        $code = "P".$tuj.$bulan.$str_tahun.$number;
  

        if($this->checkcode($code)){
            return generatecode();
        }

        return $code;
    }

    public function add()
    {
        $balance_code = "";
    	return view('inout\out_add')->with('balance_code',$balance_code);
    }


     public function insertOut(Request $field)
    {
    	$out = new Balance_out;

    	

    	$photo = $field->file('bukti_transfer');
    	
    	$photoname = $photo->getClientOriginalName();
    	$field->file('bukti_transfer')->move("buktitransferoutbalance/", $photoname);


    	$balance_code = $this->generatecode($field->tujuan);

    	$out->balance_code = $balance_code;

    	$Date =  $field->tgl_transaksi;
		$tgl_transaksi = explode('/', $Date)[2].'-'.explode('/', $Date)[0].'-'.explode('/', $Date)[1];

    	$out->tgl_transaksi = $tgl_transaksi;
    	$out->tujuan = $field->tujuan;
    	$out->jml_transaksi = $field->jumlah_transaksi;
    	$out->bukti_transaksi = $photoname;
    	$out->keterangan = $field->keterangan;
    	$out->Save();
     
  		
    	return view('inout\out_add')->with('balance_code',$balance_code);
    }


    public function showOut()
    {
    	$table = Balance_out::all();

        $start_date="";
        $end_date="";
    
    	return view('inout\out_show', ['table' => $table, 'start' => $start_date, 'end' => $end_date]);
    }


    public function view(Request $req)
    {

        $start_date = $req->start_date;
        $end_date = $req->end_date;

        $start = explode('/', $start_date)[2].'-'.explode('/', $start_date)[0].'-'.explode('/', $start_date)[1];
        $end = explode('/', $end_date)[2].'-'.explode('/', $end_date)[0].'-'.explode('/', $end_date)[1];

        $start = $start." 00:00:00";
        $end = $end." 23:59:59";
    

        $table = Balance_in::whereBetween('tgl_transaksi',array($start, $end ) )->get();
        
        return view('inout\in', ['table' => $table, 'start' => $start_date, 'end' => $end_date]);

    }

     public function viewOut(Request $req)
    {

        $start_date = $req->start_date;
        $end_date = $req->end_date;

        $start = explode('/', $start_date)[2].'-'.explode('/', $start_date)[0].'-'.explode('/', $start_date)[1];
        $end = explode('/', $end_date)[2].'-'.explode('/', $end_date)[0].'-'.explode('/', $end_date)[1];

        $start = $start." 00:00:00";
        $end = $end." 23:59:59";
    

        $table = Balance_out::whereBetween('tgl_transaksi',array($start, $end ) )->get();
        
        return view('inout\out_show', ['table' => $table, 'start' => $start_date, 'end' => $end_date]);

    }


    public function openReport(){

        $start_date="";
        $end_date="";
        
        $balancein = Balance_in::sum('total');
        $balanceout = Balance_out::sum('jml_transaksi');
        $totalproject = Project_done::where('status_project','Final Finish')->count();
        $balance_web = Balance_in::where('produk','LIKE', '%web%')->sum('total');
        $balance_grafis = Balance_in::where('produk','LIKE', '%grafis%')->sum('total');
        $balance_video = Balance_in::where('produk','LIKE', '%video%')->sum('total');
        $balance_maintenance = Balance_out::where('tujuan','Maintenance')->sum('jml_transaksi');
        $balance_operasional = Balance_out::where('tujuan','Operasional')->sum('jml_transaksi');
        $balance_template = Balance_out::where('tujuan','Template')->sum('jml_transaksi');
        $balance_others = Balance_out::where('tujuan','Others')->sum('jml_transaksi');

        return view('inout\report', ['start' => $start_date, 'end' => $end_date, 'balancein'=>$balancein, 'balanceout'=>$balanceout, 'project' => $totalproject, 'balance_web'=>$balance_web, 'balance_grafis'=>$balance_grafis,'balance_video'=>$balance_video, 'balance_maintenance'=>$balance_maintenance, 'balance_operasional'=>$balance_operasional, 'balance_template'=>$balance_template, 'balance_others'=>$balance_others]);
    }


    public function report(Request $req){

        $start_date = $req->start_date;
        $end_date = $req->end_date;

        $start = explode('/', $start_date)[2].'-'.explode('/', $start_date)[0].'-'.explode('/', $start_date)[1];
        $end = explode('/', $end_date)[2].'-'.explode('/', $end_date)[0].'-'.explode('/', $end_date)[1];

        $start = $start." 00:00:00";
        $end = $end." 23:59:59";
    

       

        $balancein = Balance_in::whereBetween('tgl_transaksi',array($start,$end))->sum('total');
        $balanceout = Balance_out::whereBetween('tgl_transaksi',array($start,$end))->sum('jml_transaksi');

        $totalproject = Project_done::whereBetween('updated_at',array($start,$end))
                                                ->where('status_project','Final Finish')->count();

        $balance_web = Balance_in::whereBetween('tgl_transaksi',array($start,$end))
                                                ->where('produk','LIKE', '%web%')->sum('total');

        $balance_grafis = Balance_in::whereBetween('tgl_transaksi',array($start,$end))
                                                ->where('produk','LIKE', '%grafis%')->sum('total');

        $balance_video = Balance_in::whereBetween('tgl_transaksi',array($start,$end))
                                                ->where('produk','LIKE', '%video%')->sum('total');

        $balance_maintenance = Balance_out::whereBetween('tgl_transaksi',array($start,$end))
                                                ->where('tujuan','Maintenance')->sum('jml_transaksi');

        $balance_operasional = Balance_out::whereBetween('tgl_transaksi',array($start,$end))
                                                ->where('tujuan','Operasional')->sum('jml_transaksi');

        $balance_template = Balance_out::whereBetween('tgl_transaksi',array($start,$end))
                                                ->where('tujuan','Template')->sum('jml_transaksi');

        $balance_others = Balance_out::whereBetween('tgl_transaksi',array($start,$end))
                                                ->where('tujuan','Others')->sum('jml_transaksi');

        return view('inout\report', ['start' => $start_date, 'end' => $end_date, 'balancein'=>$balancein, 'balanceout'=>$balanceout, 'project' => $totalproject, 'balance_web'=>$balance_web, 'balance_grafis'=>$balance_grafis,'balance_video'=>$balance_video, 'balance_maintenance'=>$balance_maintenance, 'balance_operasional'=>$balance_operasional, 'balance_template'=>$balance_template, 'balance_others'=>$balance_others]);
        
       
    }



}
