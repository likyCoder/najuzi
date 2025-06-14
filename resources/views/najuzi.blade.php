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
      <main>
        <!-- Hero Start -->
        <section class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <br>
                    <br>
                    <br><br>
                    <h1>Najuzi <span style="color:rgb(255, 132, 0);"> Digital </span> Library</h1>
                    <p>Empowering Education Through Technology</p>
                    <hr>
                    <h3>Transform Your Digital Learning With Our Najuzi</h3>
                    <p>Experience innovative education technology crafted to simplify learning for students of all aptitudes. Our powerful platform delivers interactive, curriculum-aligned content for superior academic outcomes.</p>

                    <div class="cta-buttons">
                       <a href="{{ url('/contact') }}" class="btn btn-primary">Get Started</a>
                        <a href="{{ url('/about') }}" class="btn btn-secondary">Learn More</a>
                    </div>

                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">10K+</div>
                            <div class="stat-label">Happy Clients</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">95%</div>
                            <div class="stat-label">Success Rate</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Support</div>
                        </div>
                    </div>
                </div>

                <div class="hero-image">
                    <img src="{{ asset('https://www.sqillpad.com/images/girl-with-ipad.svg') }}" alt="Digital Solutions">
                </div>
            </div>
        </section>
        <!-- Hero End -->
        <!-- Start: Experiencing Najuzi Section -->
