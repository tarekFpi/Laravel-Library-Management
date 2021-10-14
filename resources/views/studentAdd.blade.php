@extends('admin_muster')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
    
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<script>
      $(function () {
                $("#add_date").datepicker();
            });
</script>

<style>
   input[type=text]{
 height:50px;
 font-size:18px;
 width:400px;
 }

textarea{
    width: 400px;
    height: 70px;
}
select{
    width: 400px;
    height: 50px;
}
.card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  cursor: pointer;
}

.search_student_data{
  text-align: center;
  width: 100%;
  justify-content: center;
}
label{
  font-size: 18px;
}
</style>
</head>
<body>
  @section('admin_content')


    <div class="container mt-3">
    <div class="card" style="width: 800px;">
         <div class="card-header">
            <h3 style="text-align: center;">Add New Student</h3>

            <div class="card-body ">


                <form id="from_student_add" enctype="multipart/form-data">
                  @csrf
                    <label>Student Name</label><br>
          <input type="text" name="student_name" id="student_name" autocomplete="off" placeholder="Student Name" />
                    <br><br>
    
                  <label>Student Roll:</label><br>
                  <input type="text" name="student_roll" autocomplete="off"  id="student_roll" placeholder="Student Roll" />
                  <br><br>

      <label>Gender:</label><br>
       <input type="radio" name="gender" id="gender" autocomplete="off"  value="Male" style="font-size: 18px;"/>Male

               <input type="radio" name="gender" id="gender" autocomplete="off"  value="Femal" style="margin-left: 20px; font-size: 18px;"/>Femal
                  <br><br>

         <label>Department Name:</label><br>
         <select name="department_name" id="department_name">
            <option>Select--Department</option>

            @foreach ($department as $item_name)
            <option>{{$item_name->Name}}</option>
            @endforeach
        </select>
        <br><br>

        <label>Semester Name:</label><br>
        <select name="semester_name" id="semester_name">
           <option>Select--Semester</option>
           <option>First Semester</option>
           <option>Second Semester</option>
           <option>Third Semester</option>
           <option>Fourth Semester</option>
           <option>Fivth Semester</option>
           <option>Sixth Semester</option>
           <option>Seventh Semester</option>
            <option>Eight Semester</option>
       </select>
    
                <br><br>
              <label>Section Name:</label><br>
              <input type="text" name="st_section" autocomplete="off"  id="st_section" placeholder="Section Name"/> 

         

                      <br><br>
                    <label>phone Number</label><br>
           <input type="text" name="phone" id="phone" placeholder="phone Number" autocomplete="off" /> 
    
                      <br><br>
                      <label>Gmail</label><br>
    <input type="text" name="st_gmail" id="st_gmail" autocomplete="off"  placeholder="Gmail"/>
    
                        <br><br>
                        <label>password</label><br>
                          <input type="text" name="st_password" id="st_password" autocomplete="off" placeholder="password"/>
                          <br><br>
                      
                       <label>Address:</label><br>
                       <textarea  name="Address" autocomplete="off"  id="Address">
                       </textarea>

                       <br><br>
                       <label>Upload Date:</label><br>
     <input type="text" name="add_date" id="add_date" autocomplete="off" placeholder="Upload Date"/>
                 
                       <br><br>
                       <label>Upload Book Image:</label><br>
                    <input type="file" name="uploadImage" id="uploadImage"  accept="image/*"/>
             
                    <br><br>
    <input type="submit" id="save-btnn" class="btn btn-success" value="Save" style="width:150px;"/> 
          
                </form>
                
         {{--        @if($errors->any())

                <p class="alert alert-primary" role="alert">
                 {{$errors->first() }}
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
        </p>
      @enderror --}}
   
            </div>
         </div>
        </div>
    </div>

  <br>  <br>
 
<div class="card ml-2" style="width:2000px;">
 <div class="card-header">
 <div class="card-body">

    <div class="search_student_data">
      <label>Student Live Search</label>
  <input  type="text" id="search_Student_data" placeholder=" Live Search for Roll,Name ,Phone..."  style="width: 400px; padding: 10px;"/>
    </div>
  <br>

