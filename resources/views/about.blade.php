<!DOCTYPE html>
<html lang="en">
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta charset="utf-8">
        <title>Najuzi Digital Library</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="assets/header.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/index.css">
        <link rel="stylesheet" href="assets/home.css">
        
        

        <!-- Favicon -->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Alternative PNG Favicon -->
        <link rel="icon" href="/img/favicon.png" type="image/png">
        <!-- For Apple Touch Icons -->
        <link rel="apple-touch-icon" href="/img/favicon.png">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="includes/header.css">
    </head>
     <style>
        :root {
            --orange: #FF6B35;
            --blue: #004E89;
            --black: #2D2D2D;
            --white: #FFFFFF;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        .text-orange { color: var(--orange); }
        .text-blue { color: var(--blue); }
        .bg-orange { background-color: var(--orange); }
        .bg-blue { background-color: var(--blue); }
        .bg-orange-soft { background-color: rgba(255, 107, 53, 0.1); }
        .bg-blue-soft { background-color: rgba(0, 78, 137, 0.1); }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }
        .contact-section{
            background: linear-gradient(rgba(1, 46, 173, 0.60), rgba(170, 170, 171, 0.5)), url('assets/screen/class.png') no-repeat center center;
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0 80px;
            position: relative;
        }
        .hero-section {
            background: linear-gradient(rgba(38, 0, 255, 0.826), rgba(1, 1, 1, 0.5)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0 80px;
            position: relative;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 50px;
            text-align: center;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--orange);
            margin: 15px auto 0;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .card-icon {
            width: 70px;
            height: 70px;
            background: var(--orange);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 28px;
        }
        
        .timeline {
            position: relative;
            padding: 40px 0;
        }
        
        .timeline:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--orange);
            left: 50%;
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 60px;
            width: calc(50% - 40px);
        }
        
        .timeline-item:nth-child(odd) {
            float: left;
            clear: right;
            padding-right: 40px;
        }
        
        .timeline-item:nth-child(even) {
            float: right;
            clear: left;
            padding-left: 40px;
        }
        
        .timeline-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            position: relative;
        }
        
        .timeline-content:after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: var(--orange);
            border-radius: 50%;
            top: 30px;
        }
        
        .timeline-item:nth-child(odd) .timeline-content:after {
            right: -60px;
        }
        
        .timeline-item:nth-child(even) .timeline-content:after {
            left: -60px;
        }
        
        .impact-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            height: 100%;
        }
        
        .impact-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--orange);
            margin-bottom: 10px;
        }
        
        .partner-logo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
        }
        
        .partner-logo {
            background: white;
            border-radius: 8px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: 100px;
        }
        
        .team-member {
            text-align: center;
        }
        
        .team-photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 5px solid white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .contact-box {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .contact-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: var(--blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 24px;
        }
        
        @media (max-width: 768px) {
            .timeline:before {
                left: 30px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 0;
            }
            
            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even) {
                float: none;
                padding: 0 0 0 70px;
                margin-left: 0;
                clear: both;
            }
            
            .timeline-content:after {
                left: -60px;
            }
        }
    </style>
