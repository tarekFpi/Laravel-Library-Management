<?php

namespace App\Http\Controllers;

use App\Models\Book_add;
use App\Models\Issue_book_model;
use App\Models\Student_add_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Issue_book_contorller extends Controller
{
    function Issue_BookForm(){
  $All_issue_book=Issue_book_model::all();

   return view('Issue_Book',compact('All_issue_book'));
    }

    function Live_search_Book_Name($search_id){
         $getData=Book_add::where('BookId',$search_id)->value('BookName'); //->get() or ->vlaue()
            
         echo $getData;

      /*      foreach($getId as $getData){
           // echo $getData->BookName;
          //  echo $getData->page;
         echo"<input type='text' id='Book_name' value=".$getData->BookName."/>";
        }   */
    } 
      //live book page search
    function Live_search_Book_page($search_id){
        $getData=Book_add::where('BookId',$search_id)->value('page'); 
           
        echo $getData;
    }
      //live book publication name search
    function Live_search_Book_publication($search_id){
        $getData=Book_add::where('BookId',$search_id)->value('publication_name');  
        echo $getData;
    }

    ///Live_search_Book_Department
    function Live_search_Book_Department($search_id){
        $getData=Book_add::where('BookId',$search_id)->value('DepartmentName');  
        echo $getData;
    }

       ///Live search Book delivary price
       function Live_search_Book_Sellprice($search_id){
        $getData=Book_add::where('BookId',$search_id)->value('Delivary_price');  
        echo $getData;
    }

    //Live_search_Student_Name
         function Live_search_Student_Name($search_stRoll){
            $getData=Student_add_model::where('Roll',$search_stRoll)->value('Name');  
            echo $getData;
        }

           //Live_search_Student_Name
           function Live_search_Student_Image($search_stRoll){
            $getData=Student_add_model::where('Roll',$search_stRoll)->value('Image');  
            echo $getData;
        }


//book issue stock match Quanity 
function Live_search_stockQuanity(Request $request, $book_Id){

    $stock=  DB::select('select *FROM stock WHERE BookId =?',[$book_Id]);

    //$sell_quantity= $request->quanitiy;
    foreach ($stock as  $getItem) {
        $pur_quan=0;
        $Stock_pd=0;
    
       if($getItem->sell_unit>0){

         $pur_quan=$getItem->sell_unit;
       }

       $Stock_pd= $getItem->parchas_unit-$pur_quan;
       return  $Stock_pd;  
    }    
}

//Quantity update match stock
function Update_quantity($book_Id){
    $stock_update=  DB::select('select *FROM stock WHERE BookId =?',[$book_Id]);

    foreach ($stock_update as  $getItem) {
        $pur_quan=0;
        $Stock_pd=0;
    
       if($getItem->sell_unit>0){

         $pur_quan=$getItem->sell_unit;
       }

       $Stock_pd= $getItem->parchas_unit-$pur_quan;
  
       return  $Stock_pd;  
    }
}

        function Studnet_IssueBook(Request $request,$student_roll){
           
        /*     $file[1]= $request->hidden_image_url;
           $path[1]=explode('Student_image/',$file[1]);

           $image_name =$path[1];
       $destinationPath ='Issue_Book_image/';  
      $imag_url=$destinationPath.$image_name;  
 
          $move = public_path('/Issue_Book_image'.$image_name);
            file_put_contents($move, $image_name); 
         */
          
    
      $getPhone=Student_add_model::where('Roll',$student_roll)->value('phone'); 
 
      Issue_book_model::create([
                  'BookId'=> $request->search_book_id,
                  'BookName'=> $request->Book_name,
                  'publication_Name'=> $request->pulication,
                  'Department_book'=> $request->Book_deaprtment,
                  'page'=> $request->page_number,
                  'student_Name'=> $request->student_name,
                  'student_Roll'=> $request->search_roll,
                  'Phone'=> $getPhone,
                  'Day'=> $request->day,
                  'sell_quanitiy'=> $request->quanitiy,
                  'price'=> $request->delivary_price,
                  'Delivary_Date'=> $request->add_date, 
                  'Total_price'=> $request->total_price, 
                  ]); 
   
            return redirect()->back();
        }

      /*   function Studnet_Login(Request $request){
      
          return "Login SuccessFull";
              } */

       function Update(Request $request, $serial_id){

        if ($request->ajax()) {
 
            $getData= Issue_book_model::find($serial_id);
            $getData->sell_quanitiy= $request->sell_quan;
            $getData->Total_price= $request->total_price;
            $getData->Delivary_Date= $request->update_date;
    
            $getData->save();    
      return "Student Book Issue Update SuccessFull..";
          }
    
       }  
       
       //Delete 
       function Destroy(Request $request){

        if($request->ajax()) {
       
   $geDelete=Issue_book_model::find($request->delete_id);
   $geDelete->delete();
         return "Book Isssue Delete SuccessFull..";
         }
       }

       //Issue_BookLiveSearch
       function Issue_BookLiveSearch(Request $request){

           if($request->ajax()){

         
            $output="";
            $dataa= Issue_book_model::where('student_Roll', 'like', '%'.$request->search_data."%")
                ->orWhere('Phone', 'like', '%'.$request->search_data.'%')->get();
                          
  foreach ($dataa as  $item) {
 

    $output.='<tr>'.
  '<td>'.$item->id.'</td>'.
  '<td>'.$item->BookId.'</td>'.
  '<td>'.$item->BookName.'</td>'.
  '<td>'.$item->publication_Name.'</td>'.
  '<td>'.$item->Department_book.'</td>'.
  '<td>'.$item->page.'</td>'.
  '<td>'.$item->student_Name.'</td>'.
  '<td>'.$item->student_Roll.'</td>'.
  '<td>'.$item->Phone.'</td>'.
  '<td>'.$item->price.'</td>'.
  '<td>'.$item->Delivary_Date.'</td>'.
  '<td>'.$item->Day.'</td>'.
  '<td>'.$item->sell_quanitiy.'</td>'.
  '<td>'.$item->Total_price.'</td>'.
  '</tr>';
   
    }  
   
     return Response($output);
  
   
           }
       }
    }