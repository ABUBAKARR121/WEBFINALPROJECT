<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Football Agent Sierra Leone</title>
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
            position: relative;
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

        /* Main Content */
        .content {
            flex: 1;
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('https://images.unsplash.com/photo-1575361204480-aadea25e6e68?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 60px 40px;
            border-radius: 12px;
            margin-bottom: 50px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .about-hero h2 {
            font-size: 42px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .about-hero p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* About Sections */
        .about-section {
            background: white;
            padding: 40px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .about-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .section-title {
            color: #1b5e20;
            font-size: 28px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #4caf50;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #4caf50;
        }

        .mission-vision-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .mission-box,
        .vision-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-top: 5px solid #2e7d32;
        }

        .mission-box {
            border-top-color: #2e7d32;
        }

        .vision-box {
            border-top-color: #4caf50;
        }

        .values-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .value-card {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            border-left: 4px solid #2e7d32;
            transition: all 0.3s ease;
        }

        .value-card:hover {
            background: #f0f9f0;
            transform: scale(1.03);
        }

        .value-card i {
            font-size: 36px;
            color: #2e7d32;
            margin-bottom: 15px;
        }

        .value-card h4 {
            color: #1b5e20;
            margin-bottom: 10px;
            font-size: 20px;
        }

        /* Team Section */
        .team-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .team-member {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .member-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 3px solid #2e7d32;
        }

        .member-info {
            padding: 20px;
        }

        .member-name {
            font-size: 20px;
            color: #1b5e20;
            margin-bottom: 5px;
        }

        .member-role {
            color: #4caf50;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Timeline */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 40px auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background: #4caf50;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 3px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
            margin-bottom: 30px;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-content {
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-left: 4px solid #2e7d32;
        }

        .timeline-year {
            font-weight: bold;
            color: #2e7d32;
            font-size: 18px;
            margin-bottom: 5px;
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(to right, #1b5e20, #2e7d32);
            color: white;
            padding: 40px 30px;
            border-radius: 12px;
            margin: 50px 0;
            text-align: center;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .stat-box {
            text-align: center;
        }

        .stat-number {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #c8e6c9;
        }

        .stat-description {
            font-size: 16px;
        }

        /* Footer */
        footer {
            background: linear-gradient(to right, #1b5e20, #2e7d32);
            color: white;
            padding: 25px 20px 15px;
            margin-top: 60px;
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

            .about-hero h2 {
                font-size: 32px;
            }

            .about-hero p {
                font-size: 18px;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item:nth-child(even) {
                left: 0;
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
            <h1>About <span>F.A.S.L</span></h1>
            <nav>
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <a href="about.php" class="active"><i class="fas fa-info-circle"></i> About</a>
                <a href="services.php"><i class="fas fa-futbol"></i> Services</a>
                <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
                <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </nav>
        </div>
    </header>

    <div class="content">
        <!-- Hero Section -->
        <section class="about-hero">
            <h2>Our Story & Vision</h2>
            <p>Transforming Sierra Leonean football talent into global sporting excellence through professional
                representation, mentorship, and strategic career development.</p>
        </section>

        <!-- Who We Are -->
        <section class="about-section">
            <h2 class="section-title"><i class="fas fa-users"></i> Who We Are</h2>
            <p>Football Agent Sierra Leone (F.A.S.L) was founded in September 2025 by former professional players and
                sports management experts with a shared vision: to professionalize football management in West Africa
                and create sustainable pathways for local talent.</p>
            <p>Based in Freetown with international partnerships across Europe, Asia, and the Americas, we serve as the
                bridge between Sierra Leone's rich football talent pool and the global football industry.</p>
        </section>

        <!-- Mission & Vision -->
        <div class="mission-vision-container">
            <div class="mission-box">
                <h3><i class="fas fa-bullseye"></i> Our Mission</h3>
                <p>To provide transparent, data-driven, and ethical representation for players in the Sierra Leone
                    Premier League and grassroots football. We focus on holistic player development, combining athletic
                    performance with personal growth, education, and life skills.</p>
                <ul style="margin-top: 15px; padding-left: 20px;">
                    <li>Professional contract negotiation</li>
                    <li>Performance data analytics</li>
                    <li>Media and brand management</li>
                    <li>Post-career transition planning</li>
                </ul>
            </div>

            <div class="vision-box">
                <h3><i class="fas fa-eye"></i> Our Vision</h3>
                <p>To become Africa's leading football agency by 2030, with at least 50 Sierra Leonean players in top
                    European, Asian, and American leagues. We aim to transform Sierra Leone into a recognized hub for
                    football talent development and scouting.</p>
                <p>We envision a future where every talented young footballer in Sierra Leone has access to professional
                    guidance and opportunities to reach their full potential on the global stage.</p>
            </div>
        </div>

        <!-- Our Values -->
        <section class="about-section">
            <h2 class="section-title"><i class="fas fa-handshake"></i> Our Core Values</h2>
            <div class="values-container">
                <div class="value-card">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Integrity</h4>
                    <p>Transparent dealings, ethical practices, and honest communication in all our relationships.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-star"></i>
                    <h4>Excellence</h4>
                    <p>Commitment to the highest standards in player representation and career management.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-heart"></i>
                    <h4>Player-Centric</h4>
                    <p>The player's welfare, development, and long-term success are always our priority.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-flag"></i>
                    <h4>National Pride</h4>
                    <p>Dedicated to elevating Sierra Leone's reputation in global football through our work.</p>
                </div>
            </div>
        </section>

        <!-- Our Journey -->
        <section class="about-section">
            <h2 class="section-title"><i class="fas fa-road"></i> Our Journey</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2025</div>
                        <p>Founded F.A.S.L in Freetown with initial partnerships with 3 local clubs</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2026</div>
                        <p>Secured first international transfer for a Sierra Leonean player to Portugal</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2027</div>
                        <p>Expanded operations to include youth development programs</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2028</div>
                        <p>Partnered with European agencies for scouting and trials</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team -->
        <section class="about-section">
            <h2 class="section-title"><i class="fas fa-user-tie"></i> Meet Our Leadership</h2>
            <div class="team-container">
                <div class="team-member">
                    <img src="abubakarr1.jpg" alt="CEO" class="member-img">
                    <div class="member-info">
                        <h4 class="member-name">Abubakarr S. Borbor</h4>
                        <p class="member-role">Founder & CEO</p>
                        <p>Former Solar Boys FC captain with 17+ football years of experience in street football</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="headofscooting.jpg" alt="Head of Scouting" class="member-img">
                    <div class="member-info">
                        <h4 class="member-name">Brima Foday Kargbo</h4>
                        <p class="member-role">Head of Scouting</p>
                        <p>Will soon applied for UEFA Licensed Scout with extensive West African network</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="legaldirector.jpg" alt="Legal Director" class="member-img">
                    <div class="member-info">
                        <h4 class="member-name">Kadiatu Saidu Turay</h4>
                        <p class="member-role">Legal Director</p>
                        <p>Sports Law specialist and will soon applied for FIFA Players' Status experience</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics -->
        <section class="stats-section">
            <h2 style="font-size: 36px; margin-bottom: 20px;">Our Impact in Numbers</h2>
            <div class="stats-container">
                <div class="stat-box">
                    <div class="stat-number">50+</div>
                    <div class="stat-description">Players Represented</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">12</div>
                    <div class="stat-description">Countries</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">LE50M+</div>
                    <div class="stat-description">Total Transfer Value</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">100%</div>
                    <div class="stat-description">Contract Compliance</div>
                </div>
            </div>
        </section>

        <!-- Contact CTA -->
        <section class="about-section" style="text-align: center;">
            <h2 class="section-title"><i class="fas fa-comments"></i> Ready to Work With Us?</h2>
            <p style="font-size: 18px; margin-bottom: 25px;">Whether you're a player seeking representation, a club
                looking for talent, or a partner wanting to collaborate, we'd love to hear from you.</p>
            <a href="contact.php"
                style="background: #2e7d32; color: white; padding: 15px 35px; text-decoration: none; border-radius: 50px; font-size: 18px; font-weight: 600; display: inline-block; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(46, 125, 50, 0.4);">
                <i class="fas fa-envelope"></i> Contact Us Today
            </a>
        </section>
    </div>

    <footer>


        <p class="copyright">&copy; 2025 Football Agent Sierra Leone. All Rights Reserved. | Freetown, Sierra Leone
        </p>
        </div>
    </footer>
</body>

</html>