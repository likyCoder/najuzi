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
            /* Team Section Styling */
            .team-section {
                padding: 80px 0;
                background-color: #f9f9f9;
            }
            
            .section-title {
                text-align: center;
                margin-bottom: 60px;
            }
            
            .section-title h2 {
                font-size: 36px;
                font-weight: 700;
                color: #0d0445;
                margin-bottom: 15px;
            }
            
            .section-title p {
                font-size: 18px;
                color: #666;
                max-width: 800px;
                margin: 0 auto;
            }
            
            .department-card {
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                margin-bottom: 30px;
                overflow: hidden;
                transition: all 0.3s ease;
            }
            
            .department-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            }
            
            .department-header {
                background: linear-gradient(rgba(38, 0, 255, 0.826), rgba(1, 1, 1, 0.5)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
                color: white;
                padding: 20px;
                text-align: center;
            }
            
            .department-header h3 {
                margin: 0;
                font-size: 24px;
                font-weight: 800;
                color: #ff8400;
            }
            
            .team-members {
                padding: 20px;
            }
            
            .team-member {
                display: flex;
                align-items: center;
                padding: 15px 0;
                border-bottom: 1px solid #eee;
            }
            
            .team-member:last-child {
                border-bottom: none;
            }
            
            .member-img {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                overflow: hidden;
                margin-right: 15px;
                border: 3px solid #f1f1f1;
            }
            
            .member-img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            
            .member-info h4 {
                margin: 0 0 5px;
                font-size: 18px;
                color: #333;
            }
            
            .member-info p {
                margin: 0;
                color: #666;
                font-size: 14px;
            }
            
            .member-social {
                margin-left: auto;
            }
            
            .member-social a {
                color: #ff8400;
                margin-left: 10px;
                font-size: 16px;
                transition: all 0.3s ease;
            }
            
            .member-social a:hover {
                color: #0d0445;
            }
            
            .department-icon {
                font-size: 40px;
                color: #ff8400;
                margin-bottom: 15px;
            }
            
            @media (max-width: 767px) {
                .section-title h2 {
                    font-size: 28px;
                }
                
                .department-header h3 {
                    font-size: 20px;
                    color: #ff8400;
                    font-weight: 800;
                }
                
                .team-member {
                    flex-direction: column;
                    text-align: center;
                }
                
                .member-img {
                    margin-right: 0;
                    margin-bottom: 10px;
                }
                
                .member-social {
                    margin-left: 0;
                    margin-top: 10px;
                }
            }
        </style>
<body>
    @include('includes.header')
     <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(1, 1, 1, 0.5),rgba(38, 0, 255, 0.826)), url('assets/images/impact.png') no-repeat center center;">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our team </h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">
                        <h5 style="color:#ff8400;display:block;">Team Page</h5>
                    </li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    <main>

        <!-- Team Section -->
        <section class="team-section">
            <div class="container">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Meet Our Team</h2>
                    <p>At Najuzi Digital Library, we have assembled a talented team of professionals dedicated to delivering exceptional digital library services.</p>
                </div>
                
                <div class="row">
                    <!-- Marketing Department -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="department-card">
                            <div class="department-header">
                                <div class="department-icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <h3>Marketing Department</h3>
                            </div>
                            <div class="team-members">
                                <div class="team-member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/team/team.jpg') }}" alt="Mr. Wanjama Frank">
                                    </div>
                                    <div class="member-info">
                                        <h4>Mr. Wanjama Frank</h4>
                                        <p>Sales</p>
                                    </div>
                                    <div class="member-social">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="team-member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/team/team.jpg') }}" alt="Mr. Kasirye William">
                                    </div>
                                    <div class="member-info">
                                        <h4>Mr. Kasirye William</h4>
                                        <p>Customer Care</p>
                                    </div>
                                    <div class="member-social">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content Department -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="department-card">
                            <div class="department-header">
                                <div class="department-icon">
                                    <i class="fas fa-pen-fancy"></i>
                                </div>
                                <h3>Content Department</h3>
                            </div>
                            <div class="team-members">
                                <div class="team-member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/team/team.jpg') }}" alt="Mr. Ssekalembe Samson">
                                    </div>
                                    <div class="member-info">
                                        <h4>Mr. Ssekalembe Samson</h4>
                                        <p>Content Specialist</p>
                                    </div>
                                    <div class="member-social">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="team-member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/team/team.jpg') }}" alt="Mr. Wagaba Adrian">
                                    </div>
                                    <div class="member-info">
                                        <h4>Mr. Wagaba Adrian</h4>
                                        <p>Content Specialist</p>
                                    </div>
                                    <div class="member-social">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="team-member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/team/team.jpg') }}" alt="Ms. Marunga Ryhannah">
                                    </div>
                                    <div class="member-info">
                                        <h4>Ms. Marunga Ryhannah</h4>
                                        <p>Content Specialist</p>
                                    </div>
                                    <div class="member-social">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Technical Department -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="department-card">
                            <div class="department-header">
                                <div class="department-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h3>Technical Department</h3>
                            </div>
                            <div class="team-members">
                                <div class="team-member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/team/team.jpg') }}" alt="Mr. Tumusime Crescent">
                                    </div>
                                    <div class="member-info">
                                        <h4>Mr. Tumusime Crescent</h4>
                                        <p>Technical Specialist</p>
                                    </div>
                                    <div class="member-social">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="team-member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/team/team.jpg') }}" alt="Mr. Kasirye Andrew">
                                    </div>
                                    <div class="member-info">
                                        <h4>Mr. Kasirye Andrew</h4>
                                        <p>Technical Specialist</p>
                                    </div>
                                    <div class="member-social">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Coding Department -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="department-card">
                            <div class="department-header">
                                <div class="department-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h3>Coding Department</h3>
                            </div>
                            <div class="team-members">
                                <div class="team-member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/team/team.jpg') }}" alt="Mr. Sekeba Augustine">
                                    </div>
                                    <div class="member-info">
                                        <h4>Mr. Sekeba Augustine</h4>
                                        <p>Software Developer</p>
                                    </div>
                                    <div class="member-social">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="team-member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/team/team.jpg') }}" alt="Ms. Nakiwala Leticia">
                                    </div>
                                    <div class="member-info">
                                        <h4>Ms. Nakiwala Leticia</h4>
                                        <p>Software Developer</p>
                                    </div>
                                    <div class="member-social">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
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
