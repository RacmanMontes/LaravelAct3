
    <title> Cellphone Repair</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', sans-serif;
            color: #333;
            overflow-x: hidden;
            
        }

        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        .parallax-container {
            height: 100vh;
            overflow-x: hidden;
            overflow-y: auto;
            perspective: 1px;
        }

        .parallax-layer {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .parallax-back {
            transform: translateZ(-1px) scale(2);
        }

        .parallax-base {
            transform: translateZ(0);
        }


      /* Navbar */
    nav {
      height: 60px;
      background: #2c3e50;
      color: white;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 100%;
      padding: 0 1rem;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: white;
    }

    .nav-links {
      display: flex;
      align-items: center;
      list-style: none;
      gap: 2rem;
      margin: 0;
      height: 100%;
    }

    .nav-links li a {
      display: flex;
      align-items: center;
      justify-content: center;
      
      text-decoration: none;
      font-weight: 500;
      line-height: normal !important;
      
    }

   



        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 2rem;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background: #ff6b6b;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background: #ff5252;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .section {
            padding: 6rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 2.5rem;
            color: #2c3e50;
        }

        .services {
            background: #f8f9fa;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            font-size: 3rem;
            color: #4ca1af;
            margin-bottom: 1rem;
        }

        .about {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 3rem;
        }

        .about-content {
            flex: 1;
            min-width: 300px;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .testimonials {
            background: linear-gradient(to right, #2c3e50, #4ca1af);
            color: white;
            text-align: center;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1rem;
        }

        .contact {
            background: #f8f9fa;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #4ca1af;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        input, textarea {
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        .footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 3rem 2rem;
        }

        .phone-background {
            position: absolute;
            width: 400px;
            height: 700px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="400" height="700" viewBox="0 0 400 700"><rect x="50" y="10" width="300" height="680" rx="30" fill="none" stroke="white" stroke-width="3" opacity="0.2"/><circle cx="200" cy="650" r="20" fill="none" stroke="white" stroke-width="2" opacity="0.2"/><rect x="140" y="60" width="120" height="25" rx="12.5" fill="none" stroke="white" stroke-width="2" opacity="0.2"/></svg>') no-repeat center center;
            z-index: 1;
        }

        .phone-1 {
            top: 10%;
            left: 10%;
            animation: float 8s ease-in-out infinite;
        }

        .phone-2 {
            top: 20%;
            right: 10%;
            animation: float 10s ease-in-out infinite 1s;
        }

        .phone-3 {
            bottom: 15%;
            left: 15%;
            animation: float 12s ease-in-out infinite 0.5s;
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .phone-background {
                transform: scale(0.7);
            }
        }
    </style>
</head>
<body>
    
    <x-layout>
    
    
    <div class="parallax-container">
        <!-- Hero Section -->
        <section class="hero">
            <div class="phone-background phone-1"></div>
            <div class="phone-background phone-2"></div>
            <div class="phone-background phone-3"></div>
            <div class="hero-content">
                <h1>Cellphone Repair</h1>
                <p>Fast, reliable, and professional phone repair services</p>
                <a href="#contact" class="btn">Book a Repair</a>
            </div>
        </section>

        <!-- Services Section -->
        <section class="section services" id="services">
            <h2 class="section-title">Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Screen Replacement</h3>
                    <p>Cracked screen? We'll have it looking brand new with our premium quality displays.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-battery-full"></i>
                    </div>
                    <h3>Battery Replacement</h3>
                    <p>Is your phone dying too quickly? We'll replace your battery with a high-quality one.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <h3>Water Damage Repair</h3>
                    <p>Accidental water exposure? We specialize in liquid damage recovery.</p>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="section about" id="about">
            <div class="about-content">
                <h2 class="section-title">Why Choose Us?</h2>
                <p>With over 10 years of experience, our certified technicians provide the highest quality repair services for all major phone brands.</p>
                <p>We use only premium parts and offer a 12-month warranty on all repairs. Your satisfaction is guaranteed.</p>
                <p>Our average repair time is under 45 minutes, and we offer same-day service for most common issues.</p>
            </div>
            <div class="about-image">
                <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='500' height='400' viewBox='0 0 500 400'><rect width='500' height='400' fill='%234ca1af' opacity='0.2'/><rect x='150' y='100' width='200' height='200' rx='10' fill='%232c3e50'/><circle cx='250' cy='150' r='30' fill='%23ff6b6b'/><rect x='200' y='200' width='100' height='40' rx='5' fill='white'/><rect x='180' y='260' width='140' height='10' rx='5' fill='%23f8f9fa'/><rect x='180' y='280' width='100' height='10' rx='5' fill='%23f8f9fa'/></svg>" alt="Phone repair illustration">
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="section testimonials" id="testimonials">
            <h2 class="section-title">What Our Customers Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "I dropped my phone and shattered the screen. TechFix had it looking brand new in under an hour. Great service!"
                    </div>
                    <div class="testimonial-author">- Sarah M.</div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "My phone battery wasn't lasting through the day. TechFix replaced it quickly and now it works perfectly."
                    </div>
                    <div class="testimonial-author">- James K.</div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "Water damaged my phone and I thought it was done for. TechFix brought it back to life! Highly recommend."
                    </div>
                    <div class="testimonial-author">- Olivia T.</div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="section contact" id="contact">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3>Location</h3>
                            <p>123 Tech Street, Digital City</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3>Phone</h3>
                            <p>(555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p>info@techfixrepair.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3>Hours</h3>
                            <p>Mon-Fri: 9am - 7pm<br>Sat-Sun: 10am - 5pm</p>
                        </div>
                    </div>
                </div>
                <form id="contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" placeholder="Your Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" placeholder="How can we help you?" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </section>
    </div>

       </x-layout>
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simple parallax effect for hero section
            window.addEventListener('scroll', function() {
                const scrollY = window.scrollY;
                document.querySelector('.hero').style.backgroundPositionY = scrollY * 0.5 + 'px';
                
                // Move phones slightly on scroll
                document.querySelector('.phone-1').style.transform = `translateY(${scrollY * 0.2}px) rotate(5deg)`;
                document.querySelector('.phone-2').style.transform = `translateY(${scrollY * 0.1}px) rotate(-3deg)`;
                document.querySelector('.phone-3').style.transform = `translateY(${scrollY * 0.3}px) rotate(2deg)`;
            });

            // Form submission
            document.getElementById('contact-form').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thanks for your message! We will get back to you soon.');
                this.reset();
            });

            // Smooth scrolling for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