<div id="loadData">
    {{--   @if(!empty($Allstudent)) --}}
   
    <table class="table table-striped table-hover table-bordered border-primary">
   <thead class="table-dark">
             <tr>
               <th scope="col">Serial Id</th>
               <th scope="col">Name</th>
               <th scope="col">Roll</th>
               <th scope="col">Gender</th>
               <th scope="col">Department</th>
               <th scope="col">Semester</th>
               <th scope="col">Section</th>
               <th scope="col">Phone</th>
               <th scope="col">Gmail</th>
               <th scope="col">password</th>
               <th scope="col">Address</th>
               <th scope="col">Date</th>
               <th scope="col">Image</th>
                <th scope="col">Edit</th>
               <th scope="col">Delete</th> 
             </tr>
        </thead>
 
 
        <tbody>
       @foreach($Allstudent as $item)   
       
          <tr>
                  <th>{{$item->id}}</th>  
                  <th>{{$item->Name}}</th>  
                  <th>{{ $item->Roll }}</th> 
                  <th>{{ $item->Gender }}</th> 
                 <th>{{ $item->Department }}</th> 
                 <th>{{ $item->Semester }}</th> 
                 <th>{{ $item->Section }}</th> 
                  <th>{{$item->phone}}</th> 
                  <th>{{ $item->Gmail}}</th> 
                  <th>{{$item->password}}</th> 
                  <th>{{ $item->Address}}</th> 
                   <th>{{ $item->Upload_Date }}</th> 
           <th><img src="{{ $item->Image }}" width="200px" height="150px"/></th>
    {{--        data-toggle="modal" data-target="#UpdateModal"  --}}
           <th>
            <a href="#" id="update_id"

             data-id="{{ $item->id }}" 
              data-stName="{{ $item->Name }}" 
              data-st_roll="{{ $item->Roll }}"  
              data-st_depart="{{ $item->Department }}"  
              data-st_semester="{{ $item->Semester }}" 
               class="btn btn-warning" data-toggle="modal" data-target="#UpdateModal">Edit</a> 
          </th>

          <th>
            <a href="#" id="delete-btn"  data-delete_id="{{ $item->id }}"  class="btn btn-danger">Delete</a> 
          </th>
          </tr>

       @endforeach 
       
        </tbody>
    </table>
    
</div>
</div>
</div>
</div>
 


<!-- Update Model-->
<div class="container">

    <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

           <form id="studnet_update_form">
            @csrf
            <label>Name</label><br>
            <input type="text" name="up_name" id="up_name" autocomplete="off" placeholder="Name"/>
            <br><br>

            <label>Roll</label><br>
            <input type="text" name="up_roll" id="up_roll" autocomplete="off" placeholder="Roll"/>
            <br><br>

            <label>Department</label><br>
            <input type="text" name="up_depart" id="up_depart" autocomplete="off" placeholder="Department"/>
            <br><br>

            <label>Semester</label><br>
            <input type="text" name="up_semester" id="up_semester" autocomplete="off" placeholder="Semester"/>
            <br><br>
              <input type="hidden" name="update_id" id="update_id"/>

              <input type="submit" id="update-btn" class="btn btn-success" value="Update" style="width:150px;"/> 
          
          </form>
          
          </div>
  
        </div>
      </div>
    </div>
      </div>
      <!-- Add Model End-->
      @endsection
</body>


