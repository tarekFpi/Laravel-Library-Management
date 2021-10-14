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
            <h3 style="text-align: center;">Book Add</h3>

            <div class="card-body ">


  
                <form id="from_bookadd" enctype="multipart/form-data">
                    @csrf
                    <label>Book Id</label><br>
          <input type="text" name="book_id" id="book_id" autocomplete="off" placeholder="Book Id" />
          <div id="bookid_id_error" style="color: red;display: none; height: 10px;">Book Id is Empty..</div>
              <br><br>
    
                  <label>Book Name:</label><br>
    
                         <select name="book_name" id="book_name">   
                            <option>Select--Book--Name</option>
                            @foreach($getname as $item)
                            <option>{{ $item->Name }}</option>
                            @endforeach
                        </select>
           <div id="bookid_name_error" style="color: red;display: none; height: 10px;">Book Name is Empty..</div>
                        <br><br>
    
         <label>Page:</label><br>
      <input type="text" name="page_number" autocomplete="off" id="page_number" placeholder="Total page"
         /> 
   <div id="bookid_page_error" style="color: red;display: none; height: 10px;">Book Page Number is Empty..</div>
      
    {{--      @if(!empty($getpublicationName))
         {{ $getpublicationName }}
     @endif --}}
        {{-- @if(isset($getpbName))
        {{ $getpbName }}
         @endif --}}
        
                    <br><br>
                    <label>Book Details:</label><br>
                    <textarea placeholder="Book Deatils" autocomplete="off" name="book_deatils" id="book_deatils">
                    </textarea>
                    <div id="bookid_deatils_error" style="color: red;display: none; height: 10px;">Book Deatils is Empty..</div>
      
                      <br><br>
                      <label>Publication Name:</label><br>
                 <select name="publication_name" id="publication_name">
                     <option>Select--publication--Name</option>  
                     @foreach ($publication as $pub_name)
                     <option>{{ $pub_name->publication_name }}</option>
                     @endforeach
                 </select>
   <div id="bookid_publName_error" style="color: red;display: none; height: 10px;">Book Publication Name is Empty..</div>
    
                      <br><br>
                    <label>Department Name</label><br>
                    <select name="department_name" id="department_name">
                        <option>Select--Department</option>
    
                        @foreach ($department as $item_name)
                        <option>{{$item_name->Name}}</option>
                        @endforeach
                    </select>
  <div id="bookid_departName_error" style="color: red;display: none; height: 10px;">Book Department Name is Empty..</div>
    
                      <br><br>
                      <label>Delivary price</label><br>
                        <input type="text" name="delivary_price" autocomplete="off" id="delivary_price" placeholder="Delivary price"/>
    <div id="bookid_sell_error" style="color: red;display: none; height: 10px;">Sell price is Empty..</div>

                        <br><br>
                        <label>Quanitiy</label><br>
                          <input type="text" name="quanitiy" autocomplete="off" id="quanitiy" placeholder="Quanitiy"/>
       <div id="bookid_quantity_error" style="color: red;display: none; height: 10px;">Quantity is Empty..</div>
                          <br><br>

                          <label>Upload Date:</label><br>
                       <input type="text" name="add_date" autocomplete="off"  id="add_date" placeholder="Date"/>
                       <div id="bookid_date_error" style="color: red;display: none; height: 10px;">Date is Empty..</div>
                       <br><br>

                       <label>Upload Book Image:</label><br>
                    <input type="file" name="uploadfile" id="uploadfile"  accept="image/*"/>
  <div id="bookid_image_error" style="color: red;display: none; height: 10px;">Image is Empty..</div>
                   
                    <br><br>
    <input type="submit" id="save-btnn" class="btn btn-success" value="Save" style="width:150px;"/> 
                        
                </form>
                
   
            </div>
         </div>
        </div>
    </div>

  <br>  <br>
 
<div class="card ml-2">
 <div class="card-header">
 <div class="card-body">

  <div class="search_student_data">
    <label>Book Live Search</label>
<input  type="text" id="search_book_data" placeholder=" Live Search for Id,Name ,Publication,Department ..."  style="width: 400px; padding: 10px;"/>
  </div>
