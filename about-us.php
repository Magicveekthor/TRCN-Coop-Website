<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/logo/TRCN_SMCS_LOGO.png">
    <title>About - Teachers Registration Council of Nigeria</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- css stylesheet -->
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php' ?>

    
    <section class="coop-about-page container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-md-0 hero-text">
                <span class="mission-badge mb-3">Our Mission</span>
                
                <div class="mission-text">
                    <h1 class="mb-4">
                        To empower everyone<br>
                        with the power they
                        need to manage and
                        expand their finances.
                    </h1>
                    <a href="#" class="byelaw-link">Read our Bye-Law here</a>
                </div>
            </div>

            <!-- Image Content -->
            <div class="col-lg-6 text-center">
                <img src="assets/about/about us.png" alt="trcn_staff_coop_hero" class="about-banner float img-fluid">
            </div>
        </div>
    </section>



    <section class="coop-about-outline">
        <div class="container">
            <div class="row align-items-center mb-5">
                <!-- Image Content -->
                <div class="col-lg-6">
                    <img src="assets/loans/loan_1.png" alt="trcn_staff_coop_hero" class="about-img img-fluid">
                </div>
                
                <!-- Text Content -->
                <div class="col-lg-6 mb-5">
                    <div class="intro-text mb-5">
                        <h1 class="bg-text mb-4">The Cooperative History</h1>
                        <div class="coa-list mb-4">
                            <p class="mb-4"> 
                                As part of its welfare concerns, the Department of Professional 
                                Operations under the leadership of Dr. Njokwu Steve initiated a 
                                plan to explore the possibility of forming a cooperative society
                            </p>

                            <p class="mb-4"> 
                                It was later embraced by the then Director, Admin and Finance, 
                                Dr. Ogwuche Godwin who through his office and the then AD Admin 
                                Mr. Bulus Mshelia recommended the representation of all the departments 
                                to work out modalities for establishment of such society in TRCN.
                            </p>

                            <p>
                                The representatives were later transformed into a 7-man Committee on
                                formation of cooperative society in TRCN which was... <a href="#" onclick="toggleMoreText(event)" class="read_more_link">READ MORE</a> 
                            </p>

                            <div id="more-text">
                                <p>
                                    inaugurated officially in June 2020. The committee was tasked with developing 
                                    the bye-laws, membership criteria, contribution mechanisms, and selecting the 
                                    executive officers. After several consultative meetings and approvals, the 
                                    TRCN Staff Cooperative Society was launched to help improve members’ financial 
                                    security and support communal investment opportunities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>   
    </section>



    <section class="about-numbers container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-12 pt-4">
                <h3 class="fw-bold numbers-title">
                    Our Impact in <br>
                    Numbers
                </h3>
            </div>

            <div class="col-lg-8 col-sm-12 my-5">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="coop-about-card">
                            <div class="coop-about-icon mb-3">
                                <img src="assets/about/icon_1.png"  alt="coop-savings-icon"> 
                            </div>

                            <h4 class="coop-about-title">&#8358; 100.6 Million</h4>

                            <p class="coop-about-descrip">
                                Invested in Impact Projects
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="coop-about-card">
                            <div class="coop-about-icon mb-3">
                                <img src="assets/about/icon_2.png"  alt="coop-savings-icon"> 
                            </div>

                            <h4 class="coop-about-title">&#8358; 92.7 Million</h4>

                            <p class="coop-about-descrip">
                                Paid out to members
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="coop-partners cp mt-5">
        <div class="container">
            <div class="row d-lg-flex align-items-center">
                <!-- Left: Text -->
                <div class="col-lg-3 col-sm-12 px-4 partner-text mb-4 mb-lg-0">
                    <h4 class="fw-bold">Our Partners</h4>
                </div>

                <!-- Right: Logos -->
                <div class="col-lg-9">
                    <div class="partner-image">
                        <img src="assets/partners/cowry.png" alt="Cowry" class="img-fluid">
                        <img src="assets/partners/sterling.png" alt="Sterling" class="img-fluid">
                        <img src="assets/partners/cordros.png" alt="Cordros" class="img-fluid">
                        <img src="assets/partners/emrald.png" alt="Emerald" class="img-fluid">
                        <img src="assets/partners/unity.png" alt="Unity" class="img-fluid">
                        <img src="assets/partners/first bank.png" alt="FirstBank" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>    
    
    <?php include 'includes/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>