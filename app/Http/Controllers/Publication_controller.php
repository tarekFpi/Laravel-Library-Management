<?php

namespace App\Http\Controllers;

use App\Models\publicatin_model;
use Exception;
use Illuminate\Http\Request;

class Publication_controller extends Controller
{
    
   ///publication_Insert_from  
   function publication_Insert_from(){
    $publication_name=publicatin_model::all();
    return view('publicationName',compact('publication_name'));   
    }

    function publication_Insert(Request $request){
 
            publicatin_model::create([
                'publication_name'=> $request->text_pub_Name,
                'Date'=> $request->add_date
                ]);
             return "Publication Name insert SucceFull..";
     //  $publication_name=publicatin_model::all();
     //  return view('publicationName',compact('publication_name'));   
        }

        function Update(Request $request,$searial_id){
              $getData=  publicatin_model::find($searial_id);
              $getData->publication_name=$request->up_pub_Name;
              $getData->save();
              return"Publication Name Update SuccessFull..";
        }

        //Delete
        function Destroy(Request $request){
          if($request->ajax()){
                 $getId=  publicatin_model::find($request->searial_id);  
                $getId->delete();

                return"Publication Name Delete SuccessFull...";   
          
          }
        }
}
