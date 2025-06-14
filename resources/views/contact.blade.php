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
     <!-- Custom CSS -->
    <style>
        :root {
            --najuzi-blue: #2563EB;
            --najuzi-orange: #F97316;
            --najuzi-dark: #111827;
            --najuzi-light: #F9FAFB;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--najuzi-light);
            color: var(--najuzi-dark);
            scroll-behavior: smooth;
        }
        .mb-4{
            font-size: 48px;
            margin-bottom: 20px;
            color: rgb(255, 98, 0);
        }
        
        .contact-hero {
            background: linear-gradient(135deg, var(--najuzi-blue) 0%, rgba(5, 5, 5, 0.9) 100%);
            color: white;
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .contact-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            opacity: 0.1;
            z-index: 0;
        }
        
        .contact-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
            background: white;
        }
        
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .contact-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
            color: white;
            background: var(--najuzi-blue);
            transition: all 0.3s ease;
        }
        
        .contact-card:hover .contact-icon {
            background: var(--najuzi-orange);
            transform: rotate(10deg) scale(1.1);
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--najuzi-blue);
            box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.25);
        }
        
        .btn-primary {
            background-color: var(--najuzi-blue);
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px);
        }
        
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); */
            height: 90%;
            min-height: 300px;
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            font-size: 1.2rem;
            color: white;
            background: var(--najuzi-blue);
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--najuzi-orange);
            transform: translateY(-5px);
        }
        
        .floating-label {
            position: relative;
            margin-bottom: 20px;
        }
        
        .floating-label label {
            position: absolute;
            top: 15px;
            left: 15px;
            color: #6b7280;
            transition: all 0.3s ease;
            pointer-events: none;
            background: white;
            padding: 0 5px;
        }
        
        .floating-label input:focus + label,
        .floating-label textarea:focus + label,
        .floating-label input:not(:placeholder-shown) + label,
        .floating-label textarea:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            font-size: 0.8rem;
            color: var(--najuzi-blue);
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--najuzi-orange);
        }
        
        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        
        .contact-info-icon {
            font-size: 1.5rem;
            color: var(--najuzi-blue);
            margin-right: 15px;
            margin-top: 5px;
        }
        
        .contact-info-content h5 {
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .contact-info-content p {
            margin-bottom: 0;
            color: #6b7280;
        }
        
        .form-submit-btn {
            position: relative;
            overflow: hidden;
        }
        
        .form-submit-btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%);
            transform-origin: 50% 50%;
        }
        
        .form-submit-btn:focus:not(:active)::after {
            animation: ripple 1s ease-out;
        }
        
        @keyframes ripple {
            0% {
                transform: scale(0, 0);
                opacity: 0.5;
            }
            100% {
                transform: scale(20, 20);
                opacity: 0;
            }
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .contact-hero {
                padding: 3rem 0;
            }
            
            .contact-card {
                margin-bottom: 30px;
            }
            
            .map-container {
                margin-bottom: 30px;
            }
        }
    </style>