<body>

    @include('includes.header')

    
    <main>
       <!-- Hero Section -->
   <section class="hero hero-section d-flex ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInDown text-orange">Transforming Education in Uganda</h1>
                    <p class="lead mb-5 animate__animated animate__fadeIn animate__delay-1s">Najuzi Digital Library is revolutionizing learning through innovative technology solutions designed for African students.</p>
                    <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#contact" class="btn btn-lg bg-orange text-white px-4 py-3">Get in Touch</a>
                        <a href="#services" class="btn btn-lg btn-outline-light px-4 py-3">Our Solutions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="text-blue mb-4">Our Journey</h2>
                    <p class="lead">Najuzi Digital Library was born out of a desire to transform education in Uganda and beyond. Our journey began in 2018 when engineers from COM-TEC (U) LTD, CMAKTECH Australia, and CMACKTECK Singapore identified a critical gap in the education system.</p>
                    <p>After interactions with university students during internships at COM-TECH (U) LTD, it became clear that many learners struggled to conceptualize information presented through traditional teaching methods. This insight sparked the creation of a system that would level the playing field for students with different learning aptitudes.</p>
                    <p>Today, Najuzi Digital Library has grown into a comprehensive learning platform serving dozens of schools across Uganda, with our innovative solutions reaching thousands of students every day.</p>
                    <div class="mt-4">
                        <a href="#impact" class="btn bg-orange text-white px-4 py-2">See Our Impact</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Students using Najuzi Digital Library" class="img-fluid rounded shadow">
                        <div class="position-absolute top-0 start-0 bg-orange text-white p-3 rounded" style="transform: translate(-20%, -20%);">
                            <div class="h4 mb-0">Since</div>
                            <div class="h1 mb-0">2018</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5 bg-blue text-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="card bg-blue-soft border-0 h-100">
                        <div class="card-body p-4">
                            <div class="card-icon mb-4">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="text-blue mb-3">Our Mission</h3>
                            <p class="mb-0">To create an environment that supports cognitive learning and produces a workforce capable of providing services to customer satisfaction. We aim to nurture a prestigious generation of service providers for this technology-advancing world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-orange-soft border-0 h-100">
                        <div class="card-body p-4">
                            <div class="card-icon mb-4">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="text-orange mb-3">Our Vision</h3>
                            <p class="mb-0">To have a computer station for every student. We believe that increasing access to technology will improve the efficiency of the education system, enhance student outcomes, and elevate school performance across Uganda and beyond.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Solutions -->
    <section id="services" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title text-blue">Our Learning Solutions</h2>
                <p class="lead">Innovative educational technology designed for African classrooms</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="card-icon mb-4">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <h3 class="text-blue mb-3">Desktop Learning Stations</h3>
                            <p>Our original solution featuring thin client computer stations installed in school libraries. These energy-efficient stations consume just 1.5% of the electricity required by traditional desktops.</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">Flexible packages: 10, 20, or 30 stations</li>
                                <li class="list-group-item">Ownership after 3 terms of prompt payment</li>
                                <li class="list-group-item">Includes server, maintenance, and updates</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="card-icon mb-4">
                                <i class="fas fa-tablet-alt"></i>
                            </div>
                            <h3 class="text-blue mb-3">Tablet Library Module</h3>
                            <p>Our latest innovation offering unmatched portability and flexibility. Tablets stationed throughout the library allow students to access resources on-demand in a comfortable, mobile format.</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">Rich multimedia learning: videos, text notes</li>
                                <li class="list-group-item">User-friendly interface familiar to students</li>
                                <li class="list-group-item">Flexible pricing based on number of tablets</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="card-icon mb-4">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <h3 class="text-blue mb-3">Application Subscription</h3>
                            <p>For institutions that already have hardware, we offer a subscription-based access to our Najuzi Digital Library application with comprehensive learning materials.</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item">Flexible term-based pricing</li>
                                <li class="list-group-item">Includes all updates and maintenance</li>
                                <li class="list-group-item">Scalable to any number of stations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section id="impact" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title text-blue">Our Impact</h2>
                <p class="lead">Transforming education across Uganda</p>
            </div>
            
            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="impact-card text-center">
                        <div class="impact-number">30+</div>
                        <h5>Partner Schools</h5>
                        <p>Across multiple districts in Uganda</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="impact-card text-center">
                        <div class="impact-number">1000+</div>
                        <h5>Learning Stations</h5>
                        <p>Installed in schools nationwide</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="impact-card text-center">
                        <div class="impact-number">50,000+</div>
                        <h5>Students Served</h5>
                        <p>Accessing quality digital resources</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="impact-card text-center">
                        <div class="impact-number">100%</div>
                        <h5>Curriculum Aligned</h5>
                        <p>Content matches O'LEVEL curriculum</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h3 class="text-blue mb-4">Educational Transformation</h3>
                    <p>In schools where Najuzi Digital Library has been implemented, we've witnessed remarkable transformations:</p>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent">Previously disinterested students have become engaged learners</li>
                        <li class="list-group-item bg-transparent">Computers are now viewed as essential learning tools for all students</li>
                        <li class="list-group-item bg-transparent">Teachers find it easier to interact with students during lessons</li>
                        <li class="list-group-item bg-transparent">Students can rapidly access required information without internet distractions</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-blue mb-4">Financial Benefits for Schools</h3>
                    <p>Our solutions also create financial opportunities for educational institutions:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent">Schools generate surplus revenue by charging small fees for library access</li>
                        <li class="list-group-item bg-transparent">Additional income helps schools acquire more computers and resources</li>
                        <li class="list-group-item bg-transparent">Balances can be diverted to meet other pressing school needs</li>
                        <li class="list-group-item bg-transparent">Operational cost savings through energy-efficient thin clients</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Schools -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title text-blue">Our Partner Schools</h2>
                <p class="lead">Trusted by educational institutions across Uganda</p>
            </div>
            
            <div class="partner-logo-grid mb-5">
                <div class="partner-logo">St. John's Seminary Kasese</div>
                <div class="partner-logo">St. Elizabeth SS Nkowe</div>
                <div class="partner-logo">Ntungano High School</div>
                <div class="partner-logo">Victoria SS Nansana</div>
                <div class="partner-logo">Kabale Trinity College</div>
                <div class="partner-logo">Wobulenzi College</div>
                <div class="partner-logo">Kasese Secondary School</div>
                <div class="partner-logo">Universal High School Kisaasi</div>
            </div>
            
            <div class="text-center">
                <p class="lead">And many more institutions across Kampala, Wakiso, Luwero, Kayunga, Kasese, Ntungano, Kabale, Hoima and Masaka</p>
            </div>
        </div>
    </section>

    <!-- Leadership -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title text-blue">Our Leadership</h2>
                <p class="lead">Driving innovation in educational technology</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-member">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Robert Kabuusu" class="team-photo">
                        <h3 class="mt-3">Robert Kabuusu</h3>
                        <p class="text-orange fw-bold">General Manager</p>
                        <p>With extensive experience in educational technology, Robert leads our mission to transform learning experiences across Uganda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 contact-section text-secondary">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title text-warning">Get Started today </h2>
                <p class="lead text-white">Ready to transform your school's learning experience?</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="text-warning">Our Location</h4>
                        <p>PLOT 29 LUWUM STREET KIZITO TOWERS<br>P.O BOX 25435 KAMPALA, UGANDA</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4 class="text-warning">Contact Us</h4>
                        <p>Tel: 0200990198, 0787-722955<br>0773-319593, 0702-518998</p>
                        <p>Fax: 0414-251238</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4 class="text-warning">Email Us</h4>
                        <p>info@com-tecuganda.com<br>info@najuzi.com</p>
                        <p>Website: www.najuzi.com</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-5 text-center">
                <h4 class="mb-4 text-white">Regional Coordinators</h4>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="bg-blue-soft p-4 rounded">
                            <h5 class="text-warning">Central Region</h5>
                            <p class="text-white">0789 073 334 / 0700 125 546<br>info@najuzi.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-blue-soft p-4 rounded">
                            <h5 class="text-warning">Western Region</h5>
                            <p class="text-white">0777 241 819 / 0705 414 560<br>0707 585 388<br>info@najuzi.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
   
 
    
        <!-- Add Font Awesome for icons if needed -->
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>    
</body>
 @include('includes.footer')
<script>
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const expanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !expanded);
        const answer = document.getElementById(button.getAttribute('aria-controls'));
        answer.setAttribute('aria-hidden', expanded);
    });
});
  function toggleMenu() {
    document.getElementById("navMenu").classList.toggle("active");
  }
   AOS.init({
      once: true,
      duration: 1000
    });
</script>
 <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

</html>
