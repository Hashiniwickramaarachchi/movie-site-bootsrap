<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container-fluid">
            <!-- Brand logo -->
            <a href="#" class="navbar-brand">
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
                          <a href="#" class="nav-link active">Home</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">About Us</a>
                      </li>
                      <li class="nav-item">
                          <a href="contact.php" class="nav-link">Contact Us</a>
                      </li>
                  </ul>

                    <!-- Search bar and user icon -->
                    <form class="d-flex me-3 search-form">
                        <input class="form-control me-2 search-input" type="search" placeholder="Quick Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                    <i class="bi bi-person-circle profile-icon" data-bs-toggle="modal" data-bs-target="#profileModal"></i>

                    <!-- Profile Modal -->
                    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content custom-modal">
                          <div class="modal-header">
                            <h5 class="modal-title" id="profileModalLabel">Welcome!</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body text-center">
                            <button type="button" class="btn btn-login mb-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                            <button type="button" class="btn btn-register" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
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
                            <form>
                              <div class="mb-3">
                                <label for="loginEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="loginEmail" required>
                              </div>
                              <div class="mb-3">
                                <label for="loginPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="loginPassword" required>
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
                            <form>
                              <div class="mb-3">
                                <label for="registerEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="registerEmail" required>
                              </div>
                              <div class="mb-3">
                                <label for="registerPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="registerPassword" required>
                              </div>
                              <div class="mb-3">
                                <label for="registerConfirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="registerConfirmPassword" required>
                              </div>
                              <button type="submit" class="btn btn-register">Register</button>
                            </form>
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