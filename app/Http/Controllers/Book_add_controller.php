<?php

namespace App\Http\Controllers;

use App\Models\Book_add;
use App\Models\Bookname_model;
use App\Models\Department_add;
use App\Models\publicatin_model;
use Illuminate\Http\Request;

class Book_add_controller extends Controller
{
 /*  public function __construct()
  {
      $this->middleware('auth');
  }
 */
    function Create(){
 // return view('BookAddView',compact('BookAll'));   
 
    }

   function BookInsert_from(){
 
    $getname= Bookname_model::all();
    $department= Department_add::all();
    $publication= publicatin_model::all();
    $BookAll= Book_add::all();

     return view('BookAddView',compact(['getname','department','publication','BookAll']));   
  
   }

     function getPublicationName($book_id){
      $output='';

      if(!empty($book_id)){
        $getpublicationName = Book_add::where('BookId',$book_id)->value('publication_name');

        //  $getBookName= Book_add::where('BookId',$book_id)->value('BookName');
        
       //   $getpbName=$getpublicationName->count();
         // return $getpublicationName;
         if(!empty($getpublicationName)){
          return $getpublicationName;
         }else{
          $publication= publicatin_model::all();
     
          foreach($publication as $row){
          echo "<option>".$row->publication_name."</option>";   
          }
         }  
      }
   
     }
 
    //get Book Name
     function getBook_Name($book_id){

      if(!empty($book_id)){
        $getBookName= Book_add::where('BookId',$book_id)->value('BookName');
          
        if(!empty($getBookName)){
          return $getBookName;
          }else{
        
            $getname= Bookname_model::all();
            foreach($getname as $roww){
            echo "<option>".$roww->Name."</option>";   
            }
         }
      } 
     
       }
  
       function getDepartment_Name($book_id){
        if(!empty($book_id)){

         $getDepartment= Book_add::where('BookId',$book_id)->value('DepartmentName');
     
        if(!empty($getDepartment)){
          return $getDepartment; 
         }else{
      
          $department= Department_add::all();
          foreach($department as $ro){
          echo "<option>".$ro->Name."</option>";   
          }
        
         }
        }
        
         }


   function New_BookInsert(Request $request){

       $this->validate($request,[
        'uploadfile'=> 'required|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]); 

   
        $file= $request->file('uploadfile');
        $destinationPath = 'Book_Image/';

        $image_name = $request->file('uploadfile')->getClientOriginalName();
        $imag_url=$destinationPath.$image_name;
    
     $file->move(public_path('/Book_Image'),$file->getClientOriginalName());
 
     Book_add::create([
              'BookId'=> $request->book_id,
              'BookName'=> $request->book_name,
              'page'=> $request->page_number,
              'BookDetails'=> $request->book_deatils,
              'publication_name'=> $request->publication_name,
              'DepartmentName'=> $request->department_name,
              'Delivary_price'=> $request->delivary_price,
              'Quanitiy'=> $request->quanitiy,
              'Update_Date'=> $request->add_date, 
              'image'=>$imag_url  
              ]); 

         return "Book insert SucceFull..";
    
   }
 
 function Update(Request $request,$serial_id){

   $getUpdate_id= Book_add::find($serial_id);

   $getUpdate_id->Quanitiy=$request->up_quatity;
   $getUpdate_id->Delivary_price=$request->up_price;
   $getUpdate_id->save();

   return"Book Update SuccessFull..";
 }

 function Destroy(Request $request){

    if($request->ajax()){

    $getDelete= Book_add::find($request->delete_id);
      $getDelete->delete();

      return"Book Delete SuccessFull..";
    }
    
 }
   
 function Book_Live_Search(Request $request){
  if($request->ajax()) {
    // `BookName`,`BookId`,`publication_name`,`DepartmentName`
    $output="";
    $data= Book_add::where('BookName', 'like', '%'.$request->search_data."%")
        ->orWhere('BookId', 'like', '%'.$request->search_data.'%')
        ->orWhere('publication_name', 'like', '%'.$request->search_data.'%')
        ->orWhere('DepartmentName', 'like', '%'.$request->search_data.'%')->get();
        
        
  foreach ($data as  $item) {
    $output.='<tr>'.
    '<td>'.$item->id.'</td>'.
  '<td>'.$item->BookId.'</td>'.
  '<td>'.$item->BookName.'</td>'.
  '<td>'.$item->page.'</td>'.
  '<td>'.$item->BookDetails.'</td>'.
  '<td>'.$item->publication_name.'</td>'.
  '<td>'.$item->DepartmentName.'</td>'.
  '<td>'.$item->Delivary_price.'</td>'.
  '<td>'.$item->Quanitiy.'</td>'.
  '<td>'.$item->Update_Date.'</td>'.
  '<td><img src='.$item->image.' height=150px width=200px /></td>'. 
  
  '</tr>';
   
    }  
   
     return Response($output);
  
  }
}
}
