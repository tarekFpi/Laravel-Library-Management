@extends('admin_muster')

<!DOCTYPE html>
<html lang="en">
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
    height: 60px;
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
</style>
</head>
<body>

    <div class="container" style="margin-top: 80px;">
    <div class="card" style="width: 800px;">
         <div class="card-header">
            <h3 style="text-align: center;">Publication Name Form</h3>
   
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Publication Name Add  
            </button>

            <div class="card-body ">
                 <table class="table table-success" id="table-data">
                     <thead>
                        <tr>
                            <th scope="col">Serial Id</th>
                            <th scope="col">Publicatin Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                     </thead>
                    
                     <tbody>
                      @foreach ($publication_name as $item)
                      <tr>
                      <th>{{$item->id}}</th>
                      <th>{{ $item->publication_name }}</th>
                      <th>{{ $item->Date }}</th>
                    
                         <th>
                          <a href="#" id="Update-id" data-target="#UpdateModal" data-toggle="modal"
                          data-id="{{ $item->id }}" 
                          data-pub_name="{{ $item->publication_name }}" 
                          class="btn btn-warning">Edit</a> 
                        </th>

                        <th>
                          <a href="#" id="delete-btn"   
                           data-id="{{ $item->id }}"  class="btn btn-danger">Delete</a> 
                        </th>
                    </tr>
                    @endforeach  
                     </tbody>
                 </table>
            </div>
         </div>
        </div>
    </div>

{{--     ShowData --}}
    <div id="showdata" class="container" style="width:2000px;">

    </div>

<!-- Add Model-->

    <div class="container">

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
          {{--   insert messagess div --}}
      <div id="messages">

      </div>
         
   {{--    start form  --}}
         <form id="form_publication_Name">
           @csrf
             <label>Publication Name:</label><br>
          <input type="text" name="text_pub_Name"   autocomplete="off" id="text_pub_Name"
           placeholder="Publication Name"/>
           <div id="publ_name_error" style="color: red;display: none;">Publication  Name is Empty..</div>
            <br><br>

        <label>Date:</label><br>
         <input type="text" name="add_date" id="add_date"  autocomplete="off" placeholder="Date"/>
         <div id="date-error" class="invalid-feedback"></div>
    <div id="publ_date_error" style="color: red;display: none;">Date is Empty..</div>
          <br><br>
            
         <input type="submit" id="save-btn" class="btn btn-success" value="Save" style="width:150px;"/> 
           </form>
            {{-- End form  --}}
        </div>

      </div>
    </div>
  </div>
    </div>
    <!-- Add Model End-->


<!-- Update Model-->
<div class="container">

  <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update publication Name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form id="form_publication_Name_update">
                @csrf
          <label>Publication Name:</label><br>
           <input type="text" name="up_pub_Name"   autocomplete="off" id="up_pub_Name"
            placeholder="Publication Name"/>
            <div id="publ_Upname_error" style="color: red;display: none;">Publication Name is Empty..</div>
             <br><br>

         <input type="hidden" name="update_id" id="update_id"/>
   <input type="submit" id="save-btn" class="btn btn-success" value="Update" style="width:150px;"/> 
            </form>
        </div>

      </div>
    </div>
  </div>
    </div>
 
 <!-- Update Model End-->
    
</body>

<script >
   $(document).ready(function(){
      
    /* form inserst */
     $('#form_publication_Name').on('submit',function(e){
      e.preventDefault();

         var bookName=$('#text_pub_Name').val();
         var addDate=$('#add_date').val();
        // var _token = $(`#csrf`).val();
  
    if(document.getElementById("text_pub_Name").value==""){
    
      $('#publ_name_error').show();
	   $('#publ_name_error').focus();
      document.getElementById("text_pub_Name").style.borderColor="RED";

    }else if(document.getElementById("add_date").value==""){
      $('#publ_date_error').show();
	   $('#publ_date_error').focus();
      document.getElementById("add_date").style.borderColor="RED";
    }
    else{

  $.ajax({
           url:"{{ url('/publication_Name_store') }}",
          type: "POST",
           data: $('#form_publication_Name').serialize(),
           success:function(data){
          //  alert("DepartName Name insert SucceFull..");
              alert(data);
              $('#exampleModal').modal().hide();
              jQuery('#form_publication_Name').trigger('reset');

               $('#messages').html("<div class='alert alert-success' role='alert'>   <button type='button' class='close' data-dismiss='alert'>×</button>Publication Name insert SucceFull..</div>");
               $("#publ_name_error").hide();   
               $('#publ_date_error').hide();  
               window.location.reload();      
           }
     
         });  
    }

     });

    /* form end */
     $(document).on('click','.btn-close',function(){
        window.location.reload();
     });


  //update get table value
   $(document).on('click','#Update-id',function(e)
      {   
        e.preventDefault();
     var pub_Name= $(this).data("pub_name");
     var searial_id=$(this).data("id");
   
     $('#up_pub_Name').val(pub_Name);
         $("#update_id").val(searial_id);
   
        
      });
       
 
   //update button
   $('#form_publication_Name_update').on('submit',function(e)
      {
       e.preventDefault();

     var searial_id= $("#update_id").val(); 
     if(document.getElementById("up_pub_Name").value==""){
       alert("Publication Name is Empty...");
     }else{
        $.ajax({
      url:"pub_name_update/"+ searial_id,
        type:"POST",
        data: $('#form_publication_Name_update').serialize(),
         success:function(data){
            alert(data);

            $('#UpdateModal').modal().hide();
            jQuery('#form_publication_Name_update').trigger("reset");
            window.location.reload();
         }
     });
       
     }
    
      });
           
           
     //Delete Data
   $(document).on('click','#delete-btn',function(e)
      {
     e.preventDefault();
     var searial_id= $(this).data("id");
      var token = $("meta[name='csrf-token']").attr("content");

   var elament=this;
      $.ajax({
          url:"publication_name_delete",
          data:{
            _token:token,
            searial_id:searial_id
          },
          success:function(data){
            alert(data)
         $(elament).closest('tr').fadeOut();
          }
      });   
       
   });

  });
</script>
</html>