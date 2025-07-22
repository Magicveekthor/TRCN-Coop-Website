    <header class="header shadow-sm py-2">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <!-- Logo -->
                <a class="navbar-brand" href="index.php">
                    <img src="assets/logo/TRCN_SMCS_LOGO.png" alt="trcn_staff_coop_logo" class="logo-img" />
                </a>

                <!-- Toggler (mobile) -->
                <button
                    class="navbar-toggler ms-auto border-0"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarContent"
                    aria-controls="navbarContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               <!-- Collapsible content -->
               <div class="collapse navbar-collapse" id="navbarContent">
                   <!-- Nav links -->
                   <ul class="navbar-nav mx-lg-auto nav-links text-center text-lg-start">
                       <li class="nav-item">
                           <a class="nav-link" href="index.php">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="about-us.php">About Us</a>
                       </li>

                       <!-- Dropdown -->
                       <li class="nav-item dropdown custom-dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Our Services
                           </a>
                           <div class="dropdown-menu custom-mega-menu p-4 float-slow" aria-labelledby="servicesDropdown">
                                <div class="row gx-3 gy-4">
                                    <div class="col-12 col-sm-6">
                                        <a href="savings.php" class="dropdown-box savings-box">
                                            <img src="assets/icons/savings.png" alt="savings icon" class="icon">
                                            <div>
                                                <h6>Savings</h6>
                                                <p>Goal-oriented Savings</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <a href="loan.php" class="dropdown-box loans-box">
                                            <img src="assets/icons/loans.png" alt="loans icon" class="icon">
                                            <div>
                                                <h6>Loans</h6>
                                                <p>Flexible Loans</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <a href="investment.php" class="dropdown-box investment-box">
                                            <img src="assets/icons/investment.png" alt="investment icon" class="icon">
                                            <div>
                                                <h6>Investments</h6>
                                                <p>Grow your Money</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <a href="real-estate.php" class="dropdown-box estate-box">
                                            <img src="assets/icons/estate.png" alt="real-estate icon" class="icon">
                                            <div>
                                                <h6>Real Estate</h6>
                                                <p>Goal-oriented Savings</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                           </div>
                       </li>

                       <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                       </li>

                       <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                       </li>
                   </ul>

                   <!-- Right-aligned buttons -->
                   <div class="d-flex flex-column flex-lg-row gap-3 header-btn mt-3 mt-lg-0 ms-lg-auto">
                       <a href="#" class="btn signin-btn">Sign In</a>
                       <a href="#" class="btn signup-btn">Get Started</a>
                   </div>
               </div>
            </nav>
        </div>
    </header>