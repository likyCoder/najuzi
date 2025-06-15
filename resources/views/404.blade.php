<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Page Not Found | Najuzi Digital Library</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-orange: #ff8400;
            --primary-blue: #0066cc;
            --dark-black: #222;
            --light-white: #f8f9fa;
            --warning-red: #dc3545;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-white);
            color: var(--dark-black);
            line-height: 1.6;
        }
        .error-hero {
            background: linear-gradient(rgba(1, 1, 1, 0.5),rgba(38, 0, 255, 0.826)), url('assets/images/impact.png') no-repeat center center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .error-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fadeInDown 0.8s ease-out;
        }
        .error-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 0.8s ease-out;
        }
        .error-container {
            max-width: 800px;
            margin: -50px auto 0;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            position: relative;
            z-index: 10;
            border-top: 5px solid var(--primary-orange);
        }
        .error-icon {
            font-size: 5rem;
            color: var(--warning-red);
            margin-bottom: 1.5rem;
            animation: pulse 2s infinite;
        }
        .error-code {
            font-size: 6rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
            line-height: 1;
        }
        .error-title {
            font-size: 2rem;
            color: var(--dark-black);
            margin-bottom: 1.5rem;
        }
        .error-message {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #555;
        }
        .warning-box {
            background-color: #fff8e6;
            border-left: 4px solid var(--primary-orange);
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-radius: 0 5px 5px 0;
        }
        .warning-title {
            color: var(--primary-orange);
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }
        .warning-title i {
            margin-right: 10px;
        }
        .btn-primary {
            background-color: var(--primary-blue);
            border: none;
            padding: 12px 30px;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 50px;
            color: white;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 102, 204, 0.3);
        }
        .btn-primary:hover {
            background-color: #0052a3;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 102, 204, 0.4);
            color: white;
        }
        .btn-secondary {
            background-color: white;
            border: 2px solid var(--primary-blue);
            padding: 10px 25px;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 50px;
            color: var(--primary-blue);
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            margin-left: 15px;
        }
        .btn-secondary:hover {
            background-color: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }
        .action-buttons {
            margin-top: 2rem;
        }
        .suggestions {
            margin-top: 2rem;
            text-align: left;
        }
        .suggestions h3 {
            color: var(--primary-blue);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        .suggestions ul {
            list-style-position: inside;
            margin-bottom: 1.5rem;
        }
        .suggestions li {
            margin-bottom: 0.5rem;
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px);}
            to { opacity: 1; transform: translateY(0);}
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px);}
            to { opacity: 1; transform: translateY(0);}
        }
        @keyframes pulse {
            0% { transform: scale(1);}
            50% { transform: scale(1.1);}
            100% { transform: scale(1);}
        }
        @media (max-width: 768px) {
            .error-container { margin: -30px 20px 0; padding: 2rem;}
            .error-code { font-size: 4rem;}
            .error-title { font-size: 1.5rem;}
            .action-buttons { display: flex; flex-direction: column;}
            .btn-secondary { margin-left: 0; margin-top: 15px;}
        }
    </style>
</head>
<body>
    <section class="error-hero">
        <div>
            <h1>Oops! Something went wrong</h1>
            <p>We can't seem to find the page you're looking for</p>
        </div>
    </section>
    <div class="error-container">
        <div class="text-center">
            <div class="error-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="action-buttons">
                <a href="{{ url('/') }}" class="btn-primary"><i class="fas fa-home"></i> Go to Homepage</a>
                <a href="mailto:support@najuzi.com" class="btn-secondary"><i class="fas fa-envelope"></i> Contact Support</a>
            </div>
            <h1 class="error-code">404</h1>
            <h2 class="error-title">Page Not Found</h2>
            <p class="error-message">The requested URL was not found on this server. This might be because:</p>
            <div class="warning-box">
                <h3 class="warning-title"><i class="fas fa-exclamation-circle"></i> Important Warning</h3>
                <p>You may have mistyped the address, the page may have been moved, or you might not have proper permissions to view this content. Please verify the URL and try again.</p>
            </div>
            <div class="warning-box" style="background-color: #ffe6e6; border-left-color: var(--warning-red);">
                <h3 class="warning-title" style="color: var(--warning-red);"><i class="fas fa-radiation"></i> Security Notice</h3>
                <p>If you arrived here by clicking a link from another site, please notify the webmaster of that site about the broken link. Do not attempt to bypass security measures by modifying URLs.</p>
            </div>
            <div class="suggestions">
                <h3>What you can do now:</h3>
                <ul>
                    <li>Check the URL for typos</li>
                    <li>Return to our homepage</li>
                    <li>Use the search function to find what you need</li>
                    <li>Contact our support team if you believe this is an error</li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.warning-box').forEach((box, index) => {
            box.style.animation = `fadeInUp 0.5s ease-out ${index * 0.2}s forwards`;
            box.style.opacity = '0';
        });
        setInterval(() => {
            const icon = document.querySelector('.error-icon');
            icon.style.transform = 'scale(1.1)';
            setTimeout(() => {
                icon.style.transform = 'scale(1)';
            }, 300);
        }, 3000);
    </script>
</body>
</html>