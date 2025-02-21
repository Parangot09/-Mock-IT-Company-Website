
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InfoZen Technologies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/customstyles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#">INFOZEN Technologies</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#domains">Domains</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#domains">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#domains">Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="careers.html">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                    <a href = "loginpage.php"><button type="button" class="btn btn-secondary">Login</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assests/webdev.png" width="1600" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Website Development</h5>
                    <p>Crafting Engaging Web Experiences, Responsive, Scalable, and User-Centric Websites</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assests/Cybersecurity.jpg" width="1600" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Cyber Security</h5>
                    <p>Securing the digital world—protecting data, networks, and systems from cyber threats</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assests/Networking.jpg" width="1600" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Server Management</h5>
                    <p>Building seamless and secure connections—optimizing networks for speed and reliability</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container my-5 d-flex flex-wrap justify-content-center">
       <?php include("service_title_fetch.php"); ?>
    </div>

    <div class="container my-5 d-flex flex-wrap gap-3 justify-content-center ">
        <?php include("service_cards_fetch.php"); ?>
    </div>

    <div class="container my-5 d-flex flex-wrap justify-content-center">
    <?php include("feature_title_fetch.php"); ?>
    </div>

    <div class="container my-5 d-flex flex-wrap gap-3 justify-content-center">
        <?php include("feature_cards_fetch.php"); ?>
    </div>


    <section id="about">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h3 class="mb-4 custom-font-color-blue">What Our Customers Say</h3>
                <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                    We take pride in delivering top-notch IT solutions and excellent customer service.
                    Here’s what some of our clients have to say about their experience with us
                </p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="card testimonial-card">
                    <div class="card-up" style="background-color: #9d789b;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="assests/person1.jpg"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body">
                        <h4 class="mb-4">Maria Smantha</h4>
                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>
                            The team at Infozen has been incredible.
                            Their expertise and dedication helped us streamline our IT infrastructure,
                            improving efficiency and security. Highly recommended!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="card testimonial-card">
                    <div class="card-up" style="background-color: #7a81a8;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="assests/person3.jpg"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body">
                        <h4 class="mb-4">Lisa Cudrow</h4>
                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>
                            The customer support team is always available and ready to assist.
                            Whether it's troubleshooting issues or providing IT guidance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-0">
                <div class="card testimonial-card">
                    <div class="card-up" style="background-color: #6d5b98;"></div>
                    <div class="avatar mx-auto bg-white">
                        <img src="assests/person2.jpg"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="card-body">
                        <h4 class="mb-4">John Smith</h4>
                        <hr />
                        <p class="dark-grey-text mt-4">
                            <i class="fas fa-quote-left pe-2"></i>
                            Thanks to Infozen, our company has embraced digital transformation with ease.
                            Their cloud solutions and cybersecurity measures have provided us
                            scalability
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container my-5">
        <h2 class="custom-font-color-blue">Get in Touch!</h2>
    </div>

    <div class="container my-5 fade-in">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Full name">

            <label for="exampleFormControlInput1" class="form-label my-3">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted custom-navbar">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">


        </section>
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5 custom-font-color-white">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>InfoZen Technologies
                        </h6>
                        <p>
                            Empowering Innovation, Elevating Technology
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Technologies
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Solution</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Careers</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">About</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@infozen.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4 custom-font-color-white" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold " href="https://mdbootstrap.com/">InfoZen Technologies</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>