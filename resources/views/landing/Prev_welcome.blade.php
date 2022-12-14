<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css style link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">

    <!-- Font Woesome link -->
    <script src="https://kit.fontawesome.com/a796f0c56e.js" crossorigin="anonymous"></script>

    <!-- owl carousal min.css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">

    <!-- Bootstrap CSS link -->
    <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <title>Dhaka Choice Ltd.</title>
</head>

<body>
    <!-- Status Bar Section Start -->
    <div class="container-fluid">
        <div class="row bg-danger
         py-2 ">
            <div class="col-md-6 col-12 d-flex justify-content-start status-bar-left">
                <li>Contact</li>
                <li><i class="fas fa-envelope"></i></li>
                <li>dhaka.choice@gmail.com</li>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-end status-bar-right ">
                <p class="follow_us ">Follow Us</p>
                <a class="link" href=""><i class="fab fa-facebook"></i></a>
                <a class="link" href=""><i class="fab fa-twitter"></i></a>
                <a class="link" href=""><i class="fab fa-instagram"></i></a>
                <a class="link" href=""><i class="fab fa-youtube"></i></a>
                <a class="link" href=""><i class="fab fa-skype"></i></a>
                <a class="link" href=""><i class="fab fa-whatsapp"></i></a>
                <style>
                    .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
                        display: none !important;
                    }
                    body {
                        top: 0px !important;
                    }
                    .goog-tooltip {
                        display: none !important;
                    }
                    .goog-tooltip:hover {
                        display: none !important;
                    }
                    .goog-text-highlight {
                        background-color: transparent !important;
                        border: none !important;
                        box-shadow: none !important;
                    }
                </style>
                <div id="google_translate_element"></div>
                <script>
                    function googleTranslateElementInit() {
                        var translator = new google.translate.TranslateElement({
                            pageLanguage: 'en',
                            includedLanguages: 'en,bn',
                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                        }, 'google_translate_element');
                    }
                </script>
                <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>
        </div>
    </div>
    <!-- Status Bar Section End -->
    <!-- Image Category Slider Start -->
    <div class="container-fluid mt-2">
        <div class="row my-2">
            <div class="col-md-2 col-4 logo_body">
                <div class="col-3 nav-logo">
                    <img src="{{ asset('frontend/images/logo.png')}}" alt="" class="image-fluide">
                </div>
            </div>
            <div class="col-md-10 col-8">
                <div class="owl-carousel owl-theme">
                    <div class="item ">
                        <div class="card border-0 " style="width: 70%; margin: auto;">
                            <img style="border-radius: 50%; width: 100px; height:100px" src="{{ asset('frontend/images/cloth_store.png')}}"
                                alt="" class="card-img-top mx-auto">
                            <div class="card-body p-0">
                                <div class="card-title text-center">
                                    <p class="text-dark mb-0">Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="item ">
                        <div class="card border-0 " style="width: 70%;margin: auto;">
                            <img style="border-radius: 50%; width: 100px; height:100px" src="{{ asset('frontend/images/electronics.png')}}"
                                alt="" class="card-img-top mx-auto">
                            <div class="card-body p-0">
                                <div class="card-title text-center">
                                    <p class="text-dark mb-0">Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="item ">
                        <div class="card border-0 " style="width: 70%;margin: auto;">
                            <img style="border-radius: 50%; width: 100px; height:100px" src="{{ asset('frontend/images/food.png')}}" alt=""
                                class="card-img-top mx-auto">
                            <div class="card-body p-0">
                                <div class="card-title text-center">
                                    <p class="text-dark mb-0">Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="item ">
                        <div class="card border-0 " style="width: 70%;margin: auto;">
                            <img style="border-radius: 50%; width: 100px; height:100px"
                                src="{{ asset('frontend/images/hardware-store.png')}}" alt="" class="card-img-top mx-auto">
                            <div class="card-body p-0">
                                <div class="card-title text-center">
                                    <p class="text-dark mb-0">Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="item ">
                        <div class="card border-0 " style="width: 70%;margin: auto;">
                            <img style="border-radius: 50%; width: 100px; height:100px" src="{{ asset('frontend/images/medical-shop.png')}}"
                                alt="" class="card-img-top mx-auto">
                            <div class="card-body p-0">
                                <div class="card-title text-center">
                                    <p class="text-dark mb-0">Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="item">
                        <div class="card border-0 " style="width: 70%;margin: auto;">
                            <img style="border-radius: 50%; width: 100px; height:100px" src="{{ asset('frontend/images/mudi.png')}}" alt=""
                                class="card-img-top mx-auto">
                            <div class="card-body p-0">
                                <div class="card-title text-center">
                                    <p class="text-dark mb-0">Food</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Image Category Slider End -->
    <!-- Navbar Section Start  -->
    <nav class="navbar navbar-expand-lg nav-bg-color">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mx-4 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link txt_color" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt_color " aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt_color " aria-current="page" href="#">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt_color " aria-current="page" href="#">Message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt_color " href="#">Partner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt_color " href="#">Enterprises</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt_color " href="#">Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt_color  btn-contact" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link txt_color dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Our All Service"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar Section End -->
    <!-- slider start -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend/images/slider1.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/slider1.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/slider1.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slider end -->

    <!--  chat icon functionality start  -->
    <button class="open-button" onclick="openForm()">Chat</button>

    <div class="chat-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
            <h3 class="chat_heading text-danger">Chat with company</h3>

            <label for="msg"><b>Message</b></label>
            <textarea placeholder="Type message.." name="msg" required></textarea>

            <button type="submit" class="btn">Send</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
    <!--chat icon functionality end  -->

    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <p class="text-uppercase fw-bolder">Follow Us :</p>
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>
                <!-- youtube -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-youtube"></i></a>


                <!-- skype -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-skype"></i></a>

                <!-- What's app -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-whatsapp"></i></a>


            </section>
            <!-- Section: Social media -->



            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">About Us</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Privacy Policies</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Terms and Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">FAQ</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Home</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Link 3</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            {{ Date('Y') }} Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">dhakachoice.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    {{-- js file --}}
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>

    <!-- Bootstrap JS link -->
    <script src="{{ asset('frontend//js/bootstrap.min.js')}}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 1000,
            stagePadding: 50,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

        //  Chat js file start hare
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
</body>
</html>
