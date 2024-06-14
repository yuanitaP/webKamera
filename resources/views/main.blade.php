<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- CSS untuk Datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

    {{-- CSS untuk bootstarp icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>.:Admin Kamera - @yield('title'):.</title>

</head>

<body>
    <div class="container-fluid">

        <!-- HEADER -->
        <div class="row">
            <div class="col-lg-12 py-2 bg-primary">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="bi bi-person-circle"></i> User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i>
                            {{ Auth::user()->name ?? '' }}
                        </a>
                        <a class="dropdown-item" href="/user"><i class="bi bi-gear"></i> Change password</a>
                        <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-left"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- BODY/CONTENT -->
        <!-- 1 Baris punya 2 kolom -->
        <div class="row vh-100">
            <!-- Ini bagian kiri ukuran colomnya 2 -->
            <div class="col-md-2">
                <!-- MENU -->
                <div class="card mt-4">
                    <div class="list-group list-group-flush">
                        <a href="/"
                            class="list-group-item list-group-item-action {{ $key == 'home' ? 'active' : '' }}">Home</a>
                        <a href="/master"
                            class="list-group-item list-group-item-action {{ $key == 'master' ? 'active' : '' }}">Master
                            Data</a>
                        <a href="/about"
                            class="list-group-item list-group-item-action {{ $key == 'about' ? 'active' : '' }}">About</a>
                        <a href="/faq"
                            class="list-group-item list-group-item-action {{ $key == 'faq' ? 'active' : '' }}">FAQ</a>
                    </div>
                </div>
            </div>

            <!-- Ini bagian kanan ukuran colomnya 10 -->
            <div class="col-md-9">
                <div class="row h-75">
                    <div class="card mt-4 w-100 mx-auto">
                        <div class="card-body">
                            @yield('artikel')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <div class="col-md-12 py-3">
            <center class="text-white">
                <h5>template by Yuanita</h5>
            </center>
        </div>
    </footer>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    {{-- Javascript DataTabels --}}
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>