<body>
    @include('includes.header')
    <main>
    
    <!-- Hero Section -->
    <section class="contact-hero text-center position-relative">
        <div class="container position-relative" style="z-index: 1;">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInDown">Get In Touch With Us</h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">We'd love to hear from you! Whether you have a question, feedback, or just want to say hello, our team is ready to help.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Cards Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card h-100 p-4 text-center">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="h5 mb-3">Our Location</h3>
                        <p class="text-muted">123 Library Street, Knowledge City, 10101</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card h-100 p-4 text-center">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="h5 mb-3">Email Us</h3>
                        <p class="text-muted">info@najuzilibrary.com<br>support@najuzilibrary.com</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card h-100 p-4 text-center">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="h5 mb-3">Call Us</h3>
                        <p class="text-muted">+1 (555) 123-4567<br>Mon-Fri, 9am-5pm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Form & Map Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title">Send Us a Message</h2>
                    <p class="mb-5">Fill out the form below and we'll get back to you as soon as possible.</p>
                    
                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <input type="text" class="form-control" id="firstName" placeholder=" " required>
                                    <label for="firstName">First Name</label>
                                    <div class="invalid-feedback">
                                        Please provide your first name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <input type="text" class="form-control" id="lastName" placeholder=" " required>
                                    <label for="lastName">Last Name</label>
                                    <div class="invalid-feedback">
                                        Please provide your last name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="floating-label">
                                    <input type="email" class="form-control" id="email" placeholder=" " required>
                                    <label for="email">Email Address</label>
                                    <div class="invalid-feedback">
                                        Please provide a valid email address.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="floating-label">
                                    <input type="text" class="form-control" id="subject" placeholder=" ">
                                    <label for="subject">Subject (Optional)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="floating-label">
                                    <textarea class="form-control" id="message" rows="5" placeholder=" " required></textarea>
                                    <label for="message">Your Message</label>
                                    <div class="invalid-feedback">
                                        Please enter your message.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg form-submit-btn">
                                    <i class="fas fa-paper-plane me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title">Find Us On Map</h2>
                    <p class="mb-5">Visit our headquarters or explore our digital resources from anywhere in the world.</p>
                    
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215573291234!2d-73.98784492453507!3d40.74844097138982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1689876331026!5m2!1sen!2sus" 
                                width="100%" height="70%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Additional Contact Info -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Other Ways to Connect</h2>
                    <p class="lead">Follow us on social media or join our community for the latest updates.</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Working Hours</h5>
                                    <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                                    Saturday: 10:00 AM - 4:00 PM<br>
                                    Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Community Support</h5>
                                    <p>Join our online forums or attend our monthly webinars to connect with other members and our support team.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Knowledge Base</h5>
                                    <p>Browse our extensive documentation and FAQ section for instant answers to common questions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Live Chat</h5>
                                    <p>Available during business hours for immediate assistance with your inquiries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <h5 class="mb-4">Follow Us On Social Media</h5>
                <div class="d-flex justify-content-center">
                    <a href="#" class="social-icon me-2 animate__animated animate__bounceIn animate__delay-1s"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon me-2 animate__animated animate__bounceIn animate__delay-2s"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon me-2 animate__animated animate__bounceIn animate__delay-3s"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon me-2 animate__animated animate__bounceIn animate__delay-4s"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon animate__animated animate__bounceIn animate__delay-5s"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="lead">Find quick answers to common questions about our services.</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How can I access the digital library?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can access our digital library by creating an account on our website. Once registered, you'll have instant access to thousands of digital resources. Some premium content may require a subscription.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What are your subscription options?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer monthly and annual subscription plans. Our annual plan comes with a 20% discount compared to the monthly option. Students and educators may qualify for special discounts.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I download resources for offline use?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, most of our resources are available for download. However, some publisher-restricted materials may only be available for online reading. Downloaded content is protected by DRM and requires our app for access.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How do I reset my password?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Click on the "Forgot Password" link on the login page. Enter your registered email address and we'll send you a link to reset your password. If you don't receive the email within 10 minutes, please check your spam folder.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed bg-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do you offer institutional access?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide special access plans for schools, universities, and corporations. Our institutional plans include multiple user access, administrative controls, and detailed usage analytics. Contact our sales team for more information.
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
<!-- Custom Script -->
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            once: true,
            duration: 800
        });
        
        // Form validation
        (function() {
            'use strict';
            
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation');
            
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        } else {
                            // Form is valid, you could add AJAX submission here
                            event.preventDefault();
                            alert('Thank you for your message! We will get back to you soon.');
                            form.reset();
                        }
                        
                        form.classList.add('was-validated');
                    }, false);
                });
        })();
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Add animation to form elements on focus
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('animate__animated', 'animate__pulse');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('animate__animated', 'animate__pulse');
            });
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
