<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\files;
use App\folders; 
use App\Course; 
use Auth;
use File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class APIController extends Controller
{
    public function home()
    {
        $home_folder=folders::where("rootID",'0')->get();
        
        $out[]=array(
            "Data"=>$home_folder,
            "message"=>"Success"
        );
	    return json_encode($out,JSON_UNESCAPED_UNICODE);
    }

    public function viewFolder($id)
    {
        $sub_folder=folders::where("rootID",$id)->get();
        $files=files::where("folderID",$id)->get();
        $root=folders::where("folderID",$id)->first();
        $rootname=folders::where("folderID",$root->rootID)->first();
        
        if($rootname){
            $name=$rootname->folder;
        }
        else{
            $name=null;
        }
        
        $out[]=array(
            "Folders"=>$sub_folder,
            "Files"=>$files,
            "Root"=>$root->rootID,
            "Rootname"=>$name,
            "message"=>"Success"
        );
	    return json_encode($out,JSON_UNESCAPED_UNICODE);
    }
}

