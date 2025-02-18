<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineCatch</title>
    <link rel="icon" href="images/CineCatchLogo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Add this link for Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex flex-column" style="min-height: 100vh;">
        <!-- Navbar -->
        <nav class="navbar navbar-dark bg-black">
            <div class="container">
                <!-- Logo inside Navbar -->
                <a class="navbar-brand" href="../index.php">
                    <img src="../images/2-removebg-preview 2.png" alt="Logo" class="navbar-logo">
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
                    <li class="nav-item"><a class="nav-link " href="indexAdmin.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active" href="handleMovie.php">Manage Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Analytics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                </ul>
            </div>
             
            <div class="container mt-5">
                <button class="btn btn-warning mb-3" id="addMovieBtn">Add Movie</button>
            
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Movie Name</th>
                            <th>Year</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="movieList">
                        <tr>
                            <td><input type="text" class="form-control" placeholder="Enter Movie Name"></td>
                            <td><input type="number" class="form-control" placeholder="Enter Year"></td>
                            <td>
                                <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button> 
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
            
            <script>
            $(document).ready(function() {
              $("#addMovieBtn").click(function() {
                // Create a new row for the movie
                var newRow = "<tr>" +
                              "<td><input type='text' class='form-control' placeholder='Enter Movie Name'></td>" +
                              "<td><input type='number' class='form-control' placeholder='Enter Year'></td>" +
                              "<td>" +
                                "<button class='btn btn-sm btn-success'><i class='fas fa-edit'></i></button>" + 
                                "<button class='btn btn-sm btn-danger'><i class='fas fa-trash'></i></button>" +
                              "</td>" +
                              "</tr>";
            
                // Append the new row to the table body
                $("#movieList").append(newRow);
              });
            
              // Handle edit button click (replace with actual editing logic)
              $(document).on("click", ".btn-success", function() {
                alert("Edit button clicked!"); 
                // TODO: Implement edit functionality here (e.g., replace inputs with editable fields)
              });
            
              // Handle delete button click
              $(document).on("click", ".btn-danger", function() {
                $(this).closest("tr").remove(); 
              });
            });
            </script>
                    
                    
        </div>
    </div>
</body>
</html>
