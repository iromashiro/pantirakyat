<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Dinas Sosial Kabupaten Muara Enim</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="{{URL::asset('depan2/images/logo/favicon.png')}}" type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="{{URL::asset('depan2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/odometer.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/default.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('depan2/css/responsive.css')}}">

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        S
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <header class="site-header site-header-2">

        @include('layouts.menu_depan')
    </header>
    <!-- header end -->

    <!-- slide area start -->
    <section class="homepage-slide homepage-slide-2 owl-carousel">
        <div class="single-slide-item single-slide-item-2 bg_img align-items-center d-flex"
            data-background="{{URL::asset('dinsos1.jpeg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-slide-content single-slide-content-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-item single-slide-item-2 bg_img align-items-center d-flex"
            data-background="{{URL::asset('dinsos2.jpeg')}}">
            <div class=" container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="col-xl-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slide area end -->

    <!-- Berita -->
    <div class="news-area news-area-2 pt-120 pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 text-center">
                    <div class="section-heading section-heading-2 mb-70">
                        <h5 class="sub-title mb-22">Terbaru</h5>
                        <h2 class="section-title">Berita dan Pengumuman</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                @foreach ($berita_terbaru as $bt)
                <div class="col-xl-4 col-lg-6">
                    <article class="postbox post format-image mt-30">
                        <div class="postbox-thumb">
                            <a href="{{route('berita.satu', $bt->slug)}}">
                                <img src="{{URL::asset($bt->thumbnail)}}" alt=" blog image">
                            </a>
                        </div>
                        <div class="postbox-text">
                            <div class="post-meta mb-10">
                                <i class="fal fa-user"></i> By Admin
                                <i class="fal fa-calendar-alt"></i>
                            </div>
                            <h4 class="blog-title">
                                <a href="{{route('berita.satu', $bt->slug)}}">{{$bt->judul}}</a>
                            </h4>
                        </div>
                    </article>
                </div>
                @endforeach

                <div class="col-xl-4 col-lg-12">
                    <div class="post-list-wrapper">
                        @foreach ($pengumuman as $p)
                        <div class="row">
                            <div class="col-xl-12 col-lg-6">
                                <article class="postbox post format-image mt-30">
                                    <div class="postbox-text">
                                        <div class="post-meta mb-10">
                                            <i class="fal fa-user"></i> By Admin
                                            <i class="fal fa-calendar-alt"></i> {{$p->created_at}}
                                        </div>
                                        <h4 class="blog-title">
                                            <a href="{{route('pengumuman.satu', $p->slug)}}">{{$p->judul}}</a>
                                        </h4>
                                    </div>
                                </article>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news area end -->

    <!-- brand area start -->
    <div class="sponser-area bg-5 pt-80 pb-80">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="brand-carousel brand-carousel-2 owl-carousel">
                        <div class="singel-brand-item">
                            nama brand
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end -->



    <!-- footer area start -->
    <footer class="site-footer bg-4 site-footer-2 pt-190">
        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright mt-100 pt-30 pb-30 text-center">
                        <p>Dinas Sosial Kabupaten Muara Enim copyright@<script>
                                document.write(new Date().getFullYear())
                            </script>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!--========= JS Here =========-->
    <script src="{{URL::asset('depan2/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/counterup.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/jquery.appear.js')}}"></script>
    <script src="{{URL::asset('depan2/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/lightcase.js')}}"></script>
    <script src="{{URL::asset('depan2/js/odometer.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/sticky-header.js')}}"></script>
    <script src="{{URL::asset('depan2/js/waypoint.js')}}"></script>
    <script src="{{URL::asset('depan2/js/wow.min.js')}}"></script>
    <script src="{{URL::asset('depan2/js/tilt.jquery.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o">
    </script>
    <script src="{{URL::asset('depan2/js/main.js')}}"></script>
</body>

</html>
