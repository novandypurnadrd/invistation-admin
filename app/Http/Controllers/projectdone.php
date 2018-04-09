<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Model\Project_done;

class projectdone extends Controller
{
    public function show()
    {
    	$table = Project_done::all();

        $start="";
        $end="";
        return view('project\table-projectdone', ['table' => $table, 'start' => $start, 'end' => $end]);
    }


    public function edit($project_id)
    {

    	$table = Project_done::where('project_id',$project_id)->get()->first();

    	
    	return view('project\finish-project', ['table' => $table]);

    }

    public function update(Request $req, $project_id)
    {
      
       
        $table = DB::table('project_done')
                ->where('project_id', $project_id)
                    ->update(['status_project' => $req->status_project,
                			  'url' => $req->url,
                			  'notepic' => $req->notepic,
                              'created_at' => $req->tgl_assign,
                              'updated_at' => Carbon::now()]);

       
        $table = Project_done::all();
    
        $start="";
        $end="";
        return view('project\table-projectdone', ['table' => $table, 'start' => $start, 'end' => $end]);

    }


    public function view(Request $req)
    {

        $start_date = $req->start_date;
        $end_date = $req->end_date;

        $start = explode('/', $start_date)[2].'-'.explode('/', $start_date)[0].'-'.explode('/', $start_date)[1];
        $end = explode('/', $end_date)[2].'-'.explode('/', $end_date)[0].'-'.explode('/', $end_date)[1];

        $start = $start." 00:00:00";
        $end = $end." 23:59:59";
    

        $table = Project_done::whereBetween('created_at',array($start, $end ) )->get();
        
        return view('project\table-projectdone', ['table' => $table, 'start' => $start_date, 'end' => $end_date]);

    }

    
}
