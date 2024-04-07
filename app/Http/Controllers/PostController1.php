<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\File;

use Validator;

class PostController extends Controller
{

    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxValidation()
    {
            return view('post.ajaxValidation.ajaxValidation');
    }

    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxValidationStore(Request $request)
    {
        
        
        $validator = Validator::make($request->all(), [
            'pswd' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        if ($validator->passes()) {

                  

            DB::connection('mysql')->table('cin')->insertOrIgnore([
                'first_name' => $request->pswd,
                'last_name'=>'Hello',
            ]);
           
        $uploaddir ="uploads/";
    if(basename($_FILES['image']['name'])=="")$image_name="";
    else $image_name=basename($_FILES['image']['name']);
    
    $uploadimg = $uploaddir.$image_name;
    $upload =$image_name;
    
    if(basename($_FILES['image']['name'])!= "")
    {move_uploaded_file($_FILES['image']['tmp_name'], $uploadimg);}
    
            /*
            $fileModel = new File;
            if($request->image()) {
                $fileName = time().'_'.$request->image->getClientOriginalName();
                $filePath = $request->image('file')->storeAs('uploads', $fileName, 'public');
                $fileModel->name = time().'_'.$request->image->getClientOriginalName();
                $fileModel->image_path = '/storage/' . $filePath;
                $fileModel->save();
            }
            */


            return response()->json(['success'=>'Added new records.']);
            
    
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }

}
?>