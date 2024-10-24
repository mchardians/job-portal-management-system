<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Bux</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lilita+One&display=swap');

        .bg-login-image {
            background: url('{{ asset('assets/img/login-image.svg') }}') no-repeat;
            background-position: center;
            background-size: contain;
        }

        .bg-login-image::before {
            content: "Selamat Datang";
            display: block;
            font-family: "Lilita One", sans-serif;
            font-size: 2.5rem;
            text-align: center;
            color: #fff;
            margin-top: 1.25rem;
        }
    </style>

    @vite([])
</head>

<body class="row" style="overflow-x: hidden;background-color: #f9fbfd;">
    <div class="container align-self-center">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-12 col-lg-10">
                <div class="card overflow-hidden shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-7 d-none d-md-block d-lg-block bg-login-image bg-danger"></div>
                            <div class="col-md-6 col-lg-5">
                                <div class="py-4 px-2 m-3">
                                    <img src="{{ asset('assets/img/login-logo.png') }}"
                                        class="img-fluid mb-3 d-block mx-auto" alt="company logo"
                                        width="150">

                                    <form action="{{ route('login.auth') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email2">Email Address</label>
                                            <input type="email" class="form-control" id="email2" name="email"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password">Password</label>
                                                <div class="float-right">
                                                    <a href="#" class="text-small">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-lg btn-block">
                                                Login
                                            </button>
                                        </div>
                                    </form>

                                    <div class="text-center mt-3">
                                        Don't have an account yet ? <a href="{{ route('register') }}">Sign Up</a>
                                    </div>

                                    <div class="text-center mt-3 text-small">
                                        Copyright &copy; 2024. Made with 💙 by <a href="https://github.com/mchardians"
                                            target="_blank">mchardians</a>
                                        <div class="mt-2">
                                            <a class="mr-1"
                                                href="https://github.com/mchardians/job-portal-management-system">Repository</a>
                                            &bull;
                                            <a class="ml-1"
                                                href="https://github.com/mchardians/simkepon/blob/main/LICENSE">License</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
</body>

</html>
