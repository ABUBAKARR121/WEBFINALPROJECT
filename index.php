<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Football Agent Sierra Leone</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f9f9f9 0%, #e8f5e9 100%);
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        header {
            background: linear-gradient(to right, #1b5e20, #2e7d32);
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-container h1 {
            margin: 0;
            font-size: 28px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            letter-spacing: 0.5px;
        }

        .logo-container span {
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
            font-size: 17px;
            padding: 8px 0;
            position: relative;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #a5d6a7;
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
        .container {
            flex: 1;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1551958219-acbc608c6377?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 40px;
            border-radius: 12px;
            margin-bottom: 50px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .hero h2 {
            font-size: 42px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto 30px;
            line-height: 1.8;
        }

        .btn {
            background: linear-gradient(to right, #2e7d32, #4caf50);
            color: white;
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(46, 125, 50, 0.4);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(46, 125, 50, 0.6);
            background: linear-gradient(to right, #388e3c, #66bb6a);
        }

        /* Agency Information Section */
        .agency-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .info-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-top: 5px solid #2e7d32;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .info-card h3 {
            color: #1b5e20;
            margin-bottom: 15px;
            font-size: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-card h3 i {
            color: #4caf50;
        }

        /* Players Showcase */
        .players-section {
            margin-bottom: 60px;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            color: #1b5e20;
            margin-bottom: 40px;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 4px;
            background: linear-gradient(to right, #1b5e20, #4caf50);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .players-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
        }

        .player-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .player-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .player-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-bottom: 3px solid #2e7d32;
        }

        .player-info {
            padding: 20px;
            text-align: center;
        }

        .player-name {
            font-size: 22px;
            color: #1b5e20;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .player-position {
            color: #4caf50;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 16px;
        }

        .player-club {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .player-stats {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        .stat {
            text-align: center;
        }

        .stat-value {
            font-weight: 700;
            color: #1b5e20;
            font-size: 18px;
        }

        .stat-label {
            font-size: 12px;
            color: #777;
            text-transform: uppercase;
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(to right, #1b5e20, #2e7d32);
            color: white;
            padding: 50px 30px;
            border-radius: 12px;
            margin-bottom: 40px;
            text-align: center;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 30px;
        }

        .stat-box {
            text-align: center;
            flex: 1;
            min-width: 150px;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #c8e6c9;
        }

        .stat-description {
            font-size: 18px;
        }

        /* COMPACT FOOTER - Modified to be smaller */
        footer {
            background: linear-gradient(to right, #1b5e20, #2e7d32);
            color: white;
            padding: 25px 20px 15px;
            margin-top: 40px;
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

        .social-links {
            display: flex;
            gap: 20px;
            margin: 10px 0;
        }

        .social-links a {
            color: white;
            font-size: 18px;
            background: rgba(255, 255, 255, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
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

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 20px;
                gap: 20px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hero h2 {
                font-size: 32px;
            }

            .hero p {
                font-size: 18px;
            }

            .players-container {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            .stats-container {
                flex-direction: column;
                align-items: center;
                gap: 40px;
            }

            .footer-links {
                gap: 15px;
            }

            .social-links {
                gap: 15px;
            }

            .footer-links a {
                font-size: 13px;
            }
        }

        @media (max-width: 480px) {
            .footer-links {
                flex-direction: column;
                align-items: center;
                gap: 12px;
            }

            .social-links {
                gap: 12px;
            }

            .footer-links a {
                font-size: 14px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <div class="logo-container">
            <h1>F<span>A</span>S<span>L</span></h1>
            <p style="font-weight: 600; color: #c8e6c9;">Football Agent Sierra Leone</p>
        </div>
        <nav>
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
            <a href="about.php"><i class="fas fa-info-circle"></i> About</a>
            <a href="services.php"><i class="fas fa-futbol"></i> Services</a>
            <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
            <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="register.php"><i class="fas fa-user-plus"></i> Register</a>
        </nav>
    </header>

    <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <h2>Welcome to Sierra Leone's Premier Football Agency</h2>
            <p>Bridging the gap between local talent in Freetown and international leagues. From the Siaka Stevens
                Stadium to the global stage, we manage the future of Leone Stars.</p>
            <p>With over 15 years of experience, we've helped more than 50 Sierra Leonean players secure professional
                contracts abroad.</p>
            <br>
            <a href="dashboard.php" class="btn">Manage Players <i class="fas fa-arrow-right"></i></a>
        </section>

        <!-- Agency Information -->
        <section class="agency-info">
            <div class="info-card">
                <h3><i class="fas fa-bullseye"></i> Our Mission</h3>
                <p>To identify, nurture, and promote Sierra Leone's football talent to the global stage while
                    maintaining integrity and professionalism in all our dealings.</p>
            </div>
            <div class="info-card">
                <h3><i class="fas fa-eye"></i> Our Vision</h3>
                <p>To become Africa's leading football agency by 2030, transforming Sierra Leone into a recognized hub
                    for football talent development.</p>
            </div>
            <div class="info-card">
                <h3><i class="fas fa-handshake"></i> Our Values</h3>
                <p>Integrity, Excellence, Professionalism, and Commitment to the development of Sierra Leonean football
                    talent.</p>
            </div>
        </section>

        <!-- Featured Players Section -->
        <section class="players-section">
            <h2 class="section-title">Featured Players</h2>
            <p style="text-align: center; max-width: 800px; margin: 0 auto 40px; color: #555; font-size: 18px;">
                Meet some of our top talents currently making waves in domestic and international leagues.
            </p>

            <div class="players-container">
                <!-- Player 1 -->
                <div class="player-card">
                    <img src="mohamedkamara.jpg" alt="Mohamed Kamara" class="player-img">
                    <div class="player-info">
                        <h3 class="player-name">Mohamed Kamara</h3>
                        <p class="player-position">Striker</p>
                        <p class="player-club">Bo Rangers FC</p>
                        <div class="player-stats">
                            <div class="stat">
                                <div class="stat-value">24</div>
                                <div class="stat-label">Goals</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">8</div>
                                <div class="stat-label">Assists</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">21</div>
                                <div class="stat-label">Age</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Player 2 -->
                <div class="player-card">
                    <img src="samuelbangura.jpg" alt="Samuel Bangura" class="player-img">
                    <div class="player-info">
                        <h3 class="player-name">Samuel Bangura</h3>
                        <p class="player-position">Midfielder</p>
                        <p class="player-club">East End Lions</p>
                        <div class="player-stats">
                            <div class="stat">
                                <div class="stat-value">12</div>
                                <div class="stat-label">Goals</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">18</div>
                                <div class="stat-label">Assists</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">23</div>
                                <div class="stat-label">Age</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Player 3 -->
                <div class="player-card">
                    <img src="ibrahimsesay.jpg" alt="Ibrahim Sesay" class="player-img">
                    <div class="player-info">
                        <h3 class="player-name">Ibrahim Sesay</h3>
                        <p class="player-position">Defender</p>
                        <p class="player-club">Mighty Blackpool</p>
                        <div class="player-stats">
                            <div class="stat">
                                <div class="stat-value">5</div>
                                <div class="stat-label">Goals</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">42</div>
                                <div class="stat-label">Tackles</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">25</div>
                                <div class="stat-label">Age</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Player 4 -->
                <div class="player-card">
                    <img src="alusinekoroma.jpg" alt="Alusine Koroma" class="player-img">
                    <div class="player-info">
                        <h3 class="player-name">Alusine Koroma</h3>
                        <p class="player-position">Goalkeeper</p>
                        <p class="player-club">FC Kallon</p>
                        <div class="player-stats">
                            <div class="stat">
                                <div class="stat-value">15</div>
                                <div class="stat-label">Clean Sheets</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">87%</div>
                                <div class="stat-label">Save Rate</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">28</div>
                                <div class="stat-label">Age</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Player 5 -->
                <div class="player-card">
                    <img src="patric.jpg" alt="Patrick Conteh" class="player-img">
                    <div class="player-info">
                        <h3 class="player-name">Patrick Conteh</h3>
                        <p class="player-position">Winger</p>
                        <p class="player-club">Diamond Stars FC</p>
                        <div class="player-stats">
                            <div class="stat">
                                <div class="stat-value">16</div>
                                <div class="stat-label">Goals</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">14</div>
                                <div class="stat-label">Assists</div>
                            </div>
                            <div class="stat">
                                <div class="stat-value">22</div>
                                <div class="stat-label">Age</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section class="stats-section">
            <h2 style="font-size: 36px; margin-bottom: 20px;">Our Impact in Numbers</h2>
            <p style="font-size: 18px; max-width: 800px; margin: 0 auto;">We take pride in our contribution to Sierra
                Leonean football development</p>

            <div class="stats-container">
                <div class="stat-box">
                    <div class="stat-number">50+</div>
                    <div class="stat-description">Players Represented</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">2 Month</div>
                    <div class="stat-description">Years of Experience</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">12</div>
                    <div class="stat-description">Countries</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">100M+</div>
                    <div class="stat-description">Transfer Value</div>
                </div>
            </div>
        </section>
    </div>

    <!-- COMPACT FOOTER -->
    <footer>

        <p class="copyright">&copy; 2025 Football Agent Sierra Leone. All Rights Reserved. | Freetown, Sierra Leone
        </p>
        </div>
    </footer>
</body>

</html>