<script>
    $(document).ready(function(){
         // showData();

       function showData(){
         var loadData="loadData";
        $.ajax({
              url:"showAll_student",
              type: "GET",
          success:function(data){
         $('#loadData').html(data)
       
           }
          });
       }
    

      $('#from_student_add').on('submit',function(e){
        e.preventDefault();

         var formData = new FormData(this);
          var student_name=$('#student_name').val();
          var student_roll=$('#student_roll').val();
          var gender=$('#gender').val();
          var department=$('#department_name').val();

          var semester=$('#semester_name').val();
          var section=$('#st_section').val();
          var date=$('#add_date').val();
          var Address=$('#Address').val();
          var upload_image=$('#uploadImage').val();
          var phone=$('#phone').val();

          var gmail=$('#st_gmail').val();
          var password=$('#st_password').val();
 
 if(document.getElementById("student_name").value==""){
    alert("Student Name is Empty..");
    document.getElementById("student_name").style.borderColor="RED";

     }else if(document.getElementById("student_roll").value==""){
          alert("Roll is Empty");
   document.getElementById("student_roll").style.borderColor="RED";
     }else if(document.getElementById("gender").value==""){
          alert("Gender is Empty");
    document.getElementById("gender").style.borderColor="RED";

     }else if(document.getElementById("department_name").value==""){
          alert("Department  Name is Empty");
     document.getElementById("department_name").style.borderColor="RED";
     }else if(document.getElementById("semester_name").value==""){
          alert("Semester  is Empty");
     document.getElementById("semester_name").style.borderColor="RED";

     }else if(document.getElementById("st_section").value==""){
          alert("Section is Empty");
  document.getElementById("st_section").style.borderColor="RED";
     }else if(document.getElementById("phone").value==""){
          alert("Phone Number is Empty");
   document.getElementById("phone").style.borderColor="RED";

     }else if(document.getElementById("st_gmail").value==""){
          alert("Gmail is Empty");
   document.getElementById("st_gmail").style.borderColor="RED";

     }else if(document.getElementById("st_password").value==""){
          alert("Password is Empty");
       document.getElementById("st_password").style.borderColor="RED";

     }else if(document.getElementById("Address").value==""){
          alert("Address is Empty");
     document.getElementById("Address").style.borderColor="RED";

     }else if(document.getElementById("add_date").value==""){
          alert("Updload Date is Empty");
     document.getElementById("add_date").style.borderColor="RED";
     }else{
 
      document.getElementById("student_name").style.borderCollapse="collapse";
      document.getElementById("student_roll").style.borderCollapse="collapse";
      document.getElementById("department_name").style.borderCollapse="collapse";
      document.getElementById("semester_name").style.borderCollapse="collapse";
      document.getElementById("st_section").style.borderCollapse="collapse";
      document.getElementById("phone").style.borderCollapse="collapse";
      document.getElementById("st_gmail").style.borderCollapse="collapse";
      document.getElementById("st_password").style.borderCollapse="collapse";
      document.getElementById("Address").style.borderCollapse="collapse";
      document.getElementById("add_date").style.borderCollapse="collapse";
      $.ajax({
    
    url:"{{ url('/student_insert') }}",
   type: "POST",
  data: formData,
 cache:false,
 contentType: false,
 processData: false,
 success:function(data){
  alert("Student Information Insert SuccsseFull..");
        $('#from_student_add').trigger('reset');
    }
  }); 

     }
    
      });
 
      $(document).on('click','.btn-close',function(){
      window.location.reload();
      });
      
      //update get table value
   $(document).on('click','#update_id',function()
      {

  $tr=$(this).closest('tr');
var count_id=$tr.children('th').map(function(){
 return $(this).text();
}).get();

    /*     var st_name= $(this).data("stName");
          var st_roll=$(this).data("st_roll");
          var st_depart=$(this).data("st_depart");
          var st_semester=$(this).data("st_semester");
           */
         $("#update_id").val(count_id[0]);
          $("#up_name").val(count_id[1]);
          $("#up_roll").val(count_id[2]);
          $("#up_depart").val(count_id[3]);
          $("#up_semester").val(count_id[4]);
      });
        

 $('#studnet_update_form').on('submit',function(e){
      e.preventDefault();

      var serial_id= $("#update_id").val();

    if(document.getElementById("up_name").value==""){
     alert("Name is Empty");
     document.getElementById("up_name").style.borderColor="RED";

     }else if(document.getElementById("up_roll").value==""){
     alert("Roll is Empty");
     document.getElementById("up_roll").style.borderColor="RED";

     }else if(document.getElementById("up_depart").value==""){
     alert("Department Name is Empty");
     document.getElementById("up_depart").style.borderColor="RED";

     }else if(document.getElementById("up_semester").value==""){
     alert("Semester Name is Empty");
     document.getElementById("up_semester").style.borderColor="RED";
     }else{

     document.getElementById("up_semester").style.borderCollapse="collapse";
     document.getElementById("up_depart").style.borderCollapse="collapse";
     document.getElementById("up_roll").style.borderCollapse="collapse";
     document.getElementById("up_name").style.borderCollapse="collapse";
 
   $.ajax({

        url:"studnet_inf_update/"+ serial_id,
        type:"POST",
        data: $('#studnet_update_form').serialize(),
        success:function(data){
         alert(data); 
       //  jQuery('#UpdateModal').modal('hide');
        $('#UpdateModal').modal().hide();

         jQuery('#studnet_update_form').trigger("reset");
         window.location.reload();
          $("#update_id").val('');
          $("#up_name").val('');
          $("#up_roll").val('');
          $("#up_depart").val('');
          $("#up_semester").val('');  
        }
     }); 
     
     }
      
 });


   ///live search student data
       $('#search_Student_data').keyup(function(){
         var search_data= $(this).val();
          //  alert(search_data);
          if (search_data !="") {
           $.ajax({
               url:"student_search",
                type:"GET",
               data:{
                search_data:search_data
               },  
               success:function(data){
                //  $('#loadData').html(data);
                $('tbody').html(data);
                     
               }
           });  
          }else{
            window.location.reload();
          }
       });

       $(document).on('click','#delete-btn',function(e){
         e.preventDefault();
           var delete_id= $(this).data('delete_id');
            var elemant=this;

            $.ajax({
                url:"/Delete_Student",
                data:{
                  'delete_id':delete_id
                },
                success:function(data){
                 alert(data); 
                 $(elemant).closest('tr').fadeOut();
                } 
            });
        });
    });
 
   
 </script>
</html>