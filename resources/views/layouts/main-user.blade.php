<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }} - Web Kelurahan Purwosari</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/admin/assets') }}/img/2.png">
    <link rel="icon" type="image/icon-x" href="{{ asset('assets/admin/assets') }}/img/2.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/user') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets/user') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    {{-- <link href="{{ asset('assets/user') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet"> --}}


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/user') }}/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/user') }}/css/style.css" rel="stylesheet">
    <style>
        .hero-section{
            height: 70vh;
        }
        .hero-text{
color:rgb(255, 255, 255);
padding-top: 375px;
font-family: "Poppins", serif;
  font-weight: 800;
  font-style: normal;
        }
        .header{
            color: white;
            font-family: "Poppins", serif;
  font-weight: 800;
  font-style: normal;
        }
        </style>

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @yield('content')

    {{-- <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="mb-1 text-primary">Our Service</h4>
                <h1 class="display-5 mb-4">What We Can Do For You</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet
                    doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores
                    vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center rounded p-4">
                        <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                                class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
                        <div class="service-content">
                            <h4 class="mb-4">Email Newsletters</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                            <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center rounded p-4">
                        <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                                class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                        <div class="service-content">
                            <h4 class="mb-4">Acquistion Emails </h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                            <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center rounded p-4">
                        <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                                class="fa fa-subway fa-5x text-secondary"></i></div>
                        <div class="service-content">
                            <h4 class="mb-4">Retention Emails</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                            <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center rounded p-4">
                        <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                                class="fas fa-sitemap fa-5x text-secondary"></i></div>
                        <div class="service-content">
                            <h4 class="mb-4">Promotional Emails</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                            <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center rounded p-4">
                        <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                                class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
                        <div class="service-content">
                            <h4 class="mb-4">Email Newsletters</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                            <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center rounded p-4">
                        <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                                class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                        <div class="service-content">
                            <h4 class="mb-4">Acquistion Emails </h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                            <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center rounded p-4">
                        <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                                class="fa fa-subway fa-5x text-secondary"></i></div>
                        <div class="service-content">
                            <h4 class="mb-4">Retention Emails</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                            <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center rounded p-4">
                        <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i
                                class="fas fa-sitemap fa-5x text-secondary"></i></div>
                        <div class="service-content">
                            <h4 class="mb-4">Promotional Emails</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                            <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- FAQ Start -->
    <div class="container-fluid FAQ bg-light overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button rounded-top" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseTOne">
                                    Why did you choose Our Email Services?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit,
                                        sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum
                                        consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem
                                        corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio hic
                                        fuga odio excepturi ducimus sequi at. Doloribus, non aspernatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Are there any hidden charges?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit,
                                        sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum
                                        consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem
                                        corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio hic
                                        fuga odio excepturi ducimus sequi at. Doloribus, non aspernatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What are the key challenges of email marketing?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit,
                                        sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum
                                        consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem
                                        corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta distinctio hic
                                        fuga odio excepturi ducimus sequi at. Doloribus, non aspernatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="FAQ-img RotateMoveRight rounded">
                        <img src="{{ asset('assets/user') }}/img/15.jpg" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End --> --}}


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-dark">Quick Links</h4>
                        <a href="{{ route('about') }}"> Tentang kami</a>
                        <a href="{{ route('contact') }}"> Kontak kami</a>
                        {{-- <a href=""> Privacy Policy</a> --}}
                        {{-- <a href=""> Terms & Conditions</a> --}}
                        <a href="{{ route('article') }}"> Pelayanan</a>
                        {{-- <a href=""> Our Team</a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-dark">Contact Info</h4>
                        <a href="#"><i class="fa fa-map-marker-alt me-2"></i> Jl. Patriot II  H 231 Semarang Kode Pos 50172.</a>
                        <a href="#"><i class="fas fa-envelope me-2"></i> purwosari@gmail.com</a>
                        <a href="#"><i class="fas fa-phone me-2"></i>(024) 3519398</a>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-secondary me-2"></i>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-white"><a href="{{ route('home') }}"><img height="32"
                                src="{{ asset('assets/admin/assets') }}/img/2.png" /></i> Web
                            Kelurahan Purwosari</a>, All right reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/user') }}/lib/custom/lightbox.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    {{-- <script src="{{ asset('assets/user') }}/lib/lightbox/js/lightbox.min.js"></script> --}}


    <!-- Template Javascript -->
    <script src="{{ asset('assets/user') }}/js/main.js"></script>
</body>

</html>
