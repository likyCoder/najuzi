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
          .hero-section {
            background: linear-gradient(rgba(38, 0, 255, 0.826), rgba(1, 1, 1, 0.5)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
            background-size: cover;
            background-position: center;
            color: white;
            position: relative;
        }
        .text-orange{
          color: orangered;
          padding: 120px 0 80px;

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
                    <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInDown text-orange">Welcome to the Najuzi Digital Library Blog</h1>
                    <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#about" class="btn btn-light btn-lg shadow animate__animated animate__fadeInUp">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- About Section -->
      <section id="about" class="blog-section container py-5" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <article class="blog-post mb-5">
              <header class="mb-4">
                <h2 class="fw-bold mb-3">Why Najuzi Digital Library?</h2>
                <p class="text-muted">In an era where information is the new currency, Najuzi Digital Library stands as a beacon for learners, educators, and knowledge seekers. Our mission is to democratize access to quality educational resources, foster a culture of continuous learning, and bridge the digital divide.</p>
              </header>
              <figure class="mb-4" data-aos="zoom-in">
                <img src="/img/blog-main.jpg" class="img-fluid rounded shadow" alt="Najuzi Digital Library">
                <figcaption class="text-muted mt-2">Your gateway to limitless learning resources.</figcaption>
              </figure>
            </article>
          </div>
        </div>
      </section>

      <!-- What We Offer Section -->
      <section class="container py-5" data-aos="fade-right">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2 class="h4 fw-semibold mb-3">What We Offer</h2>
            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item bg-transparent"><i class="fas fa-book-open text-primary me-2"></i><strong>Vast Collection:</strong> Thousands of books, journals, and articles across diverse disciplines.</li>
              <li class="list-group-item bg-transparent"><i class="fas fa-user-graduate text-success me-2"></i><strong>Expert Curated:</strong> Resources are carefully selected by subject matter experts to ensure credibility and relevance.</li>
              <li class="list-group-item bg-transparent"><i class="fas fa-mobile-alt text-info me-2"></i><strong>Accessible Anywhere:</strong> Our platform is optimized for all devices, making learning possible anytime, anywhere.</li>
              <li class="list-group-item bg-transparent"><i class="fas fa-users text-warning me-2"></i><strong>Community Driven:</strong> Engage with fellow learners, participate in discussions, and share your insights.</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Featured Insights Section -->
      <section class="container py-5" data-aos="fade-left">
        <div class="row justify-content-center mb-4">
          <div class="col-lg-8 text-center">
            <h2 class="h4 fw-semibold mb-2">Featured Insights</h2>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6">
            <div class="card h-100 shadow-sm animate__animated animate__fadeInUp">
              <img src="/img/featured-1.jpg" class="card-img-top" alt="Digital Literacy">
              <div class="card-body">
                <h5 class="card-title">The Importance of Digital Literacy</h5>
                <p class="card-text">Discover why digital skills are essential in today's world and how Najuzi can help you stay ahead.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card h-100 shadow-sm animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
              <img src="/img/featured-2.jpg" class="card-img-top" alt="Open Access">
              <div class="card-body">
                <h5 class="card-title">Open Access: Breaking Barriers</h5>
                <p class="card-text">Learn how open access resources are transforming education and research globally.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Join Community Section -->
      <section class="container py-5" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="h4 fw-semibold mb-2">Join Our Community</h2>
            <p>
              At Najuzi, we believe in the power of community. Whether you are a student, educator, or lifelong learner, your voice matters. Share your experiences, recommend resources, and help us build a vibrant, supportive learning environment.
            </p>
            <a href="/register" class="btn btn-primary btn-lg shadow">Get Started</a>
          </div>
        </div>
      </section>

      <!-- Newsletter Section -->
      <section class="container py-5" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="h4 fw-semibold mb-2">Stay Updated</h2>
            <p>
              Subscribe to our newsletter for the latest updates, featured resources, and expert tips delivered straight to your inbox.
            </p>
            <form class="row g-2 justify-content-center" method="POST" action="/subscribe">
              @csrf
              <div class="col-8">
                <input type="email" name="email" class="form-control" placeholder="Your email address" required>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-success w-100">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </section>

      <!-- Animate On Scroll Library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
      <script>
        AOS.init({
        once: true,
        duration: 1000
        });
      </script>
      <style>
      .hero-section {
        position: relative;
        overflow: hidden;
      }
      .hero-section .overlay {
        pointer-events: none;
      }
      </style>



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
