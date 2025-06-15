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
       <!-- Animate.css -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
       <!-- Animation Libraries -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
<style>

.navbar-light .navbar-nav .nav-link {
    font-family: 'Roboto', sans-serif;
    position: relative;
    margin-right: 25px;
    padding: 35px 0;
    color: #ff8606;
    font-size: 17px;
    font-weight: 500;
    outline: none;
    transition: .5s;
}
.navbar-light .navbar-nav .nav-item .nav-link {
    color: #ff8606;
    font-weight: 500;
}
    .back{
        /* background-color: #0d0445 !important; */
        background: linear-gradient(rgba(38, 0, 255, 0.826), rgba(1, 1, 1, 0.5)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;

    }
    .backer{
        background: linear-gradient(rgba(1, 1, 1, 0.5),rgba(38, 0, 255, 0.826)), url('assets/images/impact.png') no-repeat center center;
    }
    .bg-primary-light {
        /* background-color: rgba(13, 4, 69, 0.1); */
        background: linear-gradient(rgba(38, 0, 255, 0.826), rgba(1, 1, 1, 0.5)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;

    }
    .text-primary {
        color: #0d0445 !important;
    }
    .fs-4 {
    font-size: calc(1.275rem + 0.3vw) !important;
    color: orangered;
}
    .avatar {
        font-weight: 600;
    }
    .text {
    color: white;
    text-align: center !important;
    font-weight: 800;
}
    .card {
        transition: all 0.4s ease;
    }
    .card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }
    
    /* Animation delays */
    .animate__delay-1s {
        animation-delay: 0.3s;
    }
    .animate__delay-2s {
        animation-delay: 0.6s;
    }
    .animate__delay-3s {
        animation-delay: 0.9s;
    }
    .animate__delay-4s {
        animation-delay: 1.2s;
    }
    
    /* Entrance animations */
    @keyframes fadeInUpScale {
        from {
            opacity: 0;
            transform: translateY(20px) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }
    
    .animate__fadeInUpScale {
        animation-name: fadeInUpScale;
        animation-duration: 0.6s;
    }
    .testimonial-card {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        opacity: 0;
        transform: translateY(20px);
    }
    .testimonial-card.aos-animate {
        opacity: 1;
        transform: translateY(0);
    }
    .testimonial-card:hover {
        transform: translateY(-5px) scale(1.02) !important;
        box-shadow: 0 12px 25px rgba(0,0,0,0.1);
    }
    .font-italic {
        font-style: italic;
        position: relative;
    }
    .font-italic::before {
        content: '"';
        font-size: 2.5rem;
        color: rgba(13, 4, 69, 0.08);
        position: absolute;
        left: -12px;
        top: -10px;
        line-height: 1;
    }
    .text-primary {
        color: #0d0445 !important;
    }
    .testimonial-row [data-aos] {
        transition-property: transform, opacity !important;
    }
</style>
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
                                'author_img' => asset('https://uxwing.com/wp-content/themes/uxwing/download/finance-growth/growth-icon.svg'),
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
                                'author_img' => asset('https://iconduck.com/icons/26273/achievement'),
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
                                {{-- <img src="{{ $blog['author_img'] }}" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt=""> --}}
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
        'answer' => 'Najuzi Digital Library offers access to a wide range of academic and professional resources, including eBooks, research materials, digital courses, and collaborative workspaces. We also support digital literacy programs and provide platforms for online learning and innovation.',
    ],
    [
        'question' => 'How Can I Apply for 10 Computer 01 Work Stations Project?',
        'answer' => 'To apply for the 10 Computer 01 Work Stations Project, visit our "Projects" page and click on the application form under the project title. Fill in your organization or school details and submit the request. Our team will review your application and contact you with further steps.',
    ],
    [
        'question' => 'How Can I Apply for 20 Computer 02 Work Stations Project?',
        'answer' => 'Applications for the 20 Computer 02 Work Stations Project are open to community centers and learning hubs. Go to our Contact page or Projects section, specify the project name, and provide your details. You will be guided through an evaluation and support process.',
    ],
    [
        'question' => 'How Can I Apply for 30 Computer 03 Work Stations Project?',
        'answer' => 'This project is geared towards rural or under-resourced schools. If eligible, submit a proposal through our online application portal, detailing your needs, target beneficiaries, and implementation plan. The review team will assess your request for potential support.',
    ],
    [
        'question' => 'What is the Impact of the System ?',
        'answer' => 'Najuzi Digital Library has empowered hundreds of students and professionals by improving access to digital education. Our system bridges the digital divide, enhances learning outcomes, and promotes digital inclusion in underserved communities.',
    ],
    [
        'question' => 'How many projects have been completed so far?',
        'answer' => 'As of now, Najuzi Digital Library has successfully completed over 15 major projects, including digital labs installation, e-library rollouts, and community ICT training programs across various regions.',
    ],
];
        @endphp
        <div class="container-fluid faq-section pb-5">
            <div class="container pb-5 overflow-hidden">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    {{-- <h4 class="text-primary">FAQs</h4> --}}
                    <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
                    <p class="mb-0">
                        Here, we’ve gathered answers to the most common questions we receive. Whether you’re a Client or 
                        a business looking to partner with Najuzi <span style="color:rgb(255, 132, 0);">Digital</span> Library, our FAQs section provides useful insights to get you started.
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="accordion accordion-flush bg-light rounded" id="accordionFlushSection">
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
                        <div class="backer rounded">
                            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->

