 @include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<!-- CSRF Token -->
{{--     <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>Document</title>
   <link href="css/style.css" media="all" rel="stylesheet"/>

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

   <style>
     <style>
   input[type=text]{
 height:50px;
 font-size:18px;
 width:400px;
 }

 #book_data{
     border-style: hidden;
	 background-color:LavenderBlush;
	 width:100%;
   }

   </style>
</head>
<body>


{{--   sid Navigation --}}
 {{--
<input type="checkbox" id="check"/>
<label for="check">
  <i class="fas fa-bars" id="btn"></i>
  <i class="fas fa-times" id="cancle"></i>
</label>

    <div class="sidebar" style="margin-top: 0%; top: 0%;">
        <header>MY Deshboard</header>
        <ul>
            <li><a href="{{url('Book_nameAdd')}}"><i class="fas fa-qrcode"></i>Book Name Add</a></li>
        <li><a href="{{url('publication_From')}}"><i class="fal fa-shopping-cart"></i>Publication  Add</a></li>
            <li><a href="#"><i class="fas fa-layer-group"></i>Student Add</a></li>
            <li><a href="#"><i class="fas fa-hand-holding-usd"></i>Profite</a></li>
            <li><a href="#"><i class="fas fa-shopping-bag"></i>Sell Product</a></li>
            <li><a href="#"><i class="far fa-address-book"></i>User Area Add</a></li>
            <li><a href="#"><i class="far fa-code"></i>Voucher Cord Add</a></li>
            <li><a href="#"><i class="fas fa-phone-slash"></i>User Order Cancle</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>User Login Information</a></li>
            <li><a href="#"><i class="fas fa-user-lock"></i>Admin Login Infromation</a></li>
            <li id="log_out"><a  href="#"><i class="fas fa-power-off"></i>Log Out</a></li>
        </ul>
  </div>

  --}}
{{-- end side Navigation --}}

  <div id="slider">
    <figure>
 <img src="/Image/image6.jpg" />
 <img src="/Image/image2.jpg" />
 <img src="/Image/im.jpg" />
  <img src="/Image/image5.jpg" />
  <img src="/Image/image4.jpg" />
   </figure>
   </div>


        <div class="Mysection" id="book_data">

            <div class="row text-center justify-content-center mt-3">
              {{-- card-1 start --}}
              <div class="col-lg-2 d-block d-lg-flex col-md-6 col-sm-12">

                <div class="card "  style="width:300px;" >
                 <div class="inner">
                    <img class="card-img-top" src="/Image/card1.jpg"  height="200px" width="250px" style="text-align: center; height: 260px;"/>
                 </div>

                 <div class="card-body text-center">

            <p class="card-text">
              The speaker of parliament underwent 16 hours of surgery to remove shrapnel from his lungs, abdomen and liver.
           </p>
          </div>

            <div class="card-footer">
                  Book
              </div>

          </div>
         </div>
     {{-- card-1 end --}}

    {{-- card-2 start --}}
         <div class="col-lg-2 d-block d-lg-flex col-md-6 col-sm-12 ">

          <div class="card "  style="width:300px;" >
             <div class="inner">
              <img class="card-img-top" src="/Image/card2.jpg"  height="200px" width="250px" style="text-align: center; height: 260px;"/>
             </div>

           <div class="card-body text-center">

      <p class="card-text">
        The speaker of parliament underwent 16 hours of surgery to remove shrapnel from his lungs, abdomen and liver.
     </p>
    </div>

      <div class="card-footer">
            Book
        </div>

    </div>
   </div>
{{-- card-2 end --}}


 {{-- card-3 start --}}
   <div class="col-lg-2 d-block d-lg-flex col-md-6 col-sm-12 ">

    <div class="card"  style="width:300px;" >
      <div class="inner">
        <img class="card-img-top" src="/Image/cared3.jpg"  height="200px" width="250px" style="text-align: center; height: 260px;"/>
      </div>
     <div class="card-body text-center">

<p class="card-text">
  The speaker of parliament underwent 16 hours of surgery to remove shrapnel from his lungs, abdomen and liver.
</p>
</div>

<div class="card-footer">
      Book
  </div>

</div>
</div>
{{-- card-3 end --}}


{{-- card-4 start--}}
<div class="col-lg-2 d-block d-lg-flex col-md-6 col-sm-12 ">

  <div class="card "  style="width:300px;" >
    <div class="inner">
      <img class="card-img-top" src="/Image/card5.jpg"  height="200px" width="250px" style="text-align: center; height: 260px;"/>
    </div>
   <div class="card-body text-center">

<p class="card-text">
The speaker of parliament underwent 16 hours of surgery to remove shrapnel from his lungs, abdomen and liver.
</p>
</div>

<div class="card-footer">
    Book
</div>

</div>
</div>
{{-- card-5 end --}}


 {{-- card-3 start --}}
 <div class="col-lg-2 d-block d-lg-flex col-md-6 col-sm-12 ">

  <div class="card"  style="width:300px;" >
    <div class="inner">
      <img class="card-img-top" src="/Image/card6.jpg"  height="200px" width="250px" style="text-align: center; height: 260px;"/>
    </div>
   <div class="card-body text-center">

<p class="card-text">
The speaker of parliament underwent 16 hours of surgery to remove shrapnel from his lungs, abdomen and liver.
</p>
</div>

<div class="card-footer">
    Book
</div>

</div>
</div>
{{-- card-5 end --}}


  </div>


            <div class="title mt-2 mb-2">
              <marquee   direction="left">
                <h3 style="margin-top: 20px"> FENI POLYTECHNIC INSTITUTE LIBARY MANAGMENT</h3>

              </marquee>
            </div>

           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.7965107994833!2d91.40849871480094!3d23.03124258494857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375369ae3d72f73b%3A0xaf6db3b21c8e61e9!2sFeni%20Polytechnic%20Institute-FPI!5e0!3m2!1sen!2sbd!4v1620934677544!5m2!1sen!2sbd" width="100%" height="400px" style="border:0; margin-top: 20px;" allowfullscreen="" loading="lazy"></iframe>



        </div>


  <!-- Add Model-->
  <div class="container">

<!-- Modal -->
<div class="modal fade" id="login_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


<div id="messages">

</div>
{{--    start form  --}}
  <form id="student_logForm">
     @csrf
       <label>Gmail:</label><br>
    <input type="text" name="st_gmail"   autocomplete="off" id="st_gmail"
     placeholder="Gmail Name" style="width: 300px; height: 50px;"/>
     <div id="st_gmail_error" style="color: red;display: none;">Gmail is Empty..</div>
      <br><br>

  <label>password:</label><br>
   <input type="password" name="password" id="password" autocomplete="off" placeholder="password" style="width: 300px; height: 50px;"/>
   <div id="st_pass_error" style="color: red;display: none;">Password is Empty..</div>
    <br><br>

   <input type="submit" id="log-btn" class="btn btn-success" value="Login" style="width:150px;"/>
   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </form>
      {{-- End form  --}}

      </div>

    </div>
  </div>
</div>
     </div>
        <!-- Add Model End-->

   <footer>
        <div class="footer_id">
                 <div class="libary_deatils">
                  <p style=" margin-left: 10%; color: white; font-size: 24px; margin-top: 20px; font-family:'Times New Roman', Times, serif;">FENI POLYTECHNIC INSTITUTE FENI </p>

			<p style=" margin-left: 10%; color: white; font-size: 18px; margin-top: 10px;">
			  Foleshwor<br>

			 <li style="list-style-type: none; font-size: 20px; margin-left: 10%; color: white;"><i class="fa fa-phone-square" aria-hidden="true"></i> 01688709257(Principal),<br>
               0331 74030,Fax- 0331 69031</li>

               	 <li  style="list-style-type: none; font-size: 20px; margin-left: 10%; color: white;"><i class="fa fa-envelope" aria-hidden="true"></i> Post -Malipur, Post Code-3900</li>

               <li  style="list-style-type: none; font-size: 20px; margin-left: 10%; color: white;"><i class="fa fa-globe" aria-hidden="true"></i> info@fenipoly.edu.bd,
               reg_fpi@fenipoly.edu.bd</li>

        <li style="font-size: 18px; color:white; list-style-type: none; margin-left: 10%;">Copyright ©2020 UTC. All Rights Reserved.| Developed by</li>
			  </p>

       </div>

       <div class="Usefull">

        <p style="color: white; font-size: 24px;">Usefull Links<br>

          <h5 style="color: white; "><a href="#" >Home</a></h5>

          <h5 style="color: white; margin-top: 20px;"><a href="#">Servie</a></h5>

           <h5 style="color: white; margin-top: 20px;" >Login</a></h5>
           <hr>

       </p>

       </div>

        </div>
   </footer>


   <script>
     $(document).ready(function(){

      $('#st_gmail').val('');
        $('#password').val('');

       $('#student_logForm').on('submit',function(e){
            e.preventDefault();
                 var user_gmail=$('#st_gmail').val();
                 var password=$('#password').val();

      if(document.getElementById("st_gmail").value==""){
           alert("Your Gmail is Empty");
     }else if(document.getElementById("st_gmail").value==""){
      alert("Your Pasword is Empty");
     }else{
        $.ajax({
                    url:"{{ url('/longin_student') }}",
                   //  type: "POST",
                   data: $('#student_logForm').serialize(),
                    success:function(data){
                    if(data=="Login SuccessFull.."){
                    alert(data);
                  pageLocation(user_gmail);
           //     $('#exampleModal').modal('hide');
         //
                      }else{
                        alert(data);
                   $('#st_gmail').val('');
                    $('#password').val('');
                      }

                     }
                    });
               }

                  });
                  

                  function  pageLocation(user_gmail){
                   // var test=$('#student_logForm').serialize();
                    $.ajax({
                      url:"lg_student_page/"+ user_gmail,
                     /*  data:{
                        user_gmail:user_gmail
                      }, */
                    success:function(data){
            window.location.href = "lg_student_page/"+ user_gmail
                    // console.log(data);
                    $('#st_gmail').val('');
                    $('#password').val('');

                    }
                    });
                  }

                     });

   </script>

</body>
</html>
