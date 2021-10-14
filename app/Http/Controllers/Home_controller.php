<?php

namespace App\Http\Controllers;
use App\Models\Bookname_model;
use App\Models\Department_add;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class Home_controller extends Controller
{


    function Book_NameAddFrom(){
    $data= Bookname_model::all();
    return view('BookNameAdd',compact('data'));
    }

    function BookNameAdd(Request $request){

  Bookname_model::create([
        'Name'=>$request->text_bookName,
        'Date'=>$request->add_date
      ]);

   //   return redirect()->back();
   //return redirect()->route('test')->with('status',"Insert successfully");
 
  //return redirect('insert')->with('failed',"operation failed");
  return "Book Name insert SucceFull..";
      }
      
   function Destroy(Request $request){
         if($request->ajax()){
         
        $getId= Bookname_model::find($request->searial_id);
           $getId->delete();
           return "Book Name Delete SuccessFull...";
         }
   }

   //Book single Name show 

   function Single_name($bookName){
    $getdata= Bookname_model::where('Name',$bookName)->get(); 
 
      return response()->json($getdata); 
}


///Boook Name Update
function Update(Request $request,$searial_id){
  $getData= Bookname_model::find($searial_id);
  $getData->Name=$request->up_bookName;
   
  $getData->save();
  return"Your Book Name Update SuccessFull..";
}

   function Department_Insert_from(){
   $Alldata= Department_add::all();
     return view('DepartmentNameAdd',compact('Alldata'));   
   }

   //Department_Insert
   function Department_Insert(Request $request){

       Department_add::create([
        'Name'=> $request->text_DpName,
        'Date'=> $request->add_date
       ]);

   return "Department Name insert SucceFull..";
   }


   ///Book Name Search
   function Book_NameSearch(Request $request){
    if($request->ajax()) {
 
      $output="";
$data= Bookname_model::where('Name', 'like', '%'.$request->search_data."%")->get();
 
  
foreach ($data as  $item) {

$output.='<tr>'.
'<td>'.$item->id.'</td>'.
'<td>'.$item->Name.'</td>'.
'<td>'.$item->Date.'</td>'.
'</tr>';
}  

return Response($output);


 }
   }

}
