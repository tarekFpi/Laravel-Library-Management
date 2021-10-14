<?php

namespace App\Http\Controllers;

use App\Models\Department_add;
use App\Models\Student_add_model;
use Illuminate\Http\Request;

class Student_add_controller extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  
    function index(){
   
  /*     $Allstudent= Student_add_model::all(); 
      $department= Department_add::all();
     return view('studentAdd',['Allstudent'=>$Allstudent,'department'=>$department]); 
     */
    }

    function student_AddForm(){
       $department= Department_add::all();
     $Allstudent= Student_add_model::all();   
     // return view('studentAdd',compact('department'));
      return view('studentAdd',['Allstudent'=>$Allstudent,'department'=>$department]); 
    }

    function Student_Add(Request $request){
 
       $this->validate($request,[

        'uploadImage'=> 'required|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]); 
        
        $file= $request->file('uploadImage');
        $destinationPath = 'Student_image/';

        $image_name= $request->file('uploadImage')->getClientOriginalName();
        $imag_url= $destinationPath.$image_name;

        $file->move(public_path('/Student_image'),$file->getClientOriginalName());


        Student_add_model::create([

              'Name'=> $request->student_name, 
               'Roll'=> $request->student_roll,
               'Gender'=> $request->gender,
               'Department'=> $request->department_name,
               'Semester'=> $request->semester_name,
               'Section'=> $request->st_section,
                'phone'=> $request->phone, 
                'Gmail'=> $request->st_gmail,
                'password'=> $request->st_password,
               'Address'=> $request->Address, 
                'Upload_Date'=> $request->add_date,
                'Image'=>$imag_url
        ]);

    }

    function studnet_infromationUpdate(Request $request,$serial_id){
        $getData= Student_add_model::find($serial_id);
        $getData->Name= $request->up_name;
        $getData->Roll= $request->up_roll;
        $getData->Department= $request->up_depart;
        $getData->Semester= $request->up_semester;
        $getData->save();

        return "Student Infromation Update SuccessFull..";
        
    }

    function search_student(Request $request){
         if($request->ajax()) {
 
         $output="";
 $data= Student_add_model::where('Name', 'like', '%'.$request->search_data."%")
     ->orWhere('Roll', 'like', '%'.$request->search_data.'%')
     ->orWhere('phone', 'like', '%'.$request->search_data.'%')->get();
     
  foreach ($data as  $item) {
 
  $output.='<tr>'.
'<td>'.$item->id.'</td>'.
'<td>'.$item->Name.'</td>'.
'<td>'.$item->Roll.'</td>'.
'<td>'.$item->Gender.'</td>'.
'<td>'.$item->Department.'</td>'.
'<td>'.$item->Semester.'</td>'.
'<td>'.$item->Section.'</td>'.
'<td>'.$item->phone.'</td>'.
'<td>'.$item->Gmail.'</td>'.
'<td>'.$item->password.'</td>'.
'<td>'.$item->Address.'</td>'.
'<td>'.$item->Upload_Date.'</td>'.
'<td><img src='.$item->Image.' height=150px width=200px /></td>'. 

'</tr>';
 
  }  
 
   return Response($output);

 
    }
}

function Destroy(Request $request){

    if($request->ajax()) {
     $find_id=Student_add_model::find($request->delete_id);
         
      $image_url= $find_id->Image;
      unlink($image_url);
       $find_id->delete();

       return"Studnet Information Delete SuccessFull.."; 
 
    }
}


}
