<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'School Management System')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #126e00ff , #202020ff 100%);
            color: white;
            padding: 100px 0;
        }
        .feature-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(245, 21, 21, 0.1);
            transition: transform 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .role-section {
             background: linear-gradient(135deg, #126e00ff 0%, #000000ff 100%);
            padding: 80px 0;
            color: #ffffffff;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="/">
                🏫 SMS
            </a>
               @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="bg-danger px-3 py-1 rounded">
                        Logout</button>
                </form>
            @endauth
            </div>
        </div>
    </nav>

    <div class="container text-center">
    <h1>Teacher</h1>
    <p>Welcome</p>
</div>


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-success text-white py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 School Management System. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

