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
<body>
    @include('includes.header')
     <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background: url('{{ asset('assets/images/impact.png') }}') no-repeat center center/cover; background-color:#0d0445;">
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

        <!-- Team Start -->
        @php
            $team = [
                [
                    'img' => asset('assets/team/team.jpg'),
                    'name' => 'Full Name',
                    'position' => 'Position',
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'instagram' => '#',
                    'delay' => '0.2s',
                ],
                [
                    'img' => asset('assets/team/team.jpg'),
                    'name' => 'Full Name',
                    'position' => 'Position',
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'instagram' => '#',
                    'delay' => '0.4s',
                ],
                [
                    'img' => asset('assets/team/team.jpg'),
                    'name' => 'Full Name',
                    'position' => 'Position',
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'instagram' => '#',
                    'delay' => '0.6s',
                ],
                [
                    'img' => asset('assets/team/team.jpg'),
                    'name' => 'Full Name',
                    'position' => 'Position',
                    'facebook' => '#',
                    'twitter' => '#',
                    'linkedin' => '#',
                    'instagram' => '#',
                    'delay' => '0.8s',
                ],
            ];
        @endphp
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Team</h4>
                    <h1 class="display-5 mb-4">Meet Our Advisers</h1>
                    <p class="mb-0">
                        At Najuzi <span style="color:rgb(255, 132, 0);">Digital</span> Library Our Team is full of professionals that handle work in a professional way leaving both the Company and Clients happy
                    </p>
                </div>
                <div class="row g-4">
                    @foreach($team as $member)
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="{{ $member['delay'] }}">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ $member['img'] }}" class="img-fluid" alt="">
                                </div>
                                <div class="team-title">
                                    <h4 class="mb-0">{{ $member['name'] }}</h4>
                                    <p class="mb-0">{{ $member['position'] }}</p>
                                </div>
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="{{ $member['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="{{ $member['twitter'] }}"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="{{ $member['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="{{ $member['instagram'] }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->

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
