<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function downloadFile($file_name)
    {
        $myFile = public_path('files/'.$file_name);
        $headers = ['Content-Type: application/pdf'];
        $newName = 'nicesnippets-pdf-file-'.time().'.pdf';

        return response()->download($myFile, $newName, $headers);
    }

     public function fileUpload()
    {
        return view('fileUpload');
    }
    public function pictureUpload()
    {
        return view('pictureUpload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:200048',
        ]);
        $fileName = $request->file->getClientOriginalName();
        //time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('files'), $fileName);
        return back()
            ->with('success','Upload uspješan!')
            ->with('file',$fileName);
   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pictureUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,webp,JPG|max:2048',
        ]);
        $fileName = $request->file->getClientOriginalName();
        //time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('pictures'), $fileName);
        return back()
            ->with('success','Upload slike uspješan!')
            ->with('file',$fileName);
   
    }	

}
