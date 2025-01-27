<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex flex-column" style="min-height: 100vh;">
        <!-- Navbar -->
        <nav class="navbar navbar-dark bg-black">
            <div class="container">
                <!-- Logo inside Navbar -->
                <a class="navbar-brand" href="#">
                    <img src="images/2-removebg-preview 2.png" alt="Logo" class="navbar-logo">
                </a>
                <p class="navbar-text text-light ms-3">Home</p>
                
                <!-- Navbar items (bell icon, search bar, profile) -->
                <div class="d-flex align-items-center">
                    <i class="bi bi-bell text-light me-3 navbar-icons"></i>
                    <input type="text" class="form-control me-2 search-bar" placeholder="Quick Search">
                    <i class="bi bi-person-circle text-light navbar-icons"></i>
                </div>
            </div>
        </nav>

        <div class="d-flex" style="flex: 1;">
            <!-- Sidebar -->
            <div class="sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="admin.html">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage.html">Manage Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Analytics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="content">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card stats-card">
                                <div class="circle">
                                    <span>540</span>
                                </div>
                                <p>Total Movies</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card stats-card">
                                <div class="circle">
                                    <span>150</span>
                                </div>
                                <p>Total Users</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-light">Top Movies</h5>
                        <div class="movies-box">
                            <div class="top-movies">
                                <div class="movie-card"></div>
                                <div class="movie-card"></div>
                                <div class="movie-card"></div>
                                <div class="movie-card"></div>
                                <div class="movie-card"></div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
