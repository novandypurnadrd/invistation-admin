<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Model\Template_grafis;
use Response;
use Redirect;

class grafis extends Controller
{

    function checkcode($code){
        $exist = Template_grafis::where('kode_template','$code')->first();
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

        
    	return view('Template\grafis-add')->with('generate',$generate);
    }



     public function insert(Request $field)
    {
    	$template = new Template_grafis;

    	$file = $field->file('filezip');
    	
    	$filename = $file->getClientOriginalName();
    	$field->file('filezip')->move("filetemplategrafis/", $filename);

    	$photo = $field->file('preview');
    	
    	$photoname = $photo->getClientOriginalName();
    	$field->file('preview')->move("preview_grafis/", $photoname);


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
  
    	return view('Template\grafis-add')->with('generate',$generate);
    }



     public function show()
    {
    	$table = Template_grafis::all();
    	return view('Template\grafis-list',['table'=>$table]);
    }


     public function delete($id)
    {
    	$hapus = Template_grafis::find($id);
    	$hapus->delete();


    	$table = Template_grafis::all();
    	return view('Template\grafis-list', ['table' => $table]);

    }


   public function edit($id)
    {
    	$table = Template_grafis::find($id);

    	
    	return view('Template\grafis-update', ['table' => $table]);

    }


   public function update(Request $req, $id)
    {
        $table = Template_grafis::find($id);



        $table->kode_template = $req->template;
        $table->nama_template = $req->namatemplate;
        $table->jenis = $req->jenis;
        $table->harga_rupiah = $req->harga_rupiah;
        $table->harga_promo = $req->harga_promo;
        $table->url_demo = "http://".$req->urldemo;
        $table->note = $req->note;
        $table->save();

        $table = Template_grafis::all();

       
    
        return view('Template\grafis-list', ['table' => $table]);

    }



    public function downloadfile($file)
	{
    //PDF file is stored under project/public/download/info.pdf
	$filename = $file;
    $file= public_path(). "/filetemplategrafis/$file";


    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file,$filename , $headers);
	}


   

    
}
