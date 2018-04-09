<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Model\Project_onprogres;
use App\Model\Project_done;

class projectonprogres extends Controller
{
    public function show()
    {

    	$table = Project_onprogres::all();


    	$start="";
        $end="";
        return view('project\table-projectonprogres', ['table' => $table, 'start' => $start, 'end' => $end]);
    }

    public function edit($project_id)
    {

    	$table = Project_onprogres::where('project_id',$project_id)->get()->first();

    	
    	return view('project\done-project', ['table' => $table]);

    }


    public function update(Request $req, $project_id)
    {
      
       
        $table = DB::table('project_onprogres')
                ->where('project_id', $project_id)
                    ->update(['status_project' => $req->status_project,
                              'created_at' => $req->tgl_assign,
                              'updated_at' => Carbon::now()]);

        if($req->status_project == "Finish"){


        $project = new Project_done;
        $project->project_id = $req->project_id;
        $project->level_project = $req->level_project;
        $project->type_project = $req->type_project;
        $project->deadline = $req->deadline;
        $project->pic = $req->pic;
        $project->tema = $req->tema;
        $project->source = $req->source;
        $project->note = $req->note;
        $project->status_project = "Finish-(Waiting Approval)";
        $project->url = $req->url;
        $project->notepic = $req->notepic;
        $project->save();
        }
      
       
        $table = Project_onprogres::all();
    
        $start="";
        $end="";
        return view('project\table-projectonprogres', ['table' => $table, 'start' => $start, 'end' => $end]);

    }


     public function view(Request $req)
    {

        $start_date = $req->start_date;
        $end_date = $req->end_date;

        $start = explode('/', $start_date)[2].'-'.explode('/', $start_date)[0].'-'.explode('/', $start_date)[1];
        $end = explode('/', $end_date)[2].'-'.explode('/', $end_date)[0].'-'.explode('/', $end_date)[1];

        $start = $start." 00:00:00";
        $end = $end." 23:59:59";
    

        $table = Project_onprogres::whereBetween('created_at',array($start, $end ) )->get();
        
        return view('project\table-projectonprogres', ['table' => $table, 'start' => $start_date, 'end' => $end_date]);

    }

    
}
