<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>XUAN DUNG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/')}}assets/Cli/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/Cli/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/')}}assets/Cli/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    @include('USERS.layouts.header')
    <!-- Navbar End -->


    <!-- Carousel Start -->
   
    <!-- Carousel End -->
	<div class="content">

	@include('USERS.layouts.home')
         
	@yield('content')
   
    <!-- Products End -->


    <!-- Offer Start -->
     
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{asset('/')}}imagePRO/1722804678.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{asset('/')}}imagePRO/1722781208.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    


    


    <!-- Footer Start -->
    @include('USERS.layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/Cli/lib/easing/easing.min.js"></script>
    <script src="{{asset('/')}}assets/Cli/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('/')}}assets/Cli/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{asset('/')}}assets/Cli/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('/')}}assets/Cli/js/main.js"></script>
</body>

</html>