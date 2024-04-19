<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preinscripción en Línea</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        label {
            color: #00539B !important;
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg" style="background: #00539a !important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="ms-5" width="255" src="{{ asset('assets/img/preinscripcion_linea/logo-2020.png') }}"
                    alt="">
            </a>
        </div>
    </nav>

    @yield('content')

    <footer class="text-white text-center container-fluid p-4" style="background: #00539a !important;">
        <p>
            Tel: 55 1102 0290
        </p>
        <p class="m-0">
            Universidad Mexicana {{ date('Y') }}
        </p>
    </footer>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script>
        function setUrlBase() {
            let urlBase = "{{ env('APP_URL') }}";
            return urlBase;
        }
    </script>
    <script src="{{ asset('assets/js/preinscripcionLinea/app.js') }}"></script>
    <script src="{{ asset('assets/js/preinscripcionLinea/form.js') }}"></script>
    <script src="{{ asset('assets/js/preinscripcionLinea/combos.js') }}"></script>
</body>

</html>