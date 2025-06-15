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
        @media (min-width: 992px) {
            .navbar .nav-item .dropdown-menu {
                display: block;
                visibility: hidden;
                top: 100%;
                transform: rotateX(-75deg);
                transform-origin: 0% 0%;
                border: 0;
                border-radius: 10px;
                transition: .5s;
                opacity: 0;
            }
        }
        
        .packages-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }
        
        .package-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border-top: 5px solid #ff8400;
        }
        
        .package-card:hover {
            transform: translateY(-10px);
        }
        
        .package-icon {
            font-size: 50px;
            color: #ff8400;
            margin-bottom: 20px;
        }
        
        .package-price {
            font-size: 28px;
            font-weight: bold;
            color: #ff8400;
            margin: 20px 0;
        }
        
        .features-list {
            list-style-type: none;
            padding-left: 0;
        }
        
        .features-list li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        .features-list li:before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: #ff8400;
            margin-right: 10px;
        }
        
        .note-section {
            background-color: #fff8e6;
            padding: 30px;
            border-radius: 10px;
            margin: 40px 0;
            border-left: 5px solid #ff8400;
        }
        
        .tablet-section {
            background-color: #f0f7ff;
            padding: 40px;
            border-radius: 10px;
            margin: 40px 0;
        }
        
        .installation-gallery {
            margin: 40px 0;
        }
        
        .gallery-item {
            margin-bottom: 30px;
        }
        
        .gallery-item img {
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        
        .gallery-item img:hover {
            transform: scale(1.03);
        }
        
        .gallery-caption {
            background-color: rgba(0,0,0,0.7);
            color: white;
            padding: 10px;
            border-radius: 0 0 10px 10px;
            margin-top: -5px;
        }
    </style>
<body>
    @include('includes.header')
       <!-- Hero Section -->
<section>
    <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(1, 1, 1, 0.5),rgba(38, 0, 255, 0.826)), url('assets/images/impact.png') no-repeat center center;">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Setup and Packaging</h1>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary"><h5 style="color:#ff8400;display:block;">Setup and Packaging</h5></li>
            </ol>    
        </div>
    </div>
</section>
<main>

<!-- Packages Section -->
<section class="packages-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Our School Subscription Packages</h2>
            <p class="lead">We offer different termly subscription package arrangements to suit your school's needs</p>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="package-card">
                    <div class="package-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3>10 Computer Work Stations</h3>
                    <div class="package-price">5M UGX/term</div>
                    <ul class="features-list">
                        <li>10 workstations plus a server</li>
                        <li>After 3 terms of prompt payment, stations become school property</li>
                        <li>Initial setup requires 50% upfront payment</li>
                        <li>Remaining balance due during the term</li>
                    </ul>
                    <div class="text-center mt-4">
                        <a href="{{ url('contact') }}" class="btn btn-primary" style="background-color: #ff8400; border: none;">Inquire Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="package-card">
                    <div class="package-icon">
                        <i class="fas fa-laptop-house"></i>
                    </div>
                    <h3>20 Computer Work Stations</h3>
                    <div class="package-price">8M UGX/term</div>
                    <ul class="features-list">
                        <li>20 workstations plus a server</li>
                        <li>After 3 terms of prompt payment, stations become school property</li>
                        <li>Initial setup requires 50% upfront payment</li>
                        <li>Remaining balance due during the term</li>
                    </ul>
                    <div class="text-center mt-4">
                        <a href="{{ url('contact') }}" class="btn btn-primary" style="background-color: #ff8400; border: none;">Inquire Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="package-card">
                    <div class="package-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>30 Computer Work Stations</h3>
                    <div class="package-price">12M UGX/term</div>
                    <ul class="features-list">
                        <li>30 workstations plus a server</li>
                        <li>After 3 terms of prompt payment, stations become school property</li>
                        <li>Initial setup requires 50% upfront payment</li>
                        <li>Remaining balance due during the term</li>
                    </ul>
                    <div class="text-center mt-4">
                        <a href="{{ url('contact') }}" class="btn btn-primary" style="background-color: #ff8400; border: none;">Inquire Now</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="note-section">
            <h4><i class="fas fa-info-circle text-warning"></i> Important Notes About Our Packages</h4>
            <ol>
                <li>All packages carry 50% charge for the hardware and 50% charge for the software (Najuzi digital library).</li>
                <li>General maintenance of the system and program upgrade is included in each package.</li>
                <li>Schools don't incur extra costs for maintenance as long as they promptly pay their termly installments.</li>
                <li>The library program (Najuzi digital Library) and the Special Server will always remain property of NAJUZI INVESTMENTS.</li>
            </ol>
        </div>
    </div>
</section>

<!-- Application Subscription Section -->
<section class="py-5" style="background-color: #f0f0f0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Application Subscription Options</h2>
                <p>For schools that already have their own hardware, we offer subscription-based access to our application:</p>
                <ul class="features-list">
                    <li>1-30 stations: 1,500,000 UGX termly</li>
                    <li>30-50 stations: 2,000,000 UGX termly</li>
                    <li>50-100 stations: 3,000,000 UGX termly (covers up to 50 user stations)</li>
                </ul>
                <p class="mt-3"><strong>Note:</strong> Najuzi Investment (under COM-TEC (U) LTD) retains ownership of the application and its associated hardware.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/application-subscription.jpg') }}" alt="Application Subscription" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Tablet Program Section -->
<section class="tablet-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <h2>Coming Soon: Tablet Program</h2>
                <p>This year, we will launch our tablet program, expanding NAJUZI into the classroom:</p>
                <ul class="features-list">
                    <li>Tablets will support student research during lessons</li>
                    <li>Further enriching the learning journey</li>
                    <li>Our team of engineers and content experts are working on seamless implementation</li>
                    <li>Perfect for classroom integration and mobile learning</li>
                </ul>
                <div class="mt-4">
                    <a href="{{ url('contact') }}" class="btn btn-primary" style="background-color: #ff8400; border: none;">Get Updates</a>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('assets/images/tablet-program.jpg') }}" alt="Tablet Program" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Installation Gallery -->
<section class="installation-gallery">
    <div class="container">
        <h2 class="text-center mb-5">Our Installation Projects</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/kasese-secondary.jpg') }}" alt="Kasese Secondary Digital Library" class="img-fluid">
                    <div class="gallery-caption">Kasese Secondary Digital Library</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/kisinga-vocational.jpg') }}" alt="Kisinga Vocational School" class="img-fluid">
                    <div class="gallery-caption">Kisinga Vocational School Digital Library</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/ntungano-high.jpg') }}" alt="Ntungano High School" class="img-fluid">
                    <div class="gallery-caption">Ntungano High School Digital Library</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5" style="background-color: #ff8400; color: white;">
    <div class="container text-center">
        <h2 class="mb-4">Ready to Set Up Najuzi Digital Library in Your School?</h2>
        <p class="lead mb-4">Contact us today to discuss the best package for your institution</p>
        <a href="{{ url('contact') }}" class="btn btn-light btn-lg">Get Started Now</a>
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
