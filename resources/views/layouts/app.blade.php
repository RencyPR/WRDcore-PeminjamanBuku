<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Website Peminjaman')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-image:linear-gradient(to right,#f5f5f5,#ffffff);
        }
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            padding: 10px 20px;
            color: grey;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            {{-- Header --}}
            <nav class="navbar navbar-expand-lg navbar-dark py-4" style="background-image:linear-gradient(to right,#1E3A8A,#3B82F6);">
                <div class="container-fluid justify-content-center">
                    <span class="navbar-brand mb-0 fs-3">📚BALAI PUSTAKA PRADIPA📚</span>
                </div>
            </nav>

            {{-- Main Content --}}
            <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4 py-4">
                @yield('content')
            </main>
        </div>
    </div>
        <footer>
            <h6>WRDcore TIM</h6>
        </footer>
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
