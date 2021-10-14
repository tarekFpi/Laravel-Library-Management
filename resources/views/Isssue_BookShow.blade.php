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
          
</head>
<body>
     
    <div class="container mt-3 ml-1">
        <div class="card" style="width: 1600px;">
             <div class="card-header">
                <h3 style="text-align: center;">Student Book Issue Show</h3>
 
                  @foreach ($getAllData as $item)
                  <?php  $user_gmail =$item->Gmail ?>
                 <a href="{{ url('lg_student_page/'.$user_gmail)}}" class="btn btn-info" 
                 style="margin-left: 20px; width: 200px;">Student Information</a>
                 @endforeach
              
                <div class="card-body ">
                    <p style="text-align: center; font-size: 18px;">
                        <?php  $date = date('Y-m-d'); echo "Current Date:".$date; ?>
                    </p>
                
                     <table class="table table-success" id="table-data">
                         <thead>
                            <tr>
                                <th scope="col">Serial Id</th>
                                <th scope="col">Book Id</th>
                                <th scope="col">Book Name</th>
                                <th scope="col">Publication</th>
                                <th scope="col">Department</th>
                                <th scope="col">page</th>
                                <th scope="col"> Name</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Delivary Date</th>
                                <th scope="col">Day</th>
                                <th scope="col">price</th>
                                <th scope="col">Sell Quatity</th>
                                <th scope="col">Total price</th>
                                <th scope="col">Fine</th>
                              </tr>
                         </thead>
 {{--    `id`,`BookId`,`BookName`,`publication_Name`,`Department_book`,`page`
               `student_Name` `student_Roll` `Phone` `Delivary_Date` `Day` `sell_quanitiy` `price` `Total_price` --}}
                         
                         <tbody>
                         @foreach ($getIssue as $item)
                          
                          <tr>
                          <th>{{ $item->id}}</th>
                          <th>{{ $item->BookId }}</th>
                          <th>{{ $item->BookName }}</th>
                          <th>{{ $item->publication_Name }}</th>
                          <th>{{ $item->Department_book }}</th>
                          <th>{{ $item->page }}</th>
                          <th>{{ $item->student_Name }}</th>
                          <th>{{ $item->student_Roll }}</th>
                          <th>{{ $item->Phone }}</th>
                          <th>{{ $item->Delivary_Date }}</th>
                          <th>{{ $item->Day }}</th>
                          <th>{{ $item->price }}</th>
                          <th>{{ $item->sell_quanitiy }}</th>
                          <th>{{ $item->Total_price }}</th>
                           @if(!empty($fine))
                            <th>{{ $fine }}</th>  
                           @endif   
 
                      {{--     @foreach ($getAllData as $getImage)
                          <th><img src="{{ $getImage->Image }}" width="200px" height="150px"/></th>
                          @endforeach   --}}
                        </tr>
                        @endforeach  
                      
                         </tbody>
                     </table>
                </div>
             </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
</body>
</html>