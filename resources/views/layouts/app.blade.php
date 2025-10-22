<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Toko Skincare </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6ef;
            font-family: 'Poppins', sans-serif;
        }
        header {
            background-color: #ff6fa5;
            padding: 15px 0;
            color: white;
            text-align: center;
        }
        footer {
            background-color: #ff6fa5;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: relative;
            bottom: 0;
        }
        main {
            padding: 40px;
            min-height: 70vh;
        }
        nav {
            background-color: #ff6fa5;
        }
        .nav-link {
            color: white !important;
            font-weight: 500;
        }
        .nav-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center px-4">
                <h4 class="m-0 fw-bold text-white"> Skincare </h4>
                <nav>
                    <a href="{{ route('dashboard', ['username' => $username ?? request('username')]) }}" class="nav-link d-inline-block mx-2">Dashboard</a>
                    <a href="{{ route('profile', ['username' => $username ?? request('username')]) }}" class="nav-link d-inline-block mx-2">Profile</a>
                    <a href="{{ route('pengelolaan', ['username' => $username ?? request('username')]) }}" class="nav-link d-inline-block mx-2">Pengelolaan</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="text-center">
        @yield('content')
    </main>

    <footer>
        © Toko Skincare Jezi | UTS Pemrograman Web
    </footer>

</body>
</html>
