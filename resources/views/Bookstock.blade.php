@extends('admin_muster')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>

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
    
    <div class="container" style="margin-top: 80px;">
        <div class="card" style="width: 1500px;">
             <div class="card-header">
                <h3 style="text-align: center;">Book Stock</h3>

                <div class="search_student_data">
                  <label>Stock Live Search</label>
              <input  type="text" id="search_stock_data" autocomplete="off" placeholder=" Live Search for Book Id,Name ,Pablication Name,Department Name..."  style="width: 500px; padding: 10px;"/>
                </div>
              <br>
                <div class="card-body ">
                     <table class="table table-success" id="test_table">
                         <thead>
                            <tr>
                             
                                <th>Book Id</th>
                                <th>Book Name</th>
                                <th>Publication Name</th>
                                <th>Department Name</th>
                                <th>Page</th>
                                <th>Delivary price</th>
                                <th>Purchase Quanitiy</th>
                                <th>Sell Quanitiy</th>
                                <th>Stock</th>
                                <th>Image</th>
                              </tr>
                         </thead>
                        
                         <tbody>
               
                       @foreach($stock as $item) 
                       <?php $sell_q=0; $Stock_pd=0; ?>
                      
                      @if($item->sell_unit>0)

                      <?php 
                        $sell_q= $item->sell_unit;
                      ?>
                       @endif  

                     <?php 
                      $Stock_pd= $item->parchas_unit-$sell_q;
                      ?>
                      <tr>
                       
                           <th>{{ $item->BookId }}</th>
                          <th>{{ $item->BookName }}</th>
                          <th>{{ $item->publication_name }}</th>    
                          <th>{{ $item->DepartmentName }}</th>    
                          <th>{{ $item->page }}</th>    
                          <th>{{ $item->Delivary_price }}</th>    
                          <th>{{ $item->parchas_unit }}</th>    
                          <th>{{ $sell_q}}</th> 
                          <th>{{ $Stock_pd }}</th>
                          <th><img src="{{ $item->image }}" width="200px" height="150px"/></th>
                        </tr>
                        @endforeach 
                     
                         </tbody>
                     </table>
                </div>
             </div>
            </div>
          </div>

          <script>

            $(document).ready(function(){
                  
                  
   ///live search student data
       $('#search_stock_data').keyup(function(){
         var search_data= $(this).val();
          //  alert(search_data);
          if (search_data !="") {
           $.ajax({
               url:"stock_search",
                type:"GET",
               data:{
                search_data:search_data
               },  
               success:function(data){
               
                $('tbody').html(data);
               // alert(data);   
               }
           });  
          } else{
            window.location.reload();
          } 
       });

            });
          </script>
</body>
</html>