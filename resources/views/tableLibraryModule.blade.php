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
        
        .tablet-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/images/tablet-hero.jpg') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .feature-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }
        
        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            text-align: center;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            font-size: 50px;
            color: #ff8400;
            margin-bottom: 20px;
        }
        
        .benefits-section {
            background: linear-gradient(rgb(61, 120, 255), rgba(255, 251, 251, 0.9)), url('assets/images/values.jpg') no-repeat center center/cover;
            color: white;
            padding: 60px 0;
        }
        
        .benefit-item {
            margin-bottom: 30px;
        }
        
        .benefit-number {
            font-size: 48px;
            font-weight: bold;
            color: rgba(255,255,255,0.2);
            margin-right: 15px;
            float: left;
            line-height: 1;
        }
        
        .specs-section {
            padding: 60px 0;
            background-color: white;
        }
        
        .specs-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .specs-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .specs-table th {
            background-color: #ff8400;
            color: white;
            padding: 15px;
            text-align: left;
        }
        
        .specs-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .demo-section {
            background-color: #f0f7ff;
            padding: 60px 0;
        }
        
        .cta-section {
            background: linear-gradient(rgba(0, 255, 255, 0.551), rgba(239, 239, 239, 0.8)), url('assets/images/values.jpg') no-repeat center center/cover;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .gallery-item {
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 10px;
        }
        
        .gallery-item img {
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
    </style>
<body>
    @include('includes.header')
        <!-- Combined Hero Section with Background -->
<section>
  <div class="container-fluid bg-breadcrumb d-flex align-items-center justify-content-center" style="background: url('{{ asset('assets/images/impact.png') }}') no-repeat center center/cover; min-height: 70vh;background-color:#0d0445;">
    <div class="container text-center text-white py-5">
      <h1 class="display-4 mb-3 wow fadeInDown" data-wow-delay="0.1s" style="color: #ff8400;">
        Najuzi Tablet Library Module
      </h1>
      <p class="lead mb-4 wow fadeInUp" data-wow-delay="0.2s">
        Expanding digital learning directly into the classroom with our innovative tablet program
      </p>
      <a href="#contact" class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="0.3s" style="background-color: #ff8400; border: none;">
        Request Early Access
      </a>
      <!-- Breadcrumb -->
      <ol class="breadcrumb d-flex justify-content-center mt-4 wow fadeInDown" data-wow-delay="0.4s">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-primary"><h5 style="color:#ff8400;">Tablet Module</h5></li>
      </ol>
    </div>
  </div>
</section>
<main>

<!-- Intro Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-4">Bringing the Digital Library to Every Desk</h2>
                <p>This year, we're launching our tablet program to expand NAJUZI into the classroom environment. The tablets will support student research during lessons, further enriching their learning journey.</p>
                <p>Our dedicated team of engineers and content experts is working diligently to ensure a seamless and effective implementation of the system in this new setup.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/tablet-in-use.jpg') }}" alt="Student using Najuzi tablet" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="feature-section">
    <div class="container">
        <h2 class="text-center mb-5">Key Features of Our Tablet Module</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Curriculum-Aligned Content</h3>
                    <p>Access to the complete Najuzi Digital Library content optimized for tablet use, including the new O level curriculum materials.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Interactive Video Lessons</h3>
                    <p>Video illustrations and recorded professional discussions to enhance conceptual understanding.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Subject Activities</h3>
                    <p>Interactive activities for various subjects as required by the standards of the New Curriculum.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Real-Time Sync</h3>
                    <p>All progress and notes sync between tablets and the main digital library system.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Secure Environment</h3>
                    <p>Controlled access with robust security features to ensure focused learning.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Teacher Controls</h3>
                    <p>Classroom management tools for teachers to guide tablet usage during lessons.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-center mb-5">How It Works</h2>
        <p class="text-center">The tablets will be distributed to schools as part of our pilot program. Each tablet will come pre-loaded with the Najuzi Digital Library content, allowing students to access educational materials directly in the classroom.</p>
        <p class="text-center">Teachers will have the ability to control and monitor tablet usage, ensuring that students can focus on their studies without distractions.</p>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <h2 class="text-center mb-5">Benefits for Your School</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="benefit-item">
                    <span class="benefit-number">1</span>
                    <h4>Classroom Integration</h4>
                    <p>Extend digital learning beyond the computer lab directly into daily classroom activities.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="benefit-item">
                    <span class="benefit-number">2</span>
                    <h4>Enhanced Engagement</h4>
                    <p>Interactive content keeps students more engaged with learning materials.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="benefit-item">
                    <span class="benefit-number">3</span>
                    <h4>Research Support</h4>
                    <p>Students can conduct research during lessons with curated educational resources.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="benefit-item">
                    <span class="benefit-number">4</span>
                    <h4>Cost-Effective</h4>
                    <p>Tablets provide a more affordable way to expand digital access compared to full workstations.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="benefit-item">
                    <span class="benefit-number">5</span>
                    <h4>Flexible Learning</h4>
                    <p>Supports different learning styles with multimedia content accessible anywhere.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="benefit-item">
                    <span class="benefit-number">6</span>
                    <h4>Future-Ready</h4>
                    <p>Prepares students with 21st century digital skills using modern technology.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specs -->
<section class="specs-section">
    <div class="container">
        <h2 class="text-center mb-5">Technical Specifications</h2>
        <div class="table-responsive">
            <table class="specs-table">
                <tr>
                    <th colspan="2">Tablet Hardware</th>
                </tr>
                <tr>
                    <td width="30%">Display</td>
                    <td>10.1&quot; HD IPS Touchscreen (1280×800)</td>
                </tr>
                <tr>
                    <td>Processor</td>
                    <td>Quad-core 2.0GHz</td>
                </tr>
                <tr>
                    <td>Memory</td>
                    <td>3GB RAM, 32GB Storage (expandable via microSD)</td>
                </tr>
                <tr>
                    <td>Battery</td>
                    <td>6000mAh (Up to 8 hours of continuous use)</td>
                </tr>
                <tr>
                    <td>Connectivity</td>
                    <td>Wi-Fi 802.11 a/b/g/n/ac, Bluetooth 4.2</td>
                </tr>
                <tr>
                    <td>Operating System</td>
                    <td>Customized Android for Education</td>
                </tr>
                <tr>
                    <th colspan="2">Software Features</th>
                </tr>
                <tr>
                    <td>Content</td>
                    <td>Full Najuzi Digital Library with text, videos, and activities</td>
                </tr>
                <tr>
                    <td>Updates</td>
                    <td>Automatic content updates when connected to school network</td>
                </tr>
                <tr>
                    <td>Security</td>
                    <td>Device management system with classroom controls</td>
                </tr>
            </table>
        </div>
    </div>
</section>

<!-- Demo Section -->
<section class="demo-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-4">See It In Action</h2>
                <p>We're currently running pilot programs with select schools to refine the tablet experience before full launch.</p>
                <p>Contact us to schedule a demo or inquire about participating in our pilot program.</p>
                <div class="mt-4">
                    <a href="#contact" class="btn btn-primary" style="background-color: #ff8400; border: none;">Request Demo</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/example" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Tablet Module in Schools</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/tablet-class-1.jpg') }}" alt="Tablets in classroom" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/tablet-class-2.jpg') }}" alt="Students using tablets" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="{{ asset('assets/images/tablet-class-3.jpg') }}" alt="Teacher with tablets" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section text-center text-white py-5" style="background-color:rgb(0, 123, 255);" id="contact">
    <div class="container">
        <h2 class="display-5 fw-bold mb-3" style="color: orange;">Ready to Transform Your Classrooms?</h2>
        <p class="lead mb-4">Be among the first schools to implement the <strong>Najuzi Tablet Library Module</strong>.</p>
        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
            <a href="{{ url('contact') }}" class="btn btn-light btn-lg shadow">Contact Us</a>
            <a href="tel:+256704855652" class="btn btn-outline-light btn-lg shadow">
                <i class="fas fa-phone-alt me-2"></i> Call Now
            </a>
        </div>
    </div>
    <hr class="mt-5 border-light opacity-50">
</section>
<!-- End of CTA Section -->

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
