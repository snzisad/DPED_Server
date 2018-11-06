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


class dpedController extends Controller
{
    public function homepage(){
        return redirect("dped");
    }
    public function index(Request $request)
    {
        $folders= folders::where('rootID','=','0')->get();
        return view('dped.home', compact('folders'));
            
    }
    
    public function show($id)
    {
        $name=folders::where('folderID','=',$id)->first();
        $files=files::where('folderID','=',$id)->get();
        $folders=folders::where('rootID','=',$id)->get();

        return view('dped.viewfolder',compact('files','folders'))->with('name',$name);
    }

    public function showFile($id){
        $viewer="http://docs.google.com/viewer?embedded=true&url=";
        $path="http://banglasofttech.com/dped/file_storage/".$id.".pdf";

        return redirect($viewer.$path);
        // return $path;
            
    }

    public function paste($id,$type,$root){
        if($type=="folder"){
            folders::where('folderID', $id)->update([
                'rootID' => $root
                ]);
        }
        else{
            files::where('fileID', $id)->update([
                'folderID' => $root
                ]);
        }
        return redirect()->back();
    }

    public function update($type,$id,$name)
    {
        
        if($type=="folder"){
            folders::where('folderID', $id)->update([
                'folder' => $name
                ]);
        }
        else{
            files::where('fileID', $id)->update([
                'file' => $name
                ]);
        }
        return back();
            
    } 


    public function destroy($id,$type)
    {
        if($type=="folder"){
            folders::where('folderID', $id)->delete();
        }
        else{
            files::where('fileID', $id)->delete();
        }
        return back();
    }

    public function newFolder($id, $name){
        folders::insert([
                'folder'=>$name,
                'rootID'=>$id
            ]);
    }

    public function newFile(request $request){
        $this->validate($request,[
                "pdffile" => "required|mimes:pdf",
                "docxfile" => "mimes:doc,docx"
            ]);
        $pdf=$request->file("pdffile");

        if($request->hasFile('docxfile')){
            $docx=$request->file("docxfile");
            files::insert([
                'file'=>$request->name,
                'folderID'=>$request->id,
                'extension'=>$docx->extension()
            ]);

            $id=files::orderBy("fileID",'desc')->first()->fileID;
            $pdf->storeAs('public/files',$id.".".$pdf->extension());
            $docx->storeAs('public/files',$id.".".$docx->extension());
        }
        else{
             files::insert([
                'file'=>$request->name,
                'folderID'=>$request->id,
                'extension'=>$pdf->extension()
            ]);
            $id=files::orderBy("fileID",'desc')->first()->fileID;
            $pdf->storeAs('public/files',$id.".".$pdf->extension());
        }
        return back();
    }

    public function updateFile(request $request){
        $this->validate($request,[
                "pdffile" => "required|mimes:pdf",
                "docxfile" => "mimes:doc,docx"
            ]);
        $pdf=$request->file("pdffile");
        $id=$request->id;

        if($request->hasFile('docxfile')){
            $docx=$request->file("docxfile");
            files::where('fileID', $id)->update([
                'file'=>$request->name,
                'extension'=>$docx->extension()
            ]);

            Storage::delete('public/files/'.$id.".".$pdf->extension());
            Storage::delete('public/files/'.$id.".".$docx->extension());

            $pdf->storeAs('public/files',$id.".".$pdf->extension());
            $docx->storeAs('public/files',$id.".".$docx->extension());
        }
        else{
             files::where('fileID', $id)->update([
                'file'=>$request->name,
                'extension'=>$pdf->extension()
            ]);

            Storage::delete('public/files/'.$id.".".$pdf->extension());

            $pdf->storeAs('public/files',$id.".".$pdf->extension());
        }
        return back();
    }

     public function viewFile($filename){
        $path = storage_path("app".DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR."files".DIRECTORY_SEPARATOR.$filename);
        if(Auth::check()){
            if (!File::exists($path)) {
                abort(404);
            }

            $file = File::get($path);
            $type = File::mimeType($path);

            $response = Response::make($file, 200);
            $response->header("Content-Type", $type);
            
            return redirect($path);
        }
        return redirect('signin');
     }
}