<br>
<div id="loadData">
    <table class="table table-success table-responsive-lg table-striped">
        <thead class="table-dark">
           <tr>
               <th scope="col">Serial Id</th>
               <th scope="col">Book Id</th>
               <th scope="col">Book Name</th>
               <th scope="col">page</th>
               <th scope="col">Datails</th>
               <th scope="col">publication</th>
               <th scope="col">Department</th>
               <th scope="col">Delivary price</th>
               <th scope="col">Quantity</th>
               <th scope="col">Date</th>
               <th scope="col">Image</th>
               <th scope="col">Update</th>
               <th scope="col">Delete</th>
             </tr>
        </thead>
 

        <tbody>
       @foreach ($BookAll as $item)   
         <tr>
         <th>{{$item->id}}</th> 
          <th>{{$item->BookId}}</th>
         <th>{{ $item->BookName }}</th>
         <th>{{ $item->page }}</th>
         <th>{{$item->BookDetails}}</th>
         <th>{{ $item->publication_name }}</th>
         <th>{{ $item->DepartmentName }}</th>
         <th>{{$item->Delivary_price}}</th>
         <th>{{ $item->Quanitiy }}</th>
         <th>{{ $item->Update_Date }}</th>
         <th><img src="{{ $item->image }}" width="200px" height="150px"/></th>
         
            <th>
             <a href="#" id="update_id"
             
                   data-id="{{ $item->id }}"
                   data-price="{{ $item->Delivary_price }}"
                  data-quantity="{{ $item->Quanitiy }}"
               class="btn btn-warning" data-toggle="modal" data-target="#UpdateModal" >Edit</a> 
           </th>

           <th>
             <a href="#" id="delete-btn" data-id="{{ $item->id }}" class="btn btn-danger">Delete</a> 
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
               
           <form id="book_update_form">
            @csrf
            <label>Delivary price</label><br>
            <input type="text" name="up_price" id="up_price" autocomplete="off" placeholder="price"/>
            <br><br>

            <label>Quantity</label><br>
            <input type="text" name="up_quatity" id="up_quatity" autocomplete="off" placeholder="Quantity"/>
            <br><br>
 
              <input type="hidden" name="update_serial_id" id="update_serial_id"/>
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


