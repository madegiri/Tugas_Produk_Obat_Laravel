<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to left, #343a40, #6c757d);">
        <div class="container">
            <a class="navbar-brand" href="#">Produk Obat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else   
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="p-5 bg-white rounded shadow-sm">
            <h1>Profile</h1>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <a href="/products" class="btn btn-success">Kembali</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
