<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('styles.css')}}">
</head>
<body>
    <header class="bg-dark text-light text-center py-3">
        <h1 class="fw-bold">SUPER ADMIN</h1>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <h2 class="h4 py-2">Sidebar</h2>
                    <!-- Add sidebar content and links here -->
                    <ul class="nav flex-column">
                        {{-- <li class="nav-item"><a class="nav-link" href="#home"></a></li> --}}
                        <li class="nav-item"><a class="nav-link" href="#profile">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings">Settings</a></li>
                        <li class="nav-item"><a class="nav-link" href="#logout">Logout</a></li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2 class="h4">Main Content</h2>
                </div>
                <!-- Add main content here -->
                <p>Welcome to the dashboard. This is the main content area.</p>
            </main>
        </div>
    </div>

    <footer class="text-center py-3 mt-auto bg-light">
        <p>&copy; 2023 Dashboard</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
