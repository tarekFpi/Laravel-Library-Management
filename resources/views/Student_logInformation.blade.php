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
        <div class="card" style="width: 1400px;">
             <div class="card-header">
                <h3 style="text-align: center;">Student Infromation Show</h3>

                @foreach ($getAlldata as $item)
                <?php  $student_roll =$item->Roll ?>
               <a href="{{ url('issue_book.show/'.$item->Roll )}}" class="btn btn-info" 
               style="margin-left: 20px; width: 150px;">Issue Book</a>
               @endforeach
                  
               <a href="{{ url('/' )}}" class="btn btn-danger" 
                style="margin-left: 20px; width: 150px;">LogOut</a>

                <div class="card-body ">
                     <table class="table table-success" id="table-data">
                         <thead>
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
                               {{--  <th scope="col">Image</th> --}}
                              </tr>
                         </thead>
         
                         <tbody>
                         @foreach ($getAlldata as $item)
                        
                          <tr>
                          <th>{{$item->id}}</th>
                          <th>{{ $item->Name }}</th>
                          <th>{{ $item->Roll }}</th>
                          <th>{{ $item->Gender }}</th>
                          <th>{{ $item->Department }}</th>
                          <th>{{ $item->Semester }}</th>
                          <th>{{ $item->Section }}</th>
                          <th>{{ $item->phone }}</th>
                          <th>{{ $item->Gmail }}</th>
                          <th>{{ $item->password }}</th>
                   
                     {{--   <th> 
                           <img src="{{ $item->Image }}"  width="200px" height="150px"/>
                    </th> --}}
                
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