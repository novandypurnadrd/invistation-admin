<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Model\Template_web;
use Response;
use Redirect;

class web extends Controller
{

    function checkcode($code){
        $exist = Template_web::where('kode_template','$code')->first();
        return $exist;

    }

    function generatecode(){
        $number = mt_rand(1000, 9999);

        $code = "W-".$number;

        if($this->checkcode($code)){
            return generatecode();
        }

        return $code;
    }

    public function add(Request $field)
    {
       

        $generate = $this->generatecode();

        
    	return view('Template\web-add')->with('generate',$generate);
    }


   public function insert(Request $field)
    {
    	$template = new Template_web;

    	$file = $field->file('filezip');
    	
    	$filename = $file->getClientOriginalName();
    	$field->file('filezip')->move("filetemplate/", $filename);

    	$photo = $field->file('preview');
    	
    	$photoname = $photo->getClientOriginalName();
    	$field->file('preview')->move("preview_web/", $photoname);


    	$template->kode_template = $field->template;
    	$template->nama_template = $field->namatemplate;
        $template->jenis = $field->jenis;
    	$template->harga_rupiah = $field->harga_rupiah;
    	$template->harga_promo = $field->harga_promo;
    	$template->url_demo = "http://".$field->urldemo;
    	$template->file = $filename;
    	$template->preview_template = $photoname;
    	$template->note = $field->note;
    	$template->save();

    	$generate = $this->generatecode();
  
    	return view('Template\web-add')->with('generate',$generate);
    }



   public function show()
    {
    	$table = Template_web::all();
    
    	return view('Template\web-list', ['table' => $table]);
    }


   public function delete($id)
    {
    	$hapus = Template_web::find($id);
    	$hapus->delete();


    	$table = Template_web::all();
    	return view('Template\web-list', ['table' => $table]);

    }


   public function edit($id)
    {
    	$table = Template_web::find($id);

    
    	return view('Template\web-update', ['table' => $table]);

    }


   public function update(Request $req, $id)
    {
        $table = Template_web::find($id);



        $table->kode_template = $req->template;
        $table->nama_template = $req->namatemplate;
        $table->jenis = $req->jenis;
        $table->harga_rupiah = $req->harga_rupiah;
        $table->harga_promo = $req->harga_promo;
        $table->url_demo = "http://".$req->urldemo;
        $table->note = $req->note;
        $table->save();

        $table = Template_web::all();

       
    
        return view('Template\web-list', ['table' => $table]);

    }



    public function downloadfile($file)
	{
    //PDF file is stored under project/public/download/info.pdf
	$filename = $file;
    $file= public_path(). "/filetemplate/$file";


    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file,$filename , $headers);
	}

    


   

    
}
