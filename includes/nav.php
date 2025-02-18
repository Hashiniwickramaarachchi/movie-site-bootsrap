<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container-fluid">
            <!-- Brand logo -->
            <a href="../index.php" class="navbar-brand">
               <img src="images/2-removebg-preview 2.png">
            </a>

            <!-- Navbar toggle button for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a href="index.php" class="nav-link">Home</a>
                      </li>
                      <li class="nav-item">
                          <a href="contact.php" class="nav-link">Contact Us</a>
                      </li>
                      <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true): ?>
                        <li class="nav-item">
                            <a href="/movies/admin/indexAdmin.php" class="nav-link">Admin Panel</a>
                        </li>
                      <?php endif; ?>
                  </ul>

                    <!-- Search bar and user icon -->
                    <form class="d-flex me-3 search-form">
                        <input class="form-control me-2 search-input" type="search" placeholder="Quick Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                    <?php if(isset($_SESSION['is_admin'])): ?>


                    <!-- Show Admin Email & Logout Button -->
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['user']; ?> <!-- Display Admin Email -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <?php else: ?>
                    <!-- Show Login Icon if Not Logged In -->
                        <i class="bi bi-person-circle profile-icon" data-bs-toggle="modal" data-bs-target="#profileModal"></i>
                    <?php endif; ?>


                    <!-- Profile Modal -->
                    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content custom-modal">
                          <div class="modal-header text-center w-100">
                            <h5 class="modal-title" id="profileModalLabel">Welcome!</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-center">
                            <div class="d-flex justify-content-center gap-3">
                              <button type="button" class="btn btn-login mb-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                              <button type="button" class="btn btn-register mb-2" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Login Modal -->
                    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content custom-modal">
                          <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <form action="login.php" method="post">
                              <div class="mb-3">
                                <label for="loginEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="loginEmail" name="email" required>
                              </div>
                              <div class="mb-3">
                                <label for="loginPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="loginPassword" name="password" required>
                              </div>
                              <button type="submit" class="btn btn-login">Login</button>
                            </form>
                            
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Register Modal -->
                    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content custom-modal">
                          <div class="modal-header">
                            <h5 class="modal-title" id="registerModalLabel">Register</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="../movies/register.php" method="post">
                              <div class="mb-3">
                                <label for="registerEmail" class="form-label">Name</label>
                                <input type="name" class="form-control" id="registerName"  name="name" required>
                              </div>
                              <div class="mb-3">
                                <label for="registerEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="registerEmail"  name="email" required>
                              </div>
                              <div class="mb-3">
                                <label for="registerPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="registerPassword" name="password" required>
                              </div>
                              <div class="mb-3">
                                <label for="registerConfirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="registerConfirmPassword" name="confirm_pw" required>
                              </div>
                              <button type="submit" class="btn btn-register">Register</button>
                            </form>

                            <!--pop-up msg ------------------->
                            <?php
                                // Check if the register success message is present in the URL
                                if(isset($_GET['register']) && $_GET['register'] == 'success') {
                                    echo '<script>
                                            alert("Admin registered successfully.");
                                            // Open login modal
                                            window.onload = function() {
                                                var myModal = new bootstrap.Modal(document.getElementById("loginModal"));
                                                myModal.show();
                                            };
                                          </script>';
                                }
                            ?>
                            <?php
                              // Check if there's an error in the URL (i.e., invalid credentials)
                              if (isset($_GET['error']) && $_GET['error'] == 'Invalid credentials') {
                                  echo '<script>alert("Invalid email or password. Please try again.");</script>';
                              }
                            ?>


                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- JavaScript to handle modal behavior -->
                    <script>
                      // Ensure proper closing behavior for modals
                      document.querySelectorAll('.modal').forEach(modal => {
                        modal.addEventListener('hidden.bs.modal', () => {
                          document.body.classList.remove('modal-open');  // Remove extra classes
                          document.querySelector('.modal-backdrop')?.remove();  // Remove backdrop manually if needed
                        });
                      });
                    </script>
            </div>
        </div>
    </nav>
    <br><br>