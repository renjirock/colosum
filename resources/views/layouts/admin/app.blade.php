<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Colosum | @yield('title')</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('css/admin/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        @livewireStyles
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-primary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-4 pe-4" href="{{route('admin.index')}}"><img class="img-fluid" src="{{ asset('assets/img/navbar-logo.png') }}" alt="colosum" /></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group d-none">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav d-md-inline-block ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" id="dashboard" href="{{route('admin.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" id="products" href="{{route('admin.products')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-boxes-stacked"></i></div>
                                Productos
                            </a>
                            <a class="nav-link" id="categories" href="{{route('admin.categories.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                                Categorias
                            </a>
                            <a class="nav-link" id="categories" href="{{route('admin.categories.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></i></div>
                                Ventas
                            </a>
                            <a class="nav-link" id="categories" href="{{route('admin.categories.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-truck"></i></i></div>
                                Envios
                            </a>
                            <a class="nav-link" id="categories" href="{{route('admin.discounts.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></i></div>
                                Descuentos
                            </a>
                            <a class="nav-link" id="categories" href="{{route('admin.store.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-shop"></i></i></div>
                                Tienda
                            </a>
                            <a class="nav-link" id="categories" href="{{route('admin.categories.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></i></div>
                                Chats
                            </a>
                            <a class="nav-link" id="categories" href="{{route('admin.categories.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-bill-wave"></i></i></i></div>
                                Pagos
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: {{Auth::user()->username}}</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                @yield('content')
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Colosum 2023</div>
                            <div>
                                <a href="{{ route('about') }}">Abaut us</a>
                                &middot;
                                <a href="{{ route('terms') }}">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/validate.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script>
            window.addEventListener('DOMContentLoaded', event => {
                const sidebarToggle = document.body.querySelector('#sidebarToggle');
                if (sidebarToggle) {
                    sidebarToggle.addEventListener('click', event => {
                        event.preventDefault();
                        document.body.classList.toggle('sb-sidenav-toggled');
                        localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
                    });
                }
            });
        </script>
        @livewireScripts
    </body>
    @include('layouts.messages')
    @yield('script')
</html>