<script >
    $(document).ready(function(){
  // alert("hello");
     
    $('#book_id').on('keyup',function(){
           var book_id=$(this).val();
    
         $.ajax({
        url:"BookAdd_exits/" + book_id,
          success:function(data){
     $('#publication_name').html("'<option>"+data+"</option>'");   
           }
          });
 
        });
           //getBookName
         $('#book_id').on('keyup',function(){
           var book_id=$(this).val();
        
         $.ajax({
        url:"BookName_exits/" + book_id,
          success:function(data){
         ///   if(data!==''){
     $('#book_name').html("'<option>"+data+"</option>'");
           }
          });
 
        });

      // getDepartment Name
        $('#book_id').on('keyup',function(){
           var book_id=$(this).val();
        
         $.ajax({
        url:"departName_exits/" + book_id,
          success:function(data){
    $('#department_name').html("'<option>"+data+"</option>'");
           }
          });
 
        });
  
 ///insert form
   $('#book_deatils').val('');
      $('#from_bookadd').on('submit',function(e){
        e.preventDefault();
        var formData = new FormData(this);
          var bookId=$('#book_id').val();
          var book_name=$('#book_name').val();
          var page_number=$('#page_number').val();
          var book_deatils=$('#book_deatils').val();

          var publication_name=$('#publication_name').val();
          var departmetn_Name=$('#department_name').val();
          var delivary_price=$('#delivary_price').val();
          var quanitiy=$('#quanitiy').val();
          var addDate=$('#add_date').val();
          var upload_image=$('#uploadfile').val();
         
    if(document.getElementById("book_id").value==""){
           alert("Book Id is Empty");
           $('#bookid_id_error').show();
           $('#bookid_id_error').focus();

     }else if(document.getElementById("book_name").value==""){
          alert("Book Name is Empty");
           $('#bookid_name_error').show();
           $('#bookid_name_error').focus();
     }else if(document.getElementById("page_number").value==""){
          alert("Book page is Empty");
           $('#bookid_page_error').show();
           $('#bookid_page_error').focus();
     }else if(document.getElementById("book_deatils").value==""){
          alert("Book Details is Empty");
           $('#bookid_deatils_error').show();
           $('#bookid_deatils_error').focus();
     }else if(document.getElementById("publication_name").value==""){
          alert("Book Publication Name is Empty");
           $('#bookid_publName_error').show();
           $('#bookid_publName_error').focus();
     }else if(document.getElementById("department_name").value==""){
          alert("Book  Department Name is Empty");
           $('#bookid_departName_error').show();
           $('#bookid_departName_error').focus();
     }
     else if(document.getElementById("quanitiy").value==""){
          alert("Book Quantity is Empty");
           $('#bookid_quantity_error').show();
           $('#bookid_quantity_error').focus();
     }else if(document.getElementById("delivary_price").value==""){
          alert("Sell price is Empty");
           $('#bookid_sell_error').show();
           $('#bookid_sell_error').focus();
     }else if(document.getElementById("add_date").value==""){
          alert("Book Date  is Empty");
           $('#bookid_date_error').show();
           $('#bookid_date_error').focus();
     }else if(document.getElementById("uploadfile").value==""){
          alert("Book Image is Empty");
           $('#bookid_image_error').show();
           $('#bookid_image_error').focus();
     }else{
     
            $.ajax({
    
        url:"{{ url('/Book_insert') }}",
           type: "POST",
          data: formData,
         cache:false,
         contentType: false,
         processData: false,
            success:function(data){
          alert(data);
           //showData();
           $('#book_id').val('');
             $('#book_name').val('');
            $('#page_number').val('');
           $('#book_deatils').val('');

          $('#publication_name').val('');
          $('#department_name').val('');
           $('#delivary_price').val('');

           $('#quanitiy').val('');
          $('#add_date').val('');
         $('#uploadfile').val('');
         window.location.reload();
            }
          }); 
  
         }
 
      });

      $(document).on('click','.btn-close',function(){
      window.location.reload();
      });
       
       ///update getData
       $(document).on('click','#update_id',function(e){
         e.preventDefault();

    var update_id= $(this).data('id');
    var quantity= $(this).data('quantity');
    var price= $(this).data('price');

           $('#update_serial_id').val(update_id);
             $('#up_price').val(price);
             $('#up_quatity').val(quantity);
          
       });

///update form
  $('#book_update_form').on('submit',function(e){
  e.preventDefault();   
    var serial_id= $('#update_serial_id').val();

    if(document.getElementById("up_price").value==""){
      alert("Price is Empty");
      document.getElementById("up_price").style.borderColor="RED";

     }else if(document.getElementById("up_quatity").value==""){
      alert("Quantity is Empty");
      document.getElementById("up_quatity").style.borderColor="RED";
     }else{
      document.getElementById("up_quatity").style.borderCollapse="collapse";
      document.getElementById("up_price").style.borderCollapse="collapse";

      $.ajax({
            url:"book_update/"+ serial_id,
            type:"POST",
            data:$('#book_update_form').serialize(),
            success:function(data){
              alert(data);
              $('#UpdateModal').modal().hide();
              window.location.reload();
             jquery('#book_update_form').trigger('reset');
             
            }
        });
  }
       });


       //Delete Data
        $(document).on('click','#delete-btn',function(e){
          e.preventDefault();
             var elemant=this;

                var delete_id=$(this).data('id');
             $.ajax({
                url:"book_delete",
                data:{
                  delete_id:delete_id
                },
                success:function(data){
                 alert(data);
                  $(elemant).closest('tr').fadeOut();
                }
             });
        });

        //Live Serarch Book 
        $('#search_book_data').keyup(function(){
         var search_data= $(this).val();
 
          if (search_data !="") {
           $.ajax({
               url:"Book_search",
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

    });
 
   
 </script>
</html>