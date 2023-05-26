<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CkeditorController extends Controller
{

   
    /**
     * sucess response method
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request)
    {
        if ($reuqest->hasFile('upload')) {
            // image storing
            $file = $request->file('upload');
            $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/ckeditor_images');

            $file->move($destinationPath, $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/ckeditor_images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
