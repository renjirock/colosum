<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Our e-commerce platform is designed for businesses to manage their sales, inventory, and social media presence all in one place. With our platform, you can turn your social networks into an online store and never miss a sale again. Our artificial intelligence technology also helps improve customer service and increase your sales. Say goodbye to the hassle of managing multiple platforms and hello to a streamlined, efficient way of selling online. Join us today and revolutionize the way you sell online!" />
    <meta name="author" content="Colosum" />
    <title>Colosum - e-commerce for social media</title>
    <meta name="keywords"
        content="e-commerce platform, businesses, sales, inventory, social media, online store, artificial intelligence, customer service, sales increase, streamlined, efficient, selling online." />
    <meta name="copyright" content="Colosum" />
    <link rel="canonical" href="{{ ENV('APP_URL') }}" />
    <meta name="robots" content="index" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}"><img style="width: 130px;"
                    src="{{ asset('assets/img/navbar-logo.png') }}" alt="colosum" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#contact">Contact</a></li>
                </ul>
                <!-- <a href="{% url 'login' %}" class="btn btn-outline-dark rounded-pill px-3 ms-1 me-1 mb-2 mb-lg-0">
                        <span class="d-flex align-items-center">
                            <span class="small">Login</span>
                        </span>
                    </a>
                    <a href="{% url 'register' %}" class="btn btn-primary rounded-pill px-3 ms-1 me-1 mb-2 mb-lg-0">
                        <span class="d-flex align-items-center">
                            <span class="small">Sign up</span>
                        </span>
                    </a> -->
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center fw-bolder text-lg-start" data-aos="fade-right">
                        <h1 class="display-3 text-gradient  lh-1 mb-3">the first e-coomerce for social media.</h1>
                        <p class="lead fw-normal text-muted mb-5">Increase your sales and keep better control of your
                            business with our free 24/7 chatbot!</p>
                        <!-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{% url 'register' %}">Sign up</a>
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{% url 'login' %}">Login</a>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup" data-aos="fade-left">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="col-12" style="z-index: 1;"><img class="img-fluid"
                                src="{{ asset('assets/img/portal.png') }}" alt="portada" /></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">Welcome to our e-commerce platform, designed specifically for
                        businesses looking to manage their sales, inventory, and social media presence all in one place.
                        With our platform, you can turn your social networks into an online store and never miss a sale
                        again. Our artificial intelligence technology also helps improve customer service and increase
                        your sales. Say goodbye to the hassle of managing multiple platforms and hello to a streamlined,
                        efficient way of selling online. Join us today and revolutionize the way you sell online!</div>
                </div>
            </div>
        </div>
    </aside> --}}
    <section class="cta" data-aos="fade-top">
        <div class="cta-content">
            <div class="container px-5">
                <p class="text-white lead fw-normal mb-5 mb-lg-0">
                    Welcome to our e-commerce platform, designed specifically for
                    businesses looking to manage their sales, inventory, and social media presence all in one place.
                    With our platform, you can turn your social networks into an online store and never miss a sale
                    again. Our artificial intelligence technology also helps improve customer service and increase
                    your sales. Say goodbye to the hassle of managing multiple platforms and hello to a streamlined,
                    efficient way of selling online. Join us today and revolutionize the way you sell online!
                </p>
            </div>
        </div>
    </section>
    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5"  data-aos="fade-left">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Multiple platforms</h3>
                                    <p class="text-muted mb-0">Serve your customers on different platforms to ensure
                                        your sales at all times.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-box-seam icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Manage your products</h3>
                                    <p class="text-muted mb-0">Keep detailed track of your products, their quantities
                                        and prices!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-cart2 icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Payment facilities</h3>
                                    <p class="text-muted mb-0">With our payment gateway, you will be able to receive
                                        different types of payments and not lose a sale.!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-bar-chart-line icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Real-time statistics</h3>
                                    <p class="text-muted mb-0">always keep informed about how your sales are doing,
                                        what kind of products are selling the most and much more!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup"  data-aos="fade-right">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="col-12" style="z-index: 1;"><img class="img-fluid"
                                src="{{ asset('assets/img/data.png') }}" alt="portada" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient-primary-to-secondary" id="contact">
        <div class="container" data-aos="flip-right">
            <div class="text-center">
                <h2 class="modal-title font-alt text-white" id="feedbackModalLabel">Contact Us</h2>
            </div>
            <form id="contactForm" action="{{ route('contact_us') }}" method="post">
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <!-- Name input-->
                            <input class="form-control" id="name" name="name" type="text"
                                placeholder="Your Name *" data-sb-validations="required" required />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            <label for="name">Full name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <!-- Email address input-->
                            <input class="form-control" id="email" name="email" type="email"
                                placeholder="Your Email *" data-sb-validations="required,email" required />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3 mb-md-0">
                            <!-- Store name input-->
                            <input class="form-control" id="store_name" name="store_name" type="text"
                                placeholder="Your store *" data-sb-validations="required" required />
                            <div class="invalid-feedback" data-sb-feedback="store:required">A store name is
                                required.</div>
                            <label for="store_name">Store Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" name="message" style="height: 10rem" placeholder="Your Message *"
                                data-sb-validations="required"></textarea>
                            <div class="invalid-feedback">A message is required.
                            </div>
                            <label for="message">Message</label>
                        </div>
                    </div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary rounded-pill btn-lg " id="submitButton"
                        type="submit">Send Message</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Colosum 2023. All Rights Reserved.</div>
                <a href="{{ route('about') }}">About us</a>
                <span class="mx-1">&middot;</span>
                <a href="{{ route('terms') }}">Terms</a>
            </div>
        </div>
    </footer>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show float-alert col-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show float-alert col-3" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Bootstrap core JS-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

<script>
    AOS.init();
</script>

</html>