<section class="circle-background py-5 bg-white position-relative overflow-hidden">
    <div class="container text-center mb-5">
        <h1 class="display-5 fw-bold">
            Experiencing Najuzi <span style="color:rgb(255, 132, 0);">Digital</span> Library Happiness
        </h1>
        <p class="text-muted">Empowering schools with smart learning systems, multimedia content, and inclusive access for all learners.</p>
    </div>

    <div class="container features-wrapper">
        <!-- Feature Block 1 -->
        <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-6">
                <img src="https://www.sqillpad.com/images/right_small.jpg" class="img-fluid rounded shadow-sm" alt="Tablet Integration">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Tablet and Multimedia Integration</h2>
                <p class="text-muted">Najuzi’s classroom tablet solution provides interactive video and note-based content, supporting real-time collaboration and controlled digital learning environments across Uganda.</p>
            </div>
        </div>

        <!-- Feature Block 2 -->
        <div class="row align-items-center mb-5 flex-md-row-reverse wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-md-6">
                <img src="https://www.sqillpad.com/images/big.jpg" class="img-fluid rounded shadow-sm" alt="Equitable Access">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">What Does Najuzi Comprise?</h2>
                <p class="text-muted">The digital Library comprises content in both text and video formats. Carefully curated to align with Uganda’s new curriculum, the resources help learners visualize concepts for improved knowledge intake.</p>
            </div>
        </div>

        <!-- Feature Block 3 -->
        <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="https://www.sqillpad.com/images/big.jpg" class="img-fluid rounded shadow-sm" alt="What is Najuzi?">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">What is Najuzi Digital Library?</h2>
                <p class="text-muted">Najuzi is an innovative interactive platform developed by COM-TEC (U) LTD to support students with different learning aptitudes. It provides structured notes and video lessons tailored for clarity and comprehension.</p>
                <a href="about.html" class="btn btn-primary rounded-pill mt-3 px-4 py-2">Learn More</a>
            </div>
        </div>
    </div>

    <!-- Decorative Circles -->
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>
</section>
<!-- End: Experiencing Najuzi Section -->
        <!-- Why Choose Najuzi Section Start -->
        <div class="container-fluid py-5 bg-light" id="why-najuzi">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h2 class="text-primary fw-bold">Why Choose Najuzi <span style="color:rgb(255, 132, 0);"> Digital </span> Library?</h2>
                    <h1 class="display-6 fw-semibold">Smart Learning for Smart Generations</h1>
                    <p class="text-muted">
                        Najuzi Digital Library combines innovation, accessibility, and quality to transform education
                        across Uganda. Here’s why schools, students, and parents love Najuzi.
                    </p>
                </div>
        
                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-md-6 col-lg-3 text-center wow zoomIn" data-wow-delay="0.3s">
                        <div class="bg-white p-4 rounded shadow-sm h-100">
                            <i class="fas fa-laptop-code fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold mb-2">Interactive Content</h5>
                            <p class="text-muted mb-0">Students enjoy videos, notes, and recorded lessons for all learning types.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div class="col-md-6 col-lg-3 text-center wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-white p-4 rounded shadow-sm h-100">
                            <i class="fas fa-sync-alt fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold mb-2">Always Updated</h5>
                            <p class="text-muted mb-0">Our team constantly aligns the system with Uganda's new curriculum.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="col-md-6 col-lg-3 text-center wow zoomIn" data-wow-delay="0.5s">
                        <div class="bg-white p-4 rounded shadow-sm h-100">
                            <i class="fas fa-bolt fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold mb-2">Fast & Distraction-Free</h5>
                            <p class="text-muted mb-0">Faster than the internet, with no ads or unnecessary distractions.</p>
                        </div>
                    </div>
                    <!-- Feature 4 -->
                    <div class="col-md-6 col-lg-3 text-center wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-white p-4 rounded shadow-sm h-100">
                            <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold mb-2">Improved Results</h5>
                            <p class="text-muted mb-0">Students using Najuzi perform better in exams thanks to easy access to info.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Najuzi Section End -->

        <!-- Blog Start -->
        <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    {{-- <h4 class="text-primary">Our Blog & News</h4> --}}
                    <h1 class="display-5 mb-4">Articles For Arrangement</h1>
                    <p class="mb-0">
                        We have different school termly subscription package arrangements as follows;
                    </p>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                    @php
                        $blogs = [
                            [
                                'img' => asset('assets/screen/station1.png'),
                                'btn' => '01 Work Stations.',
                                'title' => '10 Computer 01 Work Stations.',
                                'desc' => 'With this package, the school pays 5,000,000/=per term and receives 10 workstations Plus a server.',
                                'author_img' => asset('img/testimonial-1.jpg'),
                                'author' => 'Growth',
                                'date' => 'October 9, 2025',
                            ],
                            [
                                'img' => asset('assets/screen/station1.png'),
                                'btn' => '02 Work Stations.',
                                'title' => '20 Computer 01 Work Stations.',
                                'desc' => 'With this package, the school pays 8,000,000/= instalment per term and receives 20 workstations plus a server',
                                'author_img' => asset('img/testimonial-2.jpg'),
                                'author' => 'Growth',
                                'date' => 'October 9, 2025',
                            ],
                            [
                                'img' => asset('assets/screen/station1.png'),
                                'btn' => '03 Work Stations.',
                                'title' => '10 Computer 01 Work Stations.',
                                'desc' => 'With this package the school pays 12,000,000/=per term and receives 30 work stations plus aserver.',
                                'author_img' => asset('img/testimonial-3.jpg'),
                                'author' => 'Growth',
                                'date' => 'October 9, 2025',
                            ],
                            [
                                'img' => asset('assets/screen/station5.png'),
                                'btn' => 'Projects',
                                'title' => 'Done Projects',
                                'desc' => '<strong>Najuzi Digital Library program is currently running in the following schools:</strong>
                                    <ul class="schools-list mb-4">
                                        <li>Victoria SS Nansana,</li>
                                        <li>Oxford SS Kyebando,</li>
                                        <li>Katikamu Light College. etc</li>
                                    </ul>',
                                'author_img' => asset('img/testimonial-4.jpg'),
                                'author' => 'Achievement',
                                'date' => 'October 9, 2025',
                            ],
                        ];
                    @endphp

                    @foreach($blogs as $blog)
                        <div class="blog-item p-4">
                            <div class="blog-img mb-4">
                                <img src="{{ $blog['img'] }}" class="img-fluid w-100 rounded" alt="">
                                <div class="blog-title">
                                    <a href="#" class="btn">{{ $blog['btn'] }}</a>
                                </div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-4">{{ $blog['title'] }}</a>
                            <p class="mb-3">{!! $blog['desc'] !!}</p>
                            <div class="d-flex align-items-center">
                                <img src="{{ $blog['author_img'] }}" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                                <div class="ms-3">
                                    <h5>{{ $blog['author'] }}</h5>
                                    <p class="mb-0">{{ $blog['date'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- FAQs Start -->
        @php
            $faqs = [
                [
                    'question' => 'What Services Does Najuzi <span style="color:rgb(255, 132, 0);"> Digital </span> Library Offer?',
                    'answer' => 'We provide comprehensive support for businesses and freelancers, including project management, corporate consulting, financing for new projects, and exclusive partner benefits.',
                ],
                [
                    'question' => 'How Can I Apply for 10 Computer 01 Work Stations Project?',
                    'answer' => 'To apply for financing, simply reach out through our contact page, and our team will guide you through the application process to ensure you receive the funding you need.',
                ],
                [
                    'question' => 'How Can I Apply for 20 Computer 02 Work Stations Project?',
                    'answer' => 'Becoming a pro lancer involves joining our platform and meeting certain criteria. Once registered, you can enjoy exclusive benefits such as fee-free transactions and priority access to opportunities.',
                ],
                [
                    'question' => 'How Can I Apply for 30 Computer 03 Work Stations Project?',
                    'answer' => 'Joining Liky Lancers opens up numerous opportunities for networking, career development, and access to funding, all designed to help you grow professionally.',
                ],
                [
                    'question' => 'What is the Impact of the System ?',
                    'answer' => 'You can easily create an account by visiting our registration page. Simply provide the necessary details, and you’ll be on your way to joining a community of like-minded professionals.',
                ],
                [
                    'question' => 'How many projects have been completed so far?',
                    'answer' => 'Our platform connects you with a wide variety of projects, from corporate consulting to freelancing and business development. We ensure that each project aligns with your skills and expertise.',
                ],
            ];
        @endphp
        <div class="container-fluid faq-section pb-5">
            <div class="container pb-5 overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">FAQs</h4>
                    <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
                    <p class="mb-0">
                        Here, we’ve gathered answers to the most common questions we receive. Whether you’re a Client or 
                        a business looking to partner with Najuzi <span style="color:rgb(255, 132, 0);">Digital</span> Library, our FAQs section provides useful insights to get you started.
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                            @foreach($faqs as $index => $faq)
                                <div class="accordion-item{{ $index === 0 ? ' rounded-top' : ($index === count($faqs)-1 ? ' rounded-bottom' : '') }}">
                                    <h2 class="accordion-header" id="flush-heading{{ $index }}">
                                        <button class="accordion-button collapsed{{ $index === 0 ? ' rounded-top' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $index }}" aria-expanded="false" aria-controls="flush-collapse{{ $index }}">
                                            {!! $faq['question'] !!}
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $index }}" data-bs-parent="#accordionFlushSection">
                                        <div class="accordion-body">
                                            {!! $faq['answer'] !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded">
                            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->

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

        @php
            $testimonials = [
                [
                    'img' => asset('assets/team/team1.jpg'),
                    'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatibus sit modi exercitationem. Illum, eius amet, fugit iure doloribus deserunt vitae rem repellendus quaerat necessitatibus accusamus! Recusandae maxime fuga aperiam.',
                    'name' => 'Full Name',
                    'position' => 'Position',
                    'stars' => 5,
                ],
                [
                    'img' => asset('assets/team/team1.jpg'),
                    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, modi sunt voluptatem, atque non incidunt enim iste libero, ullam maiores dolorum deleniti quae ipsa. Minima iure amet dignissimos ipsam explicabo?',
                    'name' => 'Full Name',
                    'position' => 'Position',
                    'stars' => 5,
                ],
                [
                    'img' => asset('assets/team/team1.jpg'),
                    'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure iusto reprehenderit aperiam consequuntur a corporis numquam sapiente, eos debitis maxime fuga in odio esse non libero harum labore pariatur similique.',
                    'name' => 'Full Name',
                    'position' => 'Position',
                    'stars' => 5,
                ],
                [
                    'img' => asset('assets/team/team1.jpg'),
                    'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime suscipit sapiente similique voluptas. Laborum perspiciatis obcaecati fugiat earum perferendis voluptas placeat animi, illo modi rem facilis possimus impedit ab autem.',
                    'name' => 'Full Name',
                    'position' => 'Position',
                    'stars' => 5,
                ],
            ];
        @endphp

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-5 mb-4">Our Clients Reviews</h1>
                    <p class="mb-0">At Najuzi <span style="color:rgb(255, 132, 0);">Digital</span> Library, client satisfaction is at the heart of everything we do. Here's what some of our valued clients have to say about working with us:</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-item">
                            <div class="testimonial-quote-left">
                                <i class="fas fa-quote-left fa-2x"></i>
                            </div>
                            <div class="testimonial-img">
                                <img src="{{ $testimonial['img'] }}" class="img-fluid" alt="Image">
                            </div>
                            <div class="testimonial-text">
                                <p class="mb-0">
                                    {{ $testimonial['text'] }}
                                </p>
                            </div>
                            <div class="testimonial-title">
                                <div>
                                    <h4 class="mb-0">{{ $testimonial['name'] }}</h4>
                                    <p class="mb-0">{{ $testimonial['position'] }}</p>
                                </div>
                                <div class="d-flex text-primary">
                                    @for($i = 0; $i < $testimonial['stars']; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                            <div class="testimonial-quote-right">
                                <i class="fas fa-quote-right fa-2x"></i>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



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
