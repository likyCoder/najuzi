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
            --dark-blue: #003A66;
            --light-blue: #e6f0f7;
            --gray: #f8f9fa;
            --dark-gray: #6c757d;
            --black: #212529;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--black);
            line-height: 1.6;
            background-color: #fff;
            overflow-x: hidden;
        }
        
         h6 {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            color: blue;
        }
        
        .text-orange { color: var(--orange); }
        .text-blue { color: var(--blue); }
        .bg-orange { background-color: var(--orange); }
        .bg-blue { background-color: var(--blue); }
        .bg-light-blue { background-color: var(--light-blue); }
        .bg-gray { background-color: var(--gray); }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        
        .btn-primary {
            background-color: var(--orange);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #e05a2a;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid white;
            color: white;
        }
        
        .btn-outline:hover {
            background-color: rgb(247, 111, 62);
            border: 2px solid rgb(247, 111, 62);
            color: rgb(2, 23, 255);
            transform: translateY(-3px);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(38, 0, 255, 0.826),hsl(0, 0.00%, 0.40%)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            color: rgb(255, 255, 255);
            padding: 50px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: rgb(255, 98, 0);
        }
        
        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto 30px;
            padding: 50px 0;
        }
        
        /* Services Section */
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 36px;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--orange);
        }
        
        .section-title p {
            font-size: 18px;
            color: var(--dark-gray);
            max-width: 700px;
            margin: 20px auto 0;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .service-img {
            height: 200px;
            overflow: hidden;
        }
        
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .service-card:hover .service-img img {
            transform: scale(1.05);
        }
        
        .service-content {
            padding: 30px;
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            background: var(--light-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .service-icon i {
            font-size: 24px;
            color: var(--blue);
        }
        
        .service-content h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        
        .service-content ul {
            list-style: none;
            margin: 20px 0;
        }
        
        .service-content ul li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
        }
        
        .service-content ul li::before {
            content: '\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 10px;
            color: var(--orange);
        }
        
        /* Pricing Section */
        .pricing {
            background-color: var(--gray);
        }
        
        .pricing-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            border-bottom: 2px solid #e9ecef;
            max-width: 500px;
            margin: 0 auto 50px;
        }
        
        .pricing-tab {
            padding: 12px 30px;
            cursor: pointer;
            font-weight: 600;
            color: var(--dark-gray);
            transition: all 0.3s;
            position: relative;
        }
        
        .pricing-tab.active {
            color: var(--blue);
        }
        
        .pricing-tab.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--orange);
        }
        
        .pricing-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .pricing-table th {
            background-color: var(--blue);
            color: white;
            padding: 20px;
            text-align: left;
            font-weight: 600;
        }
        
        .pricing-table td {
            padding: 15px 20px;
            border-bottom: 1px solid #e9ecef;
        }
        
        .pricing-table tr:last-child td {
            border-bottom: none;
        }
        
        .pricing-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .price-value {
            font-weight: 700;
            color: var(--blue);
        }
        
        .note {
            font-size: 14px;
            color: var(--dark-gray);
            margin-top: 20px;
            font-style: italic;
        }
        
        /* Benefits Section */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .benefit-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .benefit-card h3 {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .benefit-card h3 i {
            margin-right: 15px;
            color: var(--orange);
            font-size: 24px;
        }
        
        /* CTA Section */
        .cta {
            background: linear-gradient(rgba(0, 78, 137, 0.9), rgba(0, 78, 137, 0.9)), url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 80px 0;
        }
        
        .cta h2 {
            color: white;
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .cta p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
        }
        
        .contact-item i {
            margin-right: 15px;
            color: var(--orange);
            margin-top: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background: var(--orange);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #b3c0ce;
            font-size: 14px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .section-title h2 {
                font-size: 28px;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .cta-buttons .btn {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
<body>
    @include('includes.header')
    <main>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Transform Your School's Learning Experience</h1>
            <p>Discover our innovative educational solutions designed to empower students and enhance academic performance across Uganda</p>
            <div class="cta-buttons">
                <a href="#contact" class="btn btn-primary">Request a Demo</a>
                <a href="#pricing" class="btn btn-outline">View Pricing</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Our Educational Solutions</h2>
                <p>Comprehensive digital learning tools designed for Ugandan schools and students</p>
            </div>

            <div class="services-grid">
                <!-- Desktop Learning Stations -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Desktop Learning Stations">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h3>Desktop Learning Stations</h3>
                        <p>Our original solution featuring energy-efficient thin client computer stations installed in school libraries for research and learning.</p>
                        
                        <ul>
                            <li>Energy-efficient thin client technology</li>
                            <li>Consumes only 1.5% of electricity vs standard desktops</li>
                            <li>Minimal movable parts for easy maintenance</li>
                            <li>Flexible packages: 10, 20, or 30 stations</li>
                            <li>Ownership after 3 terms of prompt payment</li>
                        </ul>
                        
                        <a href="#desktop-pricing" class="btn btn-outline">View Pricing</a>
                    </div>
                </div>

                <!-- Tablet Library Module -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tablet Library Module">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-tablet-alt"></i>
                        </div>
                        <h3>Tablet Library Module</h3>
                        <p>Our latest innovation offering unmatched portability and flexibility for on-demand learning resources.</p>
                        
                        <ul>
                            <li>Portable tablets stationed throughout the library</li>
                            <li>Rich multimedia learning with videos and text notes</li>
                            <li>User-friendly interface familiar to students</li>
                            <li>Powerful integrated search engine</li>
                            <li>No internet required for research</li>
                        </ul>
                        
                        <a href="#tablet-pricing" class="btn btn-outline">View Pricing</a>
                    </div>
                </div>

                <!-- Application Subscription -->
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Application Subscription">
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Application Subscription</h3>
                        <p>For schools with existing hardware, access our comprehensive digital library platform through subscription.</p>
                        
                        <ul>
                            <li>Access to Najuzi Digital Library application</li>
                            <li>Regular content updates aligned with O'LEVEL curriculum</li>
                            <li>Comprehensive staff and student training</li>
                            <li>Ongoing maintenance and technical support</li>
                            <li>Flexible term-based pricing</li>
                        </ul>
                        
                        <a href="#app-pricing" class="btn btn-outline">View Pricing</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Pricing Section -->
<section id="pricing" class="section pricing overflow-hidden">
    <div class="container">
        <div class="section-title">
            <h2>Service Packages & Pricing</h2>
            <p>Flexible solutions designed to fit your school's budget and requirements</p>
        </div>

        <div class="pricing-tabs" role="tablist">
            <div class="pricing-tab active" role="tab" tabindex="0" aria-selected="true" aria-controls="desktop-pricing">Desktop Stations</div>
            <div class="pricing-tab" role="tab" tabindex="0" aria-selected="false" aria-controls="tablet-pricing">Tablet Module</div>
            <div class="pricing-tab" role="tab" tabindex="0" aria-selected="false" aria-controls="app-pricing">Application Subscription</div>
        </div>

        <!-- Desktop Pricing -->
        <div id="desktop-pricing" class="pricing-content" role="tabpanel" aria-labelledby="desktop-tab">
            <h3 class="text-center mb-4">Desktop Learning Stations Packages (UGX)</h3>
            <div class="table-responsive">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Package</th>
                            <th>Term 1</th>
                            <th>Term 2</th>
                            <th>Term 3</th>
                            <th>Ownership</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10 Workstations + Server</td>
                            <td class="price-value">5,000,000</td>
                            <td class="price-value">5,000,000</td>
                            <td class="price-value">5,000,000</td>
                            <td>School owns equipment</td>
                        </tr>
                        <tr>
                            <td>20 Workstations + Server</td>
                            <td class="price-value">8,000,000</td>
                            <td class="price-value">8,000,000</td>
                            <td class="price-value">8,000,000</td>
                            <td>School owns equipment</td>
                        </tr>
                        <tr>
                            <td>30 Workstations + Server</td>
                            <td class="price-value">12,000,000</td>
                            <td class="price-value">12,000,000</td>
                            <td class="price-value">12,000,000</td>
                            <td>School owns equipment</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="note">* Initial setup requires 50% payment upfront, with balance due during the term.</p>
        </div>

        <!-- Tablet Pricing -->
        <div id="tablet-pricing" class="pricing-content" style="display: none;" role="tabpanel" aria-labelledby="tablet-tab">
            <h3 class="text-center mb-4">Tablet Module Packages (UGX per tablet)</h3>
            <div class="table-responsive">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Package</th>
                            <th>Term 1</th>
                            <th>Term 2</th>
                            <th>Term 3</th>
                            <th>Term 4</th>
                            <th>Term 5</th>
                            <th>Term 6</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>20-99 Tablets</td>
                            <td class="price-value">550,000</td>
                            <td class="price-value">500,000</td>
                            <td class="price-value">250,000</td>
                            <td class="price-value">80,000</td>
                            <td class="price-value">80,000</td>
                            <td class="price-value">80,000</td>
                        </tr>
                        <tr>
                            <td>100-499 Tablets</td>
                            <td class="price-value">500,000</td>
                            <td class="price-value">480,000</td>
                            <td class="price-value">250,000</td>
                            <td class="price-value">60,000</td>
                            <td class="price-value">60,000</td>
                            <td class="price-value">60,000</td>
                        </tr>
                        <tr>
                            <td>500-999 Tablets</td>
                            <td class="price-value">480,000</td>
                            <td class="price-value">460,000</td>
                            <td class="price-value">250,000</td>
                            <td class="price-value">60,000</td>
                            <td class="price-value">60,000</td>
                            <td class="price-value">60,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="note">* All packages include equipment, training, maintenance, and regular content updates.</p>
        </div>

        <!-- App Subscription Pricing -->
        <div id="app-pricing" class="pricing-content" style="display: none;" role="tabpanel" aria-labelledby="app-tab">
            <h3 class="text-center mb-4">Application Subscription (Termly UGX)</h3>
            <div class="table-responsive">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Package</th>
                            <th>Subscription Fee</th>
                            <th>Additional Stations</th>
                            <th>Includes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1-30 Stations</td>
                            <td class="price-value">1,500,000</td>
                            <td>-</td>
                            <td>Application access, updates, maintenance</td>
                        </tr>
                        <tr>
                            <td>30-50 Stations</td>
                            <td class="price-value">2,000,000</td>
                            <td>-</td>
                            <td>Application access, updates, maintenance</td>
                        </tr>
                        <tr>
                            <td>50-100 Stations</td>
                            <td class="price-value">3,000,000</td>
                            <td>-</td>
                            <td>Application access, updates, maintenance</td>
                        </tr>
                        <tr>
                            <td>Beyond 100 Stations</td>
                            <td>Base package +</td>
                            <td class="price-value">20,000/station</td>
                            <td>Application access, updates, maintenance</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<style>
/* Responsive Pricing Table */
.table-responsive {
    width: 100%;
    overflow-x: auto;
}
.pricing-table {
    min-width: 600px;
}
@media (max-width: 900px) {
    .pricing-table {
        min-width: 500px;
        font-size: 15px;
    }
}
@media (max-width: 700px) {
    .pricing-table {
        min-width: 400px;
        font-size: 14px;
    }
    .pricing-tabs {
        flex-direction: column;
        align-items: stretch;
    }
    .pricing-tab {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #e9ecef;
    }
}
@media (max-width: 500px) {
    .pricing-table {
        min-width: 350px;
        font-size: 13px;
    }
    .pricing-table th, .pricing-table td {
        padding: 10px 8px;
    }
    .section-title h2 {
        font-size: 22px;
    }
}
</style>

<script>
document.querySelectorAll('.pricing-tab').forEach((tab, idx) => {
    tab.addEventListener('click', function() {
        document.querySelectorAll('.pricing-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        document.querySelectorAll('.pricing-content').forEach((content, cidx) => {
            content.style.display = (idx === cidx) ? 'block' : 'none';
        });
    });
    tab.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') tab.click();
    });
});
</script>

    <!-- Benefits Section -->
    <section class="section bg-light-blue">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Najuzi?</h2>
                <p>Transform your educational institution with our proven solutions</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <h3><i class="fas fa-graduation-cap"></i> Educational Benefits</h3>
                    <p>Our solutions revolutionize how students access and engage with learning materials:</p>
                    <ul>
                        <li>Caters to different learning styles with video and text resources</li>
                        <li>Converts computers into essential learning tools for all students</li>
                        <li>Enables rapid access to curriculum-aligned information</li>
                        <li>Engages previously disinterested students</li>
                    </ul>
                </div>

                <div class="benefit-card">
                    <h3><i class="fas fa-chart-line"></i> Financial Benefits</h3>
                    <p>Our solutions create new revenue streams for schools:</p>
                    <ul>
                        <li>Schools generate surplus by charging small library access fees</li>
                        <li>Additional income helps acquire more resources</li>
                        <li>Energy-efficient technology reduces electricity costs</li>
                        <li>Flexible payment options fit any school budget</li>
                    </ul>
                </div>

                <div class="benefit-card">
                    <h3><i class="fas fa-cogs"></i> Operational Benefits</h3>
                    <p>We make implementation and management simple:</p>
                    <ul>
                        <li>Comprehensive staff and student training included</li>
                        <li>Ongoing hardware and software maintenance</li>
                        <li>Regular updates to software and educational content</li>
                        <li>Dedicated technical support team</li>
                    </ul>
                </div>

                <div class="benefit-card">
                    <h3><i class="fas fa-users"></i> Community Impact</h3>
                    <p>Positive outcomes beyond the classroom:</p>
                    <ul>
                        <li>Parents appreciate the innovative approach</li>
                        <li>Increased community support for school development</li>
                        <li>Teachers find it easier to interact with students</li>
                        <li>Prepares students for technology-driven future</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta">
        <div class="container">
            <h2>Ready to Transform Your School?</h2>
            <p>Join dozens of educational institutions across Uganda that have revolutionized learning with Najuzi Digital Library</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Request a Demo</a>
                <a href="#" class="btn btn-outline">Contact Our Team</a>
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
