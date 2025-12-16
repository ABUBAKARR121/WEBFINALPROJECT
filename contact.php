<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Football Agent Sierra Leone</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f0f9f0 0%, #fffde7 100%);
            color: #333;
            line-height: 1.7;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        header {
            background: linear-gradient(to right, #1b5e20, #2e7d32);
            color: white;
            padding: 20px 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        header h1 {
            font-size: 32px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            letter-spacing: 0.5px;
        }

        header span {
            color: #c8e6c9;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            padding: 8px 0;
            position: relative;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #a5d6a7;
        }

        nav a.active {
            color: #a5d6a7;
            border-bottom: 2px solid #a5d6a7;
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #a5d6a7;
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .contact-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('https://images.unsplash.com/photo-1529900748604-07564a03e7a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 40px;
            text-align: center;
            margin-bottom: 50px;
        }

        .contact-hero h2 {
            font-size: 42px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .contact-hero p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Inspiration Section */
        .inspiration-section {
            max-width: 900px;
            margin: 0 auto 60px;
            padding: 50px 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
            border-top: 5px solid #2e7d32;
        }

        .inspiration-title {
            color: #1b5e20;
            font-size: 36px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .inspiration-title i {
            color: #4caf50;
            font-size: 40px;
        }

        .quote {
            font-size: 22px;
            font-style: italic;
            color: #444;
            margin: 30px auto;
            max-width: 700px;
            line-height: 1.8;
            padding: 25px;
            background: #f9f9f9;
            border-radius: 8px;
            border-left: 4px solid #4caf50;
        }

        .inspiration-text {
            font-size: 18px;
            color: #555;
            margin: 25px 0;
            line-height: 1.8;
        }

        /* Contact Methods */
        .contact-container {
            max-width: 1200px;
            margin: 0 auto 60px;
            padding: 0 20px;
        }

        .contact-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .contact-card {
            background: white;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: all 0.3s ease;
            border-top: 5px solid #2e7d32;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #1b5e20, #2e7d32);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: white;
            font-size: 32px;
        }

        .contact-card h3 {
            color: #1b5e20;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .contact-info {
            font-size: 18px;
            color: #444;
            margin-bottom: 10px;
        }

        .contact-detail {
            font-size: 20px;
            font-weight: 600;
            color: #2e7d32;
            margin: 15px 0;
        }

        .hours {
            color: #666;
            font-size: 16px;
            margin-top: 15px;
            font-style: italic;
        }

        /* Map Section */
        .map-section {
            background: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 50px;
        }

        .map-container {
            position: relative;
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 30px;
            border: 3px solid #e0e0e0;
        }

        .map-placeholder {
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #1b5e20;
            text-align: center;
            padding: 20px;
        }

        .map-placeholder i {
            font-size: 60px;
            margin-bottom: 20px;
            color: #2e7d32;
        }

        /* Team Section */
        .team-section {
            text-align: center;
            padding: 50px 20px;
            background: #f9f9f9;
            border-radius: 12px;
            margin-bottom: 50px;
        }

        .team-section h2 {
            color: #1b5e20;
            font-size: 32px;
            margin-bottom: 40px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .team-member {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .team-member h4 {
            color: #1b5e20;
            margin-bottom: 5px;
        }

        .team-member p {
            color: #4caf50;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Footer */
        footer {
            background: linear-gradient(to right, #1b5e20, #2e7d32);
            color: white;
            padding: 25px 20px 15px;
            margin-top: auto;
            border-top: 3px solid #4caf50;
        }

        .footer-content {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .footer-logo {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 5px;
            text-align: center;
        }

        .footer-tagline {
            color: #c8e6c9;
            font-size: 15px;
            text-align: center;
            margin-bottom: 15px;
            max-width: 500px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 10px 0;
            padding: 10px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
        }

        .footer-links a {
            color: #c8e6c9;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .copyright {
            margin-top: 10px;
            color: #c8e6c9;
            font-size: 13px;
            text-align: center;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .contact-hero h2 {
                font-size: 32px;
            }

            .contact-hero p {
                font-size: 18px;
            }

            .inspiration-section {
                padding: 30px 20px;
            }

            .inspiration-title {
                font-size: 28px;
            }

            .quote {
                font-size: 18px;
                padding: 20px;
            }

            .contact-methods {
                grid-template-columns: 1fr;
            }

            .map-section {
                padding: 30px 20px;
            }

            .map-container {
                height: 300px;
            }

            .footer-links {
                gap: 15px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <div class="header-content">
            <h1>Contact <span>F.A.S.L</span></h1>
            <nav>
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <a href="about.php"><i class="fas fa-info-circle"></i> About</a>
                <a href="services.php"><i class="fas fa-futbol"></i> Services</a>
                <a href="contact.php" class="active"><i class="fas fa-envelope"></i> Contact</a>
                <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </nav>
        </div>
    </header>

    <section class="contact-hero">
        <h2>Connect With Sierra Leone's Football Future</h2>
        <p>Your gateway to professional football representation and career development in Sierra Leone and beyond</p>
    </section>

    <!-- Inspiration Section -->
    <section class="inspiration-section">
        <h2 class="inspiration-title"><i class="fas fa-star"></i> Every Great Career Starts With a Conversation</h2>

        <div class="quote">
            "The football pitch doesn't care where you come from. It only cares about talent, dedication, and heart. At
            F.A.S.L, we believe every Sierra Leonean player deserves the chance to be seen, heard, and given
            opportunities to shine on the world stage."
        </div>

        <p class="inspiration-text">
            For generations, Sierra Leone has produced incredible football talent that has often gone unrecognized.
            We're here to change that narrative. Whether you're a young player dreaming of professional football, a
            parent seeking guidance for your child's career, or a club looking to partner with us – your journey starts
            here.
        </p>

        <p class="inspiration-text" style="font-weight: bold; color: #1b5e20;">
            <i class="fas fa-quote-left"></i> From the streets of Freetown to stadiums around the world, we're building
            bridges for Sierra Leonean talent. Your success is our mission. <i class="fas fa-quote-right"></i>
        </p>
    </section>

    <!-- Contact Methods -->
    <div class="contact-container">
        <div class="contact-methods">
            <!-- Phone Contact -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Call Us</h3>
                <p class="contact-info">Speak directly with our team for immediate assistance</p>
                <div class="contact-detail">+232 30167628</div>
                <div class="contact-detail">+232 76 789 012</div>
                <div class="contact-detail">+232 88 345 678</div>
                <div class="hours">Monday - Friday: 8:00 AM - 6:00 PM</div>
                <div class="hours">Saturday: 9:00 AM - 2:00 PM</div>
                <p style="margin-top: 20px; color: #666; font-size: 15px;">
                    <i class="fas fa-info-circle"></i> Emergency contact available 24/7 for registered players
                </p>
            </div>

            <!-- Email Contact -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email Us</h3>
                <p class="contact-info">Send us detailed inquiries and we'll respond within 24 hours</p>
                <div class="contact-detail">info@fasl-sierra-leone.com</div>
                <div class="contact-detail">recruitment@fasl-sierra-leone.com</div>
                <div class="contact-detail">partnerships@fasl-sierra-leone.com</div>
                <p style="margin-top: 20px; color: #666; font-size: 15px;">
                    <i class="fas fa-lightbulb"></i> For player applications, include your CV, playing position, and
                    highlight video links
                </p>
            </div>

            <!-- Visit Us -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Visit Our Headquarters</h3>
                <p class="contact-info">Come see us at our state-of-the-art facility in Freetown</p>
                <div class="contact-detail" style="font-size: 18px;">
                    15 Siaka Stevens Street<br>
                    Central Business District<br>
                    Freetown, Sierra Leone
                </div>
                <div class="hours" style="margin-top: 20px;">
                    <strong>Office Hours:</strong><br>
                    Monday - Thursday: 8:30 AM - 5:30 PM<br>
                    Friday: 8:30 AM - 4:00 PM
                </div>
                <p style="margin-top: 20px; color: #666; font-size: 15px;">
                    <i class="fas fa-car"></i> Free parking available • Wheelchair accessible
                </p>
            </div>
        </div>

        <!-- Map Section -->
        <section class="map-section">
            <h2 style="color: #1b5e20; font-size: 32px; text-align: center; margin-bottom: 20px;">
                <i class="fas fa-map"></i> Find Our Location
            </h2>
            <p style="text-align: center; font-size: 18px; color: #555; margin-bottom: 10px;">
                Strategically located in the heart of Freetown's business district, just 10 minutes from Siaka Stevens
                Stadium
            </p>
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <h3 style="margin-bottom: 10px;">F.A.S.L Headquarters</h3>
                    <p>15 Siaka Stevens Street, Freetown</p>
                    <p style="font-size: 14px; margin-top: 15px; color: #666;">
                        <i class="fas fa-directions"></i> Near Bank of Sierra Leone • Opposite Cotton Tree
                    </p>
                </div>
            </div>
        </section>

        <!-- Quick Contact Team -->
        <section class="team-section">
            <h2>Direct Contact Points</h2>
            <p style="max-width: 800px; margin: 0 auto 30px; color: #555; font-size: 18px;">
                For specific inquiries, you can reach out directly to our department heads:
            </p>
            <div class="team-grid">
                <div class="team-member">
                    <h4>Alusine Bangura</h4>
                    <p>Player Recruitment</p>
                    <p><i class="fas fa-phone"></i> +232 76 111 222</p>
                    <p><i class="fas fa-envelope"></i> recruitment@fasl-sl.com</p>
                </div>
                <div class="team-member">
                    <h4>Mariama Kamara</h4>
                    <p>Scouting & Analytics</p>
                    <p><i class="fas fa-phone"></i> +232 76 333 444</p>
                    <p><i class="fas fa-envelope"></i> scouting@fasl-sl.com</p>
                </div>
                <div class="team-member">
                    <h4>Mohamed Conteh</h4>
                    <p>Legal & Contracts</p>
                    <p><i class="fas fa-phone"></i> +232 76 555 666</p>
                    <p><i class="fas fa-envelope"></i> legal@fasl-sl.com</p>
                </div>
            </div>
        </section>
    </div>

    <footer>


        <p class="copyright">
            &copy; 2025 Football Agent Sierra Leone. All Rights Reserved.<br>
            15 Siaka Stevens Street, Freetown, Sierra Leone
        </p>
        </div>
    </footer>
</body>

</html>