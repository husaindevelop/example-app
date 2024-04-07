<?php

namespace App\Http\Controllers;

use App\Jobs\NewQueue;
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
            return view('add');
    }

    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function usersdelete(Request $request){

        $userid = $request->userid;
  
        //return ($userid);
        //$employees = Employees::select('*')->where('id', $userid)->get();
        
        DB::connection('mysql')->table('employee')->where('employee_id', $userid)->delete();;
        
     }

        public function usersget(Request $request){

        $userid = $request->userid;
  
        //$employees = Employees::select('*')->where('id', $userid)->get();
        return view('employees')->with('emp', $userid);
    ?>
    
    
        <?php
       
        //return ("Hello");
        //// Fetch all records
        //$response['data'] = $employees;
  
        //return response()->json($response);
     }

    public function ajaxValidationStore(Request $request)
    {
        
        
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            
        ]);

        if ($validator->passes()) {

            $uploaddir ="uploads/";
            if(basename($_FILES['photo']['name'])=="")$image_name="";
            else $image_name=basename($_FILES['photo']['name']);

            if(basename($_FILES['resume']['name'])=="")$resume_name="";
            else $resume_name=basename($_FILES['resume']['name']);

            dispatch(new NewQueue($request->firstname));

            DB::connection('mysql')->table('employee')->insertOrIgnore([
                'employee_id'=>$request->employeeid,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'date_of_birth' => $request->birthdate,
                'education_qualification' => $request->qualification,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'photo' => $image_name,
                'resume' => $resume_name
                
                
            ]);


           

            

            return redirect('/view');
            //return response()->json(['success'=>'Added new records.']);
            
    
            
        }

        return response()->json(['error'=>$validator->errors()]);
    }




    public function ajaxValidationUpdate(Request $request)
    {
        
        
       
            /*
            $uploaddir ="uploads/";
            if(basename($_FILES['photo']['name'])=="")$image_name="";
            else $image_name=basename($_FILES['photo']['name']);

            if(basename($_FILES['resume']['name'])=="")$resume_name="";
            else $resume_name=basename($_FILES['resume']['name']);
            */
            
    

            DB::connection('mysql')->table('employee')->where('employee_id', $request->employeeid)->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'date_of_birth' => $request->birthdate,
                'education_qualification' => $request->qualification,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address
                
            ]);
           

            

            return redirect('/view');
            //return response()->json(['success'=>'Added new records.']);
            
    
            
        
    }


}
?>