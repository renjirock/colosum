<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Colosum - ABOUT US</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset ('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
            <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('assets/img/navbar-logo.png') }}" style="width: 130px;" alt="colosum" /></a>
            </div>
        </nav>
        <header class="bg-gradient-primary-to-secondary pt-5 py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">ABOUT US</h1>
                </div>
            </div>
        </header>
        <section class="bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9 m-3 p-3">
                        <h3>
                            Our Story
                        </h3>
                        <p>
                            We are a small software development company with a passion for creating innovative web
                            applications. Our journey began when two friends, Mauricio and Tere, decided to combine their
                            skills and expertise to create a company that would help businesses achieve their goals through
                            technology.
                        </p>
                        <h3>
                            Our Mission
                        </h3>
                        <p>
                            Our mission is to provide high-quality web application development services that help businesses
                            grow and succeed in today's digital world. We are committed to delivering innovative solutions
                            that meet our clients' unique needs and exceed their expectations.
                        </p>
                        <h3>
                            Our Expertise
                        </h3>
                        <p>
                            We specialize in web application development, using the latest technologies and frameworks to
                            create custom solutions that are tailored to our clients' specific requirements. Our team has
                            extensive experience in developing web applications for a variety of industries, including
                            healthcare, finance, and e-commerce.
                        </p>
                        <h3>
                            Our Team
                        </h3>
                        <p>
                            Our team consists of two experienced developers, Mauricio and Tere. Mauricio has over 10 years of
                            experience in web development and is an expert in front-end development. Tere has over 8 years
                            of experience in back-end development and is an expert in database design and development.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Colosum 2023. All Rights Reserved.</div>
                    <a href="{{route('about')}}">About us</a>
                    <span class="mx-1">&middot;</span>
                    <a href="{{route('terms')}}">Terms</a>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
