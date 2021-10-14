<?php

namespace App\Http\Controllers;

use App\Models\Issue_book_model;
use App\Models\Student_add_model;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Student_login_cont extends Controller
{

  function index(){

  }

function Studnet_Login(Request $request){

  if((Student_add_model::where('Gmail','=',$request->st_gmail)->value('Gmail'))&& Student_add_model::where('password','=',$request->password)->value('password')){
   return "Login SuccessFull..";

  }else{
    return "Login Failde..";
  }

}

    function Studen_infromation($user_gmail){
    /*  if($request->ajax()){ */
       $getAlldata= Student_add_model::where('Gmail',$user_gmail)->get();

      return view('Student_logInformation',compact('getAlldata'));
       }
      // return redirect()->route('profile');
       // return redirect()->to(url('profile'));





    function Studen_IssueBook($Roll){
      $date = date('Y-m-d');

       $getIssue=Issue_book_model::where('student_Roll',$Roll)->get();

       $getAllData= Student_add_model::where('Roll',$Roll)->get();

       $getIssueDate= Issue_book_model::where('student_Roll','=',$Roll)->value('Delivary_Date');
       //   echo $getIssueDate;
   // $total_day= Issue_book_model::whereBetween('Delivary_Date', [$date, $getIssueDate])
     //->get();

      $Currrent_date= date_create($date);
     //  $da=new DateTime($date);
     $befor_date=date_create($getIssueDate);
        $count= date_diff($Currrent_date,$befor_date);

        $total_day= $count->format("%a");
       //  echo $total_day;
         $fine=20;
         if($count->format("%a")>=5){
          $count_day=  $total_day-5;
          $fine= $fine*$count_day;
          return view('Isssue_BookShow',compact('getIssue','getAllData','fine'));
         }else{
          return view('Isssue_BookShow',compact('getIssue','getAllData'));
         }




     }


  }
