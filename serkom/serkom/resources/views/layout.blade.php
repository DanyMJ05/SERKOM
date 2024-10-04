<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
                
</head>
<body>
    <nav class="navbar bg-primary navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> <!-- justify-content-center untuk membuat item berada di tengah -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Pilihan Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('beasiswa/create') ? 'active' : '' }}" href="{{route('beasiswa.create')}}">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('beasiswa/data') ? 'active' : '' }}" href="{{route('beasiswa.index')}}">Hasil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5 pt-1">        
        @yield('content')
    </div>

</body>

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-H2LJ4oADmSMU3F5dpKtNEaDNq8TDZPsgjDcvpEcNZwn5xU19z6gntQw5lTjZfYJC" crossorigin="anonymous"></script>
</html>