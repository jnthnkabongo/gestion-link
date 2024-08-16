<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion Liens</title>

     <!-- Vendor CSS Files -->

    <link href="{{ asset('assets/images/12.jpg') }}" rel="icon">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link href="assets/css/style2.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body class="bg-image mt-5" style="
background-image: url('{{ asset('assets/images/15.webp') }}');
background-size: cover;
background-position: center;
height: 750px;
">

    <div >
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-3">
                    <div id="cardAuth" class="card-body">
                        <div class="pt-4 pb-3 text-center">
                            <img src="{{ asset('assets/img/bboxx.png') }}" height="60px" width="200px" alt="">
                        </div>
                        <form class="bg-white tertiary " action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control" id="email" name="email">
                                <div class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <div class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-center">
                                    <a class="text-black" href="">Mot de passe oublié ?</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Se connecter</button>
                            </div>
                            <hr class="my-4">
                            <small class="text-body-secondary">En cliquant sur Se connecter, vous acceptez les conditions d'utilisation.</small>

                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
    </div>
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
