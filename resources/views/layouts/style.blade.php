<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion Liens</title>

     <!-- Vendor CSS Files -->

    <link href="{{ asset('assets/images/12.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/bboxx.png') }}" rel="apple-touch-icon">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
        <!-- ======= Header ======= -->
        <header id="header" class="bg-white header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ route('index-systems') }}" class="logo d-flex align-items-center">
                    <img src="{{ asset('assets/img/bboxx.png') }}" alt="">
                </a>
            </div>
            <nav class="header-nav ms-auto">

                <ul class="d-flex align-items-center">
                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{Str::upper( \Illuminate\Support\Facades\Auth::user()->roles->intitule )}}</span>
                        </a>
                        @auth
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6>{{Str::upper( \Illuminate\Support\Facades\Auth::user()->name )}}</h6>
                                    <span>{{ \Illuminate\Support\Facades\Auth::user()->email }}</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Se déconnecter</span>
                                    </a>
                                </li>
                            </ul>
                        @endauth
                    </li>
                </ul>
            </nav>
        </header>

        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('index-systems') }}">
                        <i class="bi bi-link"></i>
                        <span>Liens</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ajouter-lien') }}">
                        <i class="bi bi-plus"></i>
                        <span>Ajouter Lien</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('liste-departement') }}">
                        <i class="bi bi-list"></i>
                        <span>Gestion Département</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('liste-responsable') }}">
                        <i class="bi bi-person-plus bi-lg"></i>
                        <span>Gestion Responsable</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('liste-manager') }}">
                        <i class="bi bi-gear"></i>
                        <span>Gestion Utilisateur</span>
                    </a>
                </li>
            </ul>
        </aside>
        @yield('content')
        <script>
            function afficherAside() {
                document.getElementById('mon-aside').style.display = 'block';
            }
        </script>
     <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>