<!-- Team Section -->
<div class="container-fluid bg-light py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h2 class="display-5 mb-3 fw-bold text-dark animate__animated animate__fadeInDown">Our Expert Team</h2>
            <p class="lead text-muted animate__animated animate__fadeIn animate__delay-1s">
                The talented professionals behind Najuzi <span class="text-primary">Digital</span> Library's success
            </p>
        </div>

        <div class="row g-4">
            <!-- Marketing Team -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInLeft">
                    <div class="card-header back text-white py-3">
                        <h5 class="mb-0 text">Marketing</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-4 animate__animated animate__fadeIn animate__delay-1s">Driving engagement and building relationships with our community</p>
                        
                        <div class="d-flex align-items-center mb-4 animate__animated animate__fadeIn animate__delay-1s">
                            <div class="avatar avatar-lg bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4">WF</span>
                            </div>
                            <div>
                                <h6 class="mb-0">Mr. Wanjama Frank</h6>
                                <small class="text-muted">Sales Director</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center animate__animated animate__fadeIn animate__delay-2s">
                            <div class="avatar avatar-lg bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4">KW</span>
                            </div>
                            <div>
                                <h6 class="mb-0">Mr. Kasirye William</h6>
                                <small class="text-muted">Customer Care Lead</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Team -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInLeft animate__delay-1s">
                    <div class="card-header back text-white py-3">
                        <h5 class="mb-0 text">Content</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-4 animate__animated animate__fadeIn animate__delay-2s">Curating and creating valuable educational resources</p>
                        
                        <div class="d-flex align-items-center mb-4 animate__animated animate__fadeIn animate__delay-2s">
                            <div class="avatar avatar-lg bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4">SS</span>
                            </div>
                            <div>
                                <h6 class="mb-0">Mr. Ssekalembe Samson</h6>
                                <small class="text-muted">Content Strategist</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-4 animate__animated animate__fadeIn animate__delay-3s">
                            <div class="avatar avatar-lg bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4">WA</span>
                            </div>
                            <div>
                                <h6 class="mb-0">Mr. Wagaba Adrian</h6>
                                <small class="text-muted">Content Creator</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center animate__animated animate__fadeIn animate__delay-4s">
                            <div class="avatar avatar-lg bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4">MR</span>
                            </div>
                            <div>
                                <h6 class="mb-0">Ms. Marunga Ryhannah</h6>
                                <small class="text-muted">Editorial Specialist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical Team -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInRight animate__delay-1s">
                    <div class="card-header back text-white py-3">
                        <h5 class="mb-0 text">Technical</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-4 animate__animated animate__fadeIn animate__delay-2s">Ensuring seamless operation of our digital infrastructure</p>
                        
                        <div class="d-flex align-items-center mb-4 animate__animated animate__fadeIn animate__delay-2s">
                            <div class="avatar avatar-lg bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4">TC</span>
                            </div>
                            <div>
                                <h6 class="mb-0">Mr. Tumusime Crescent</h6>
                                <small class="text-muted">Systems Architect</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center animate__animated animate__fadeIn animate__delay-3s">
                            <div class="avatar avatar-lg bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4">KA</span>
                            </div>
                            <div>
                                <h6 class="mb-0">Mr. Kasirye Andrew</h6>
                                <small class="text-muted">Network Specialist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coding Team -->
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInRight animate__delay-2s">
                    <div class="card-header back text-white py-3">
                        <h5 class="mb-0 text">Development</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted small mb-4 animate__animated animate__fadeIn animate__delay-3s">Building innovative digital library solutions</p>
                        
                        <div class="d-flex align-items-center mb-4 animate__animated animate__fadeIn animate__delay-3s">
                            <div class="avatar avatar-lg bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4">SA</span>
                            </div>
                            <div>
              background: linear-gradient(rgba(1, 1, 1, 0.5),rgba(38, 0, 255, 0.826)), url('assets/images/impact.png') no-repeat center center;                  <h6 class="mb-0">Mr. Sekeba Augustine</h6>
                                <small class="text-muted">Lead Developer</small>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center animate__animated animate__fadeIn animate__delay-4s">
                            <div class="avatar avatar-lg bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4">NL</span>
                            </div>
                            <div>
                                <h6 class="mb-0">Ms. Nakiwala Leticia</h6>
                                <small class="text-muted">Frontend Engineer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
       <!-- Testimonial Section -->
