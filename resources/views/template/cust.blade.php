<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>One Cafe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ url('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('customer/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('customer/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('customer/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('customer/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('customer/css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>

    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>One Cafe</h1>
                </a>
                <div class="navbar-nav ms-auto py-0 pe-4 d-none d-lg-flex">
                    <!-- Menampilkan item menu di tampilan web biasa -->
                    <a href="" class="nav-item nav-link active">Menu </a>
                </div>
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <!-- Menampilkan icon pesanan hanya di tampilan seluler -->
                    <div class="p-0">
                        <a href="" class="btn btn-primary btn-sm d-lg-none py-2 px-3 m-0"><i
                                class="fa fa-shopping-cart"></i></a>
                    </div>
                    <!-- Menampilkan tombol pesanan di tampilan web biasa -->
                    <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-inline">Pesanan Saya</a>
                </div>
            </nav>


            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-3 pt-3 pb-3">
                    <h1 class="display-3 text-white mb-2 animated slideInDown">Food Menu</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">One Cafe</a>, All Right Reserved.
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('customer/lib/wow/wow.min.js') }}"></script>
    <script src="{{ url('customer/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('customer/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url('customer/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ url('customer/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('customer/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ url('customer/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ url('customer/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('customer/js/main.js') }}"></script>
    @yield('js')
</body>

</html>
