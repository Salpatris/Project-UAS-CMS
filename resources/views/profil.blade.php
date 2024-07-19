<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <style>
        .profile-img {
            width: 200px;
            /* Atur lebar sesuai kebutuhan Anda */
            height: 200px;
            /* Atur tinggi sesuai kebutuhan Anda */
            object-fit: cover;
            border-radius: 50%;
            /* Contoh, jika ingin membuat gambar menjadi bulat */
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
    </style>

</head>

<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        @include('layouts.navbar')
        <!-- Page Content-->
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">My Profile</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Experience Section-->
                    <section>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="text-primary fw-bolder mb-0">Me</h2>
                            <!-- Download resume button-->
                            <!-- Note: Set the link href target to a PDF file within your project-->
                            <!--<a class="btn btn-primary px-4 py-3" href="#!">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a>-->
                        </div>
                        @foreach ($user as $x)
                        <!-- Experience Card 1-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder text-center">Nama : {{ $x->name }} {{ $x->last_name }}</div>
                                            <div class="small text-muted text-center">Phone : {{ $x->phone }}</div>
                                            <div class="small text-muted text-center">Email : {{ $x->email }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Education Section-->
                    <section>
                        <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                        <!-- Education Card 1-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2">{{ $x->tahunLulus }}</div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">{{ $x->sekolah }}</div>
                                                <div class="small text-muted">{{ $x->alamatSekolah }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>{{ $x->sekolahDesc }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </section>
                    <!-- Divider-->
                    <div class="pb-5"></div>
                    <!-- Skills Section-->
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                <span>Copyright &copy; <a href="https://github.com/Salpatris?tab=repositories" target="_blank">Salpa</a> {{ now()->year }}</span>
                </div>
                <div class="col-auto">
                    <a class="small" href="https://policies.google.com/privacy?hl=en-US">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="https://policies.google.com/terms?hl=en-US">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="/contact">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>