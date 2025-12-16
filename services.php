<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Football Agent Sierra Leone</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f0f9f0 0%, #e8f5e9 100%);
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
        .services-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1529900748604-07564a03e7a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 40px;
            text-align: center;
            margin-bottom: 50px;
        }

        .services-hero h2 {
            font-size: 42px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .services-hero p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Services Grid */
        .services-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 50px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .service-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            background: linear-gradient(135deg, #1b5e20, #2e7d32);
            color: white;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
        }

        .service-content {
            padding: 30px;
        }

        .service-content h3 {
            color: #1b5e20;
            font-size: 24px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-content h3 i {
            color: #4caf50;
        }

        .service-content ul {
            list-style: none;
            margin: 20px 0;
        }

        .service-content li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-content li i {
            color: #2e7d32;
            font-size: 14px;
        }

        .service-price {
            background: #f5f9f5;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
            border-left: 4px solid #4caf50;
        }

        .price-tag {
            font-size: 24px;
            color: #1b5e20;
            font-weight: bold;
        }

        .price-note {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }

        /* Process Section */
        .process-section {
            background: linear-gradient(to right, #1b5e20, #2e7d32);
            color: white;
            padding: 60px 40px;
            border-radius: 12px;
            margin: 60px 0;
            text-align: center;
        }

        .process-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .process-steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            position: relative;
        }

        .process-step {
            flex: 1;
            min-width: 200px;
            padding: 20px;
            position: relative;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: #4caf50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            margin: 0 auto 20px;
        }

        .step-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: #c8e6c9;
        }

        /* Testimonials */
        .testimonials {
            padding: 60px 20px;
            text-align: center;
        }

        .testimonials h2 {
            color: #1b5e20;
            font-size: 36px;
            margin-bottom: 40px;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            text-align: left;
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            font-size: 80px;
            color: #4caf50;
            opacity: 0.2;
            position: absolute;
            top: -20px;
            left: 20px;
        }

        .client-info {
            display: flex;
            align-items: center;
            margin-top: 20px;
            gap: 15px;
        }

        .client-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #2e7d32;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* CTA Section */
        .cta-section {
            background: #f5f9f5;
            padding: 60px 40px;
            border-radius: 12px;
            text-align: center;
            margin: 40px 0;
            border: 2px solid #c8e6c9;
        }

        .cta-button {
            background: linear-gradient(to right, #2e7d32, #4caf50);
            color: white;
            padding: 18px 45px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 20px;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(46, 125, 50, 0.4);
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(46, 125, 50, 0.6);
            background: linear-gradient(to right, #388e3c, #66bb6a);
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

            .services-hero h2 {
                font-size: 32px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .process-steps {
                flex-direction: column;
            }

            .testimonial-grid {
                grid-template-columns: 1fr;
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
            <h1>Our <span>Services</span></h1>
            <nav>
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <a href="about.php"><i class="fas fa-info-circle"></i> About</a>
                <a href="services.php" class="active"><i class="fas fa-futbol"></i> Services</a>
                <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
                <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </nav>
        </div>
    </header>

    <section class="services-hero">
        <h2>Professional Football Management Services</h2>
        <p>Comprehensive solutions designed to maximize your football career potential and secure your future in the
            sport</p>
    </section>

    <div class="services-container">
        <!-- Services Grid -->
        <div class="services-grid">
            <!-- Player Management -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="service-content">
                    <h3><i class="fas fa-user-tie"></i> Player Management</h3>
                    <p>End-to-end career planning and personal management for players from Bo Rangers, East End Lions,
                        FC Kallon, and other Sierra Leone Premier League clubs.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Career path development & strategy</li>
                        <li><i class="fas fa-check"></i> Personal brand building</li>
                        <li><i class="fas fa-check"></i> Media and public relations</li>
                        <li><i class="fas fa-check"></i> Financial planning and advice</li>
                        <li><i class="fas fa-check"></i> Lifestyle and personal development</li>
                        <li><i class="fas fa-check"></i> 24/7 personal support</li>
                    </ul>
                    <div class="service-price">
                        <div class="price-tag">Custom Packages</div>
                        <div class="price-note">Commission-based or fixed monthly fee</div>
                    </div>
                </div>
            </div>

            <!-- Contract Negotiation -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="service-content">
                    <h3><i class="fas fa-handshake"></i> Contract Negotiation</h3>
                    <p>Legal and commercial expertise to ensure players receive fair compensation, bonuses, and working
                        conditions in domestic and international transfers.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Transfer fee negotiations</li>
                        <li><i class="fas fa-check"></i> Salary and bonus structuring</li>
                        <li><i class="fas fa-check"></i> Image rights management</li>
                        <li><i class="fas fa-check"></i> Sponsorship and endorsement deals</li>
                        <li><i class="fas fa-check"></i> FIFA and national FA compliance</li>
                        <li><i class="fas fa-check"></i> Dispute resolution support</li>
                    </ul>
                    <div class="service-price">
                        <div class="price-tag">5-10% Commission</div>
                        <div class="price-note">Only payable upon successful negotiation</div>
                    </div>
                </div>
            </div>

            <!-- Scouting & Analytics -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="service-content">
                    <h3><i class="fas fa-chart-line"></i> Scouting & Analytics</h3>
                    <p>Advanced data analytics and video analysis to showcase player performance to international clubs,
                        scouts, and football academies.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Performance data analysis</li>
                        <li><i class="fas fa-check"></i> Professional highlight reels</li>
                        <li><i class="fas fa-check"></i> Scouting report preparation</li>
                        <li><i class="fas fa-check"></i> Club matching and placement</li>
                        <li><i class="fas fa-check"></i> Trial arrangement and preparation</li>
                        <li><i class="fas fa-check"></i> Market value assessment</li>
                    </ul>
                    <div class="service-price">
                        <div class="price-tag">LE5,000-10,000</div>
                        <div class="price-note">Per comprehensive scouting package</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Services -->
        <div class="services-grid">
            <!-- Youth Development -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-child"></i>
                </div>
                <div class="service-content">
                    <h3><i class="fas fa-child"></i> Youth Development</h3>
                    <p>Specialized programs for young talents aged 14-21 to prepare them for professional careers and
                        academic opportunities abroad.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Academy placement (UK, Portugal, USA)</li>
                        <li><i class="fas fa-check"></i> Scholarship opportunities</li>
                        <li><i class="fas fa-check"></i> Educational pathway planning</li>
                        <li><i class="fas fa-check"></i> International exposure tours</li>
                        <li><i class="fas fa-check"></i> Mental and physical conditioning</li>
                    </ul>
                    <div class="service-price">
                        <div class="price-tag">LE10,000-15,000</div>
                        <div class="price-note">Varies by program duration</div>
                    </div>
                </div>
            </div>

            <!-- Club Services -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="service-content">
                    <h3><i class="fas fa-users"></i> Club Services</h3>
                    <p>Professional support for Sierra Leonean football clubs in player recruitment, management, and
                        commercial development.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Player recruitment and scouting</li>
                        <li><i class="fas fa-check"></i> Coaching staff placement</li>
                        <li><i class="fas fa-check"></i> Commercial partnership development</li>
                        <li><i class="fas fa-check"></i> Facility and infrastructure consulting</li>
                        <li><i class="fas fa-check"></i> Youth academy development</li>
                    </ul>
                    <div class="service-price">
                        <div class="price-tag">Monthly Retainer</div>
                        <div class="price-note">Customized based on club needs</div>
                    </div>
                </div>
            </div>

            <!-- Post-Career Planning -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="service-content">
                    <h3><i class="fas fa-graduation-cap"></i> Post-Career Planning</h3>
                    <p>Supporting players in transitioning from active football to coaching, management, broadcasting,
                        or other career paths.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Coaching license assistance</li>
                        <li><i class="fas fa-check"></i> Educational opportunities</li>
                        <li><i class="fas fa-check"></i> Business development support</li>
                        <li><i class="fas fa-check"></i> Media training and placement</li>
                        <li><i class="fas fa-check"></i> Mentorship programs</li>
                    </ul>
                    <div class="service-price">
                        <div class="price-tag">LE800+</div>
                        <div class="price-note">Based on specific program requirements</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Process -->
        <section class="process-section">
            <h2>Our 5-Step Process</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Assessment</h3>
                    <p>Comprehensive evaluation of player skills, potential, and career goals</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Strategy</h3>
                    <p>Development of personalized career roadmap and action plan</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Preparation</h3>
                    <p>Professional portfolio creation and skill enhancement</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3 class="step-title">Placement</h3>
                    <p>Targeted club introductions and negotiation support</p>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <h3 class="step-title">Support</h3>
                    <p>Ongoing management and career development support</p>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p>"F.A.S.L transformed my career. They secured my transfer to Portugal when I thought my football
                        dreams were over. Their professionalism and dedication are unmatched in Sierra Leone."</p>
                    <div class="client-info">
                        <div class="client-avatar">MK</div>
                        <div>
                            <h4>Mohamed Kamara</h4>
                            <p>Striker, Bo Rangers FC</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p>"The contract negotiation service saved me from signing a terrible deal. They ensured I got fair
                        wages and bonuses that have secured my family's future. Worth every Leone!"</p>
                    <div class="client-info">
                        <div class="client-avatar">IS</div>
                        <div>
                            <h4>Ibrahim Sesay</h4>
                            <p>Defender, Mighty Blackpool</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p>"As a youth player, their development program got me a scholarship in the USA. Now I'm playing
                        college soccer while getting my degree. They truly care about more than just football."</p>
                    <div class="client-info">
                        <div class="client-avatar">AK</div>
                        <div>
                            <h4>Alusine Koroma</h4>
                            <p>Youth Academy Graduate</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <footer>


        <p class="copyright">&copy; 2025 Football Agent Sierra Leone. All Rights Reserved. | Freetown, Sierra Leone
        </p>
        </div>
    </footer>
</body>

</html>