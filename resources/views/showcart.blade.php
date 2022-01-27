<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>FANS agency</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                        <h1 style="color:red ; font-size:20px;margin-top:30px;font-family:italic"><strong>FANS agency</strong></h1>
                        
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>

                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    cart{{$count}}
                                </a>
                                @endauth

                                @guest
                                cart[0]
                                @endguest
                            </li>

                            <li>
                            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                       <li>
                           <x-app-layout>
  
                            </x-app-layout>
                        </li>
                    @else
                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                            </li>
                        </ul>        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <div id="top">
        <table align="center" bgcolor="black" style="text-align:center;" class="table">
            <tr>
                <th scope="col" style="padding:30px;color:white">Title</th>
                <th scope="col" style="padding:30px;color:white">Price</th>
                <th scope="col" style="padding:30px;color:white">Number</th>
                <th scope="col" style="padding:30px;color:white">Action</th>
            </tr>

            <form action="{{url('orderconfirm')}}" method="post">
                @csrf
            @foreach($data as $data)
                <tr>
                    <td  style="padding:30px;color:white">
                        <input type="text" name="title[]" value="{{$data->title}}" hidden="">
                        {{$data->title}}
                    </td>
                    <td  style="padding:30px;color:white">
                        <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                        {{$data->price}}
                    </td>
                    <td  style="padding:30px;color:white">
                        <input type="text" name="nombre[]" value="{{$data->nombre}}" hidden="">
                        {{$data->nombre}}
                    </td>
                    
                </tr>
            @endforeach

            @foreach($data2 as $data2)
            <tr style="position:relative;top:-200px;right:-1000px;">
            <td style="padding:30px;color:white"><a href="{{url('/remove',$data2->id)}}" class="btn btn-danger">Remove</a></td>
            </tr>
            @endforeach
        </table>

        <div align="center" style="padding:10px">
            <button type="button" id="order" class="btn btn-primary">Order now</button>
        </div>

        <div align="center"  id="appear" style="padding:10px; display:none;">
            <div style="padding:10px">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div style="padding:10px">
                <label for="">Phone</label>
                <input type="text" name="phone" placeholder="Phone">
            </div>
            <div style="padding:10px">
                <label for="">Address</label>
                <input type="text" name="address" placeholder="Address">
            </div>
            <div style="padding:10px">
                <button type="submit" class="btn btn-success">Confirme order</button>
                <button id="close" type="button" class="btn btn-danger">Close</button>
            </div>
        </div>

    </div>

    </form>


    <script type="text/javascript">
        $("#order").click(
            function(){
                $("#appear").show();
            }
        );

        $("#close").click(
            function(){
                $("#appear").hide();
            }
        );
    </script>




        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>
</body>
</html>