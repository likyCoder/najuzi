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
        
        .impact-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }
        
        .impact-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .impact-card:hover {
            transform: translateY(-10px);
        }
        
        .impact-icon {
            font-size: 50px;
            color: #ff8400;
            margin-bottom: 20px;
        }
        
        .school-list {
            columns: 2;
            -webkit-columns: 2;
            -moz-columns: 2;
        }
        
        .testimonial-section {
            background-color: #ff8400;
            color: white;
            padding: 60px 0;
        }
        
        .testimonial-card {
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .stats-section {
            padding: 60px 0;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/images/library-bg.jpg') no-repeat center center/cover;
            color: white;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
        }
        
        .stat-number {
            font-size: 48px;
            font-weight: bold;
            color: #ff8400;
        }
    </style>
<body>
    @include('includes.header')
         <!-- Hero Section -->
    <section>
        <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(1, 1, 1, 0.5),rgba(38, 0, 255, 0.826)), url('assets/images/impact.png') no-repeat center center;">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h1 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Impact of Najuzi Digital Library</h1>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary"><h5 style="color:#ff8400;display:block;">Impact Page</h5></li>
                </ol>    
            </div>
        </div>
    </section>
    <main>
    
    <!-- Impact Overview Section -->
    <section class="impact-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Transforming Education Through Technology</h2>
                <p class="lead">Najuzi Digital Library is revolutionizing learning by providing interactive tools that cater to different learning aptitudes.</p>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="impact-card">
                        <div class="impact-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Enhanced Learning Experience</h3>
                        <p>The system provides materials in both text (notes) and video formats, allowing students to choose the learning method that suits them best. This multi-approach system helps learners visualize concepts and improve information retention.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="impact-card">
                        <div class="impact-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <h3>School Benefits</h3>
                        <p>The system has helped schools generate additional income through library fees. Many schools charge an additional 35,000 UGX on fees for the computer program, which helps them raise more funds than they actually pay, with the balance being used to meet other school needs.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="impact-card">
                        <div class="impact-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Stakeholder Satisfaction</h3>
                        <p>In schools where the system has been installed, we've received positive responses from all stakeholders - students, teaching staff, and parents. Even students previously disinterested in education have shown remarkable turnaround.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="impact-card">
                        <div class="impact-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h3>Technology Integration</h3>
                        <p>Computers are now seen as learning tools for every student, not just for computer classes. Our upcoming tablet program will further integrate technology directly into classroom learning.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">30+</div>
                        <h4>Schools Served</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">3</div>
                        <h4>Years of Operation</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">1000s</div>
                        <h4>Students Impacted</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number">2</div>
                        <h4>Content Formats</h4>
                        <p>(Text & Video)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="testimonial-section">
        <div class="container">
            <h2 class="text-center mb-5">What People Are Saying</h2>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p><i>"Students previously disinterested in education have had a turn around and computers are now seen as learning tools for every student."</i></p>
                        <p><strong>- School Administrator</strong></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p><i>"Parents have seen this as a good school innovation and are more responsive towards school development requirements."</i></p>
                        <p><strong>- Parent Representative</strong></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p><i>"Teachers find it easier to interact with students during lessons with the support of the digital library resources."</i></p>
                        <p><strong>- Teaching Staff</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Schools Using Our System -->
    <section class="impact-section">
        <div class="container">
            <h2 class="text-center mb-5">Schools Using Najuzi Digital Library</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="school-list">
                        <ul>
                            <li>Katikamu Light College</li>
                            <li>Victoria SS Nansana</li>
                            <li>O'ford SS Kyebando</li>
                            <li>Country View Kyebando</li>
                            <li>St John's Baptist Secondary School Ruhoko</li>
                            <li>Wobulenzi College School</li>
                            <li>Focus High School</li>
                            <li>Nserester Vocational Secondary School</li>
                            <li>City Land College Matugga</li>
                            <li>Lake view Sec School</li>
                            <li>Kashari Secondary School</li>
                            <li>Entebbe Lake View</li>
                            <li>Kazinga SS Kalule</li>
                            <li>St.Elizabeth SS - Nkoowe</li>
                            <li>Life Skills Institute Maddu Gomba</li>
                            <li>Yale Secondary School</li>
                            <li>Kasese Secondary School</li>
                            <li>St. John's Seminary Kasese</li>
                            <li>Mt. Ruwenzori Girls Secondary School</li>
                            <li>Nyakatonzi SEED Secondary School Kasese</li>
                            <li>Ntungano High School</li>
                            <li>ST. John's Secondary School Matugga</li>
                            <li>Universal High School Kisaasi</li>
                            <li>Fairway SS</li>
                            <li>Highfield SS</li>
                            <li>Murole High School Academy</li>
                            <li>Kisinga Vocational SS</li>
                            <li>St. Thomas Aquinus S S</li>
                            <li>Trinity High School Kabale</li>
                            <li>Public Trust High School</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="py-5" style="background-color: #f0f0f0;">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Transform Your School's Learning Environment?</h2>
            <a href="contact.php" class="btn btn-primary btn-lg" style="background-color: #ff8400; border: none;">Contact Us Today</a>
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