<div class="container-fluid bg-light py-6 overflow-hidden">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h4 class="text-primary animate__animated animate__fadeInDown">Client Testimonials</h4>
            <h1 class="display-6 mb-3 fw-bold text-dark animate__animated animate__fadeInDown animate__delay-1s">What Our Clients Say</h1>
            <p class="text-muted animate__animated animate__fadeIn animate__delay-2s" style="font-size: 0.95rem">
                At Najuzi <span class="text-primary">Digital</span> Library, we measure our success by our clients' satisfaction
            </p>
        </div>

        <div class="row g-4 testimonial-row">
            @php
                $testimonials = [
                    [
                        'initials' => 'NK',
                        'text' => "Najuzi Digital Library transformed our university's research capabilities. Their digital resources are comprehensive and the platform is incredibly user-friendly.",
                        'name' => 'Dr. Nakimuli Kirabo',
                        'position' => 'Dean of Studies, Makerere University',
                        'stars' => 5,
                        'color' => 'bg-primary'
                    ],
                    [
                        'initials' => 'OM',
                        'text' => "As a small business owner, I couldn't afford expensive research materials. Najuzi gave me access to premium business resources at a fraction of the cost.",
                        'name' => 'Ms. Okello Margaret',
                        'position' => 'CEO, Kampala Business Solutions',
                        'stars' => 5,
                        'color' => 'bg-success'
                    ],
                    [
                        'initials' => 'SM',
                        'text' => "The mobile app is a game-changer! I can access thousands of books during my commute. The offline reading feature works perfectly.",
                        'name' => 'Mr. Ssebaggala Michael',
                        'position' => 'Law Student, UCU',
                        'stars' => 4,
                        'color' => 'bg-warning text-dark'
                    ],
                    [
                        'initials' => 'AK',
                        'text' => "We've partnered with Najuzi to provide digital resources to rural schools. Their team's dedication to improving education is inspiring.",
                        'name' => 'Hon. Ateenyi Kasaija',
                        'position' => 'MP, Education Committee',
                        'stars' => 5,
                        'color' => 'bg-danger'
                    ]
                ];
            @endphp

            @foreach($testimonials as $testimonial)
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 testimonial-card" 
                     data-aos="fade-up" 
                     data-aos-delay="{{ $loop->index * 100 }}"
                     data-aos-duration="600">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="avatar avatar-lg {{ $testimonial['color'] }} text-white rounded-circle d-flex align-items-center justify-content-center" 
                                 style="width: 50px; height: 50px;">
                                <span class="fs-5">{{ $testimonial['initials'] }}</span>
                            </div>
                            <div class="text-warning" style="font-size: 0.85rem">
                                @for($i = 0; $i < $testimonial['stars']; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                                @for($i = $testimonial['stars']; $i < 5; $i++)
                                    <i class="far fa-star"></i>
                                @endfor
                            </div>
                        </div>
                        <p class="mb-4 font-italic" style="font-size: 0.9rem; line-height: 1.6">"{{ $testimonial['text'] }}"</p>
                        <div class="border-top pt-3">
                            <h6 class="mb-0" style="font-size: 0.95rem">{{ $testimonial['name'] }}</h6>
                            <small class="text-muted" style="font-size: 0.8rem">{{ $testimonial['position'] }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
    </main>
    
        <!-- Add Font Awesome for icons if needed -->
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
  }// Initialize AOS animation
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out-quad',
            once: true,
            offset: 100
        });
        
        // Add hover class for smooth transitions
        const cards = document.querySelectorAll('.testimonial-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transition = 'all 0.3s ease-out';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transition = 'all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            });
        });
    });
   AOS.init({
      once: true,
      duration: 1000
    });
     // Intersection Observer for scroll animations
    document.addEventListener('DOMContentLoaded', function() {
        const teamCards = document.querySelectorAll('.card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        
        teamCards.forEach(card => {
            observer.observe(card);
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
