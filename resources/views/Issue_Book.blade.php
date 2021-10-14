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

<script>
  $(function () {
            $("#update_date").datepicker();
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

.search_data{
    width: 600px;
     position: relative;
     display: flex;
}
.search_data .search_book_id{
    width: 250px;
    position: relative;
    
}

.search_data  .seracher_roll{
    width: 250px;
  
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
            <h3 style="text-align: center;">Issue Book</h3>

            <div class="card-body ">
            

                <form id="from_bookadd" enctype="multipart/form-data">
                    @csrf
                 
                <div class="search_data">
                    <div class="search_book_id">
                        <label>Search Book Id</label><br>    
           <input type="text"  name="search_book_id" id="search_book_id" autocomplete="off" placeholder="Search Book Id"  style="width: 230px; height: 50px;"/>

                    </div>
               
                     <div class="seracher_roll">
                  <label>Search Student Roll</label><br>    
                    <input type="text" name="search_roll"  id="search_roll" autocomplete="off" placeholder="Search Student Roll"  style="width: 230px; height: 50px;"/>
                    </div>
         </div>  
        
             <hr>
              
                  <label>Book Name:</label><br>
                  <input type="text" name="Book_name" autocomplete="off" id="Book_name" placeholder="Book Name"  
                  /> 
     
                  <div style="float:right;">
                     <img src="" width="200px" height="150px" name="student_Image" id="student_Image"  /><br>  
                     <input type="hidden" id="hidden_image_url" name="hidden_image_url"/>
                </div>

                    <br><br>
                <label>Page:</label><br>
              <input type="text" name="page_number" autocomplete="off" id="page_number"         placeholder="Total page"
                  /> 
    
                      <br><br>
                      <label>Publication Name:</label><br>
                      <input type="text" name="pulication" autocomplete="off" id="pulication" placeholder="Publication Name"/>
                         
    
                      <br><br>
                    <label>Department Book Name</label><br>
        <input type="text" name="Book_deaprtment" autocomplete="off" id="Book_deaprtment" placeholder="Department"/>
    
                      <br><br>
                      <label>Delivary price</label><br>
                        <input type="text" name="delivary_price" autocomplete="off" id="delivary_price" placeholder="Delivary price"/>
    
                        <br><br>
                        <label>Quanitiy</label><br>
                          <input type="text" name="quanitiy" autocomplete="off" id="quanitiy" placeholder="Quanitiy"/>
    

                          <br><br>
                          <label>Total price</label><br>
                            <input type="text" name="total_price" autocomplete="off" id="total_price" placeholder="Toatal price"/>
      
                            <br><br>
                            <label>Day</label><br>
                              <input type="text"  autocomplete="off" id="day" name="day" placeholder="Day"/>
                            <br><br>
                        
                          <label>Student Name</label><br>
                <input type="text" name="student_name" autocomplete="off" id="student_name" placeholder="Student Name"/>
                          <br><br>

                       
                          <label>Upload Date:</label><br>
                       <input type="text" name="add_date" autocomplete="off"   id="add_date" placeholder="Upload Date"/>
                  
                    <br><br>
     <input type="submit" id="save-btn" class="btn btn-success" value="Save" style="width:150px;"/> 
                        
                </form>
                
   
            </div>
         </div>
        </div>
    </div>

  <br>  <br>
    
<div class="card ml-2" style="width:1600px;">
 <div class="card-header">
 <div class="card-body">
    
  <div class="search_student_data">
    <label>Issue Book Live Search</label>

<input  type="text" id="search_bookIssue_data" placeholder=" Live Search for Roll ,Phone..."  style="width: 400px; padding: 10px;"/>
  </div>
<br>
<div id="loadData">
    <table class="table table-success">
        <thead class="table-dark">
           <tr>
               <th scope="col">Serial Id</th>
               <th scope="col">Book ID</th>
               <th scope="col">Book Name</th>
               <th scope="col">publication</th>
               <th scope="col">Department</th>
               <th scope="col">page</th>
               <th scope="col">Student Name</th>
               <th scope="col">Roll</th>
               <th scope="col">phone</th>
               <th scope="col">Delivary price</th>
               <th scope="col">Date</th>
               <th scope="col">Day</th>
               <th scope="col">Quantity</th>
               <th scope="col">Total price</th>
               <th scope="col">Edit</th>
               <th scope="col">Delete</th>
             </tr>
        </thead>
    
 
        <tbody>
      @foreach ($All_issue_book as $item)   
         <tr>
          <th>{{$item->id }}</th>
         <th>{{ $item->BookId }}</th>
         <th>{{ $item->BookName }}</th>
         <th>{{ $item->publication_Name }}</th>
         <th>{{$item->Department_book }}</th>
         <th>{{ $item->page }}</th>
         <th>{{ $item->student_Name }}</th>
         <th>{{ $item->student_Roll }}</th>
         <th>{{ $item->Phone }}</th>
         <th>{{ $item->price }}</th>
         <th>{{ $item->Delivary_Date }}</th>
         <th>{{ $item->Day }}</th>
         <th>{{ $item->sell_quanitiy }}</th>
         <th>{{ $item->Total_price }}</th>
         
           <th>
             <a href="#" id="update_id"  
                          data-id="{{ $item->id }} "
                          data-date="{{ $item->Delivary_Date }}" 
                          data-sell_quan ="{{ $item->sell_quanitiy }}" 
                          data-total_pr="{{ $item->Total_price }} " 
                          data-sell_price="{{ $item->price }} " 
                          data-book_id="{{ $item->BookId }} " 
              
                 data-toggle="modal" data-target="#UpdateModal"  class="btn btn-warning" >Edit</a> 
           </th>

           <th>
             <a href="#" id="delete-btn"   data-id="{{ $item->id }} "  class="btn btn-danger">Delete</a> 
           </th>
       </tr>
       @endforeach
      
        </tbody>
    </table>
</div>
</div>
</div>
</div>
 
<!-- Add Model-->
<div class="container">

    <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             
           <form id="issue_update_form">
            @csrf
            <label>price</label><br>
            <input type="text" name="up_price" id="up_price" autocomplete="off" placeholder="price"/>
            <br><br>

            <label>Quantity</label><br>
            <input type="text" name="up_quantity" id="up_quantity" autocomplete="off" placeholder="Quantity"/>
            <br><br>

            <label>Total price</label><br>
            <input type="text" name="up_total_price" id="up_total_price" autocomplete="off" placeholder="Total price"/>
            <br><br>

            <label>Upload Date:</label><br>
     <input type="text" name="add_date" autocomplete="off"  id="update_date" placeholder="Upload Date"/>
            <br><br>

              <input type="hidden" name="update_id" id="update_id"/>
              <input type="hidden" name="stock_quantity" id="stock_quantity"/>

     <input type="submit" id="update-btnn" class="btn btn-success" value="Update" style="width:150px;"/> 
            
          </form>
          
          </div>
  
        </div>
      </div>
    </div>
      </div>
      <!-- Add Model End-->
      @endsection
</body>


<script >
    $(document).ready(function(){
  
  $( "#Book_name" ).prop( "disabled", true );
  $( "#page_number" ).prop( "disabled", true );
  $( "#pulication" ).prop( "disabled", true );
  $( "#Book_deaprtment" ).prop( "disabled", true );
  $( "#delivary_price" ).prop( "disabled", true );
  $( "#total_price" ).prop( "disabled", true );
  $( "#student_name" ).prop( "disabled", true );
     

      //getBook Name
    $('#search_book_id').on('keyup',function(){
   var search_id=$(this).val();
   
         if(search_id != "") {
            $.ajax({
        url:"search_bookName/"+search_id,
          success:function(data){
          $('#Book_name').val(data);  
          // $('#page_number').val(data);  
           }
          });
        }
        });

       //getBook page
   $('#search_book_id').on('keyup',function(){
   var search_id=$(this).val();
   
         if(search_id != "") {
            $.ajax({
        url:"search_bookPage/"+search_id,
          success:function(data){
          $('#page_number').val(data);  
           }
          });
        }
        });
 
   //getBook pulication
  $('#search_book_id').on('keyup',function(){
   var search_id=$(this).val();
   
         if(search_id != "") {
            $.ajax({
        url:"search_bookpublication/"+search_id,
          success:function(data){
          $('#pulication').val(data);  
           }
          });
        }
        });
 
     //getBook Department Name
     $('#search_book_id').on('keyup',function(){
   var search_id=$(this).val();
   
         if(search_id != "") {
            $.ajax({
        url:"search_bookDepartment/"+search_id,
          success:function(data){
          $('#Book_deaprtment').val(data);  
           }
          });
        }
        });
 
 //getBook price
 $('#search_book_id').on('keyup',function(){
   var search_id=$(this).val();
   
         if(search_id != "") {
            $.ajax({
        url:"search_bookPrice/"+search_id,
          success:function(data){
          $('#delivary_price').val(data);  
           }
          });
        }
        });


    /// student Roll  search Name set
    $('#search_roll').on('keyup',function(){
   var search_stRoll=$(this).val();
   
         if(search_stRoll!="") {
            $.ajax({
        url:"search_studentName/"+search_stRoll,
          success:function(data){
          $('#student_name').val(data);  
       
           }
          });
        }
        });
           
//get Stock Quanity
$('#quanitiy').on('keyup',function(){
  var stock=0;

   var book_Id=$('#search_book_id').val();
   var quanitiy=$(this).val();;
   
  
  var delivary_price=$('#delivary_price').val();
  var total_price=quanitiy*delivary_price;
  $('#total_price').val(total_price);
 
 
       if(book_Id !="") {
            $.ajax({
        url:"search_stockQuantity/" + book_Id,
          success:function(data){
     
         var quan= Number(quanitiy);
          if(quan > data){
         alert("Your Quantity is Over.."+"Stock=>"+data);
          $( "#save-btn").prop("disabled",true );
          }else{
            $("#save-btn").prop("disabled",false );
          }   
         
           }
          });
        }   
        });


       // student Image
       $('#search_roll').on('keyup',function(){
        var search_stRoll=$(this).val();
   
         if(search_stRoll!="") {
            $.ajax({
        url:"search_Image/"+search_stRoll,
        //dataType: "JSON",
          success:function(data){
        $('#student_Image').attr('src',data);
        $('#hidden_image_url').val(data);
       
           }
          });
        }else{
            $('#student_Image').attr('src',"");  
            $('#hidden_image_url').val('');
        }
        });
 
      $('#from_bookadd').on('submit',function(e){
        e.preventDefault();
 
  $( "#Book_name" ).prop( "disabled", false );
  $( "#page_number" ).prop( "disabled", false );
  $( "#pulication" ).prop( "disabled", false );
  $( "#Book_deaprtment" ).prop( "disabled", false );
  $( "#delivary_price" ).prop( "disabled", false );
  $( "#total_price" ).prop( "disabled", false );
  $( "#student_name" ).prop( "disabled", false );
     
        var formData = new FormData(this);
          var bookId=$('#search_book_id').val();
          var book_name=$('#Book_name').val();
          var page_number=$('#page_number').val();

          var publication_name=$('#pulication').val();
          var departmetn_Name=$('#Book_deaprtment').val();
          var delivary_price=$('#delivary_price').val();
          var quanitiy=$('#quanitiy').val();
          var total_price=$('#total_price').val();
 
          var book_day=$('#day').val();
          var student_roll=$('#search_roll').val();
          var student_name=$('#student_name').val();
          var upload_date=$('#add_date').val();

        //  var image=$('#hidden_image_url').val();
       //   var image_path = image.split("Student_image/");
          // alert(student_roll);
 
    if(document.getElementById("search_book_id").value==""){
      alert("Search Id is Empty");
      document.getElementById("search_book_id").style.borderColor="RED";

     }else if(document.getElementById("search_roll").value==""){
      alert("Studnet Roll is Empty");
      document.getElementById("search_roll").style.borderColor="RED";

     }
     else if(document.getElementById("Book_name").value==""){
      alert("Book Name is Empty");
      document.getElementById("Book_name").style.borderColor="RED";

     }else if(document.getElementById("page_number").value==""){
      alert("Page is Empty");
      document.getElementById("page_number").style.borderColor="RED";

     }else if(document.getElementById("pulication").value==""){
      alert("Publication Name is Empty");
   document.getElementById("pulication").style.borderColor="RED";

     }else if(document.getElementById("Book_deaprtment").value==""){
      alert("Department Name is Empty");
      document.getElementById("Book_deaprtment").style.borderColor="RED";

     }else if(document.getElementById("delivary_price").value==""){
      alert("Sell price is Empty");
      document.getElementById("delivary_price").style.borderColor="RED";

     }else if(document.getElementById("quanitiy").value==""){
      alert("Sell Quantity is Empty");
      document.getElementById("quanitiy").style.borderColor="RED";

     }else if(document.getElementById("total_price").value==""){
      alert("Total Price is Empty");
      document.getElementById("total_price").style.borderColor="RED";

     }else if(document.getElementById("day").value==""){
      alert("Day is Empty");
      document.getElementById("day").style.borderColor="RED";

     }else if(document.getElementById("student_name").value==""){
      alert("Student Name is Empty");
      document.getElementById("student_name").style.borderColor="RED";

     }else if(document.getElementById("add_date").value==""){
      alert("Issue Date is Empty");
      document.getElementById("add_date").style.borderColor="RED";
     }else if(book_day>5){
      alert("Book Delivary Only 5 Day Allowed..");
     } else{
    

      document.getElementById("add_date").style.borderCollapse="collapse";
      document.getElementById("student_name").style.borderCollapse="collapse";
      document.getElementById("day").style.borderCollapse="collapse";
      document.getElementById("total_price").style.borderCollapse="collapse";
      document.getElementById("quanitiy").style.borderCollapse="collapse";
      document.getElementById("delivary_price").style.borderCollapse="collapse";
      document.getElementById("Book_deaprtment").style.borderCollapse="collapse";
      document.getElementById("pulication").style.borderCollapse="collapse";
      document.getElementById("page_number").style.borderCollapse="collapse";
      document.getElementById("Book_name").style.borderCollapse="collapse";
      document.getElementById("search_book_id").style.borderCollapse="collapse";
      document.getElementById("search_roll").style.borderCollapse="collapse";

        $.ajax({
    
       url:"Issue_insert/"+ student_roll,
           type: "POST",
          data: formData,
         cache:false,
         contentType: false,
         processData: false,
            success:function(data){
          alert("Book Issue SuccessFull..");
           // alert(data);
       
          $('#search_book_id').val('');
         $('#Book_name').val('');
          $('#page_number').val('');

          $('#pulication').val('');
          $('#Book_deaprtment').val('');
          $('#delivary_price').val('');
         $('#quanitiy').val('');
          $('#total_price').val('');
 
         $('#day').val('');
          $('#search_roll').val('');
           $('#student_name').val('');
          $('#add_date').val('');
          $('#hidden_image_url').val('');
         window.location.reload(); 
         
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
 
  var book_Id= $(this).data("book_id");            
  var update_id= $(this).data("id");
    var sell_price= $(this).data("sell_price");
    var date= $(this).data("date");
    var sell_quan= $(this).data("sell_quan");
    var total_price= $(this).data("total_pr");

         $("#update_id").val(update_id);
         $('#update_date').val(date);
          $('#up_quantity').val(sell_quan);
          $('#up_total_price').val(total_price);
          $('#up_price').val(sell_price);
 
         $("#up_total_price").prop("disabled", true);
         $("#up_price").prop("disabled", true);  
     
 //stock_quantity 
      $.ajax({
      url:"update_Quantity/"+ book_Id,
      success:function(data){
      $('#stock_quantity').val(data);
      }
     });  
   
      });


      $(document).on('click','#update-btnn',function(e){
      e.preventDefault();

      var serial_id= $("#update_id").val();
 
      var sell_quan= $("#up_quantity").val();
      var sell_price= $("#up_price").val();

      var update_date= $("#update_date").val();
       var stock= $('#stock_quantity').val();

       var update_total_price= sell_price*sell_quan;
        $('#up_total_price').val(update_total_price);  
      var total_price= $('#up_total_price').val();
      
      var token = $("meta[name='csrf-token']").attr("content");
          var quan= Number(sell_quan);

 if(document.getElementById("up_quantity").value==""){
      alert("Quantity is Empty");
      document.getElementById("up_quantity").style.borderColor="RED";

     }else if(document.getElementById("update_date").value==""){
      alert("Update  Date is Empty");
      document.getElementById("update_date").style.borderColor="RED";
     }else{
       
  if(quan > stock){
  alert("Your Quantity is Orver..."+stock);
  //  $("#update-btnn").prop("disabled", true );
   } else{

   $.ajax({

url:"bookIssue_update/"+ serial_id,
type:"POST",
// data: $('#issue_update_form').serialize(),
data:{
  _token:token,
  total_price:total_price,
  sell_quan:sell_quan,
  update_date:update_date 
},
  success:function(data){
  alert(data);
  $('#UpdateModal').modal().hide();
  jQuery('#issue_update_form').trigger("reset");
  window.location.reload();
}
});  
     
  } 
  
     }

 });
 
 //delete Button
 $(document).on('click','#delete-btn',function(e){
   e.preventDefault();

      var delete_id=$(this).data('id');
       
       var elemant=this;
       $.ajax({
           url:"book_issue_delete",
           data:{
            'delete_id':delete_id
           },
           success:function(data){
            alert(data);
            $(elemant).closest('tr').fadeOut();
           }
       });
 });


 //Live Serarch BookIssue 
 $('#search_bookIssue_data').keyup(function(){
         var search_data= $(this).val();
 
          if (search_data !="") {
           $.ajax({
               url:"Book_issue_search",
                type:"GET",
               data:{
                search_data:search_data
               },  
               success:function(data){
               $('tbody').html(data);
        
               }
           });  

          }else{
            window.location.reload();
          }
       });

    });
 
   
 </script>
</html>