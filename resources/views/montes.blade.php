<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Racman Montes - Portfolio</title>
    <link rel="icon" href="path/to/your/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #6366f1;
            --secondary-color: #8b5cf6;
            --accent-color: #f59e0b;
            --bg-dark: #0f0f23;
            --bg-darker: #0a0a1a;
            --text-light: #e2e8f0;
            --text-gray: #94a3b8;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
        }

        body {
            font-family: 'Inter', sans-serif; /* Updated font-family */
            background: linear-gradient(135deg, var(--bg-dark) 0%, var(--bg-darker) 100%);
            color: var(--text-light);
            overflow-x: hidden;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

       
          

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            padding-top: 80px;
            background: url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            background-attachment: fixed; /* Added for subtle parallax */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(15, 15, 35, 0.7);
            z-index: 0;
        }

        /* New container for both text and image */
        .hero-content-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            width: 100%;
            padding: 0 4rem;
            z-index: 1;
        }

        .hero-text-content {
            text-align: left;
            max-width: 600px;
            animation: fadeInUp 1s ease;
        }

        .hero h2 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--text-light), var(--text-gray));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-family: 'Cinzel Decorative', serif;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
           
        }

        .hero .subtitle {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-weight: 600;
            text-align: left; /* Ensure left-aligned */
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.4);
        }

        /* Styles for the image container on the right */
        .hero-image-overlay {
            position: relative;
            margin-right: 30px;
            width: 350px; /* Adjust size as needed */
            height: 350px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 0 30px rgba(99, 102, 241, 0.5);
        }

        .hero-profile-pic {
            width: 200%;
            height: 100%;
            object-fit: contain;

            filter: brightness(0.8) grayscale(0.2); /* Optional: subtle effects to blend */
            transition: filter 0.3s ease;
            position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
        }

        .hero-profile-pic:hover {
            filter: brightness(1) grayscale(0); /* Optional: brighten on hover */
        }

        /* Sections */
        section {
            padding: 5rem 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Glass Card Effect */
        .card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 3rem;
            align-items: center;
        }

        .about-image {
            text-align: center;
            position: relative;
        }

        .profile-img-container {
            width: 300px;
            height: 300px;
            margin: 0 auto;
            position: relative;
            border-radius: 50%;
            padding: 10px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
        }

        .profile-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--bg-dark);
            transition: transform 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.05);
        }

        .about-text p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: var(--text-gray);
            line-height: 1.8;
        }

        /* Experience & Education */
        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
            padding-left: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -1.5rem;
            top: 0.5rem;
            width: 1rem;
            height: 1rem;
            background: var(--primary-color);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(99, 102, 241, 0.5);
        }

        .timeline-item h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--text-light);
        }

        .timeline-item .company {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .company-logo {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            object-fit: cover;
        }

        .timeline-item .date {
            color: var(--text-gray);
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: inline-block;
            padding: 0.2rem 0.8rem;
            background: rgba(99, 102, 241, 0.1);
            border-radius: 20px;
        }

        /* Skills */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .skill-category h3 {
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .skill-icon {
            font-size: 1.5rem;
        }

        .skill-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .skill-bar {
            flex: 1;
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin: 0 1rem;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 10px;
            transition: width 1s ease;
        }

        /* Interests */
        .interests-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .interest-item {
            text-align: center;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        .interest-item:hover {
            transform: translateY(-10px);
            background: rgba(99, 102, 241, 0.1);
        }

        .interest-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
            transition: transform 0.3s ease;
        }

        .interest-item:hover .interest-icon {
            transform: scale(1.2);
        }

        /* Gallery */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            aspect-ratio: 16/10;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            transition: transform 0.3s ease;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            text-decoration: none; /* Ensure link styling is removed */
        }

        .gallery-item img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1.5rem;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

       

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-on-scroll.animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 992px) { /* Adjusted breakpoint for hero section */
            .hero-content-wrapper {
                flex-direction: column; /* Stack the items vertically */
                text-align: center;
                padding: 4rem 2rem;
            }

            .hero-text-content {
                text-align: center;
                margin-bottom: 2rem;
            }

            .hero h1, .hero .subtitle {
                text-align: center;
            }

            .hero-image-overlay {
                width: 250px;
                height: 250px;
            }
        }

        

       
/* CTA Buttons */
.hero-buttons {
  display: flex;
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.cta-button {
  display: inline-block;
  padding: 0.8rem 1.6rem;
  border-radius: 50px;
  font-size: 1rem;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease-in-out;
}

.cta-button.primary {
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  color: #fff;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.cta-button.primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(0,0,0,0.3);
}

.cta-button.secondary {
  border: 2px solid #6a11cb;
  color: #6a11cb;
  background: transparent;
}

.cta-button.secondary:hover {
  background: #6a11cb;
  color: #fff;
}

/* Social Media Icons */
.hero-socials {
  display: flex;
  gap: 2rem;
  margin-top: 1rem;
}

.hero-socials a {
  font-size: 2rem;
  color: #aaa;
  transition: color 0.3s ease, transform 0.2s;
}

.hero-socials a:hover {
  color: #6a11cb;
  transform: scale(1.2);
}


    </style>
</head>
<body>
   <x-layout>
   
    <div class="parallax-container">
        <!-- Hero Section --> 
   <section class="hero">
    <div class="hero-content-wrapper">
        
        <!-- Text Content -->
        <div class="hero-text-content">
            <h2>Racman N. Montes</h2>
            <p class="subtitle">A Future Full-Stack Web Developer</p>
            
            <!-- CTA Buttons -->
            <div class="hero-buttons">
                <a href="#about" class="cta-button primary">Explore My Work</a>
                <a href="{{route('cv')}}" class="cta-button secondary" target="_blank">Download CV</a>
            </div>
            
            <!-- Social Media Links -->
            <div class="hero-socials">
                <a href="https://github.com/RacmanMontes" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.facebook.com/Montes.Racman.N" title="Facebook" aria-label="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://linkedin.com/in/RacmanMontes" target="_blank"><i class="fab fa-linkedin"></i></a>
               <a href="https://x.com/KierRocker" target="_blank"><i class="fab fa-x-twitter"></i></a>
               <a href="https://t.me/RacmanMontes" target="_blank" title="Telegram"><i class="fab fa-telegram"></i></a>
                <a href="mailto:racmanmontes@gmail.com"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
        
        <!-- Profile Image -->
        <div class="hero-image-overlay">
            <img src="{{ Storage::url('images/x.jpeg') }}" alt="Racman Montes profile image" class="hero-profile-pic">
        </div>
    </div>
</section>


    <section id="about">
        <div class="container">
            <h2 class="section-title animate-on-scroll">About Me</h2>
            <div class="about-content animate-on-scroll">
                <div class="about-image">
                    <div class="profile-img-container">
                        <img src="{{ Storage::url('images/x.jpeg') }}" alt="Racman Montes" class="profile-img">
                    </div>
                </div>
                <div class="about-text">
                    <p>Hello! I'm Racman, a passionate future full-stack Web developer with a focus on creating digital experiences that matter. I specialize in modern web technologies and love bringing creative ideas to life through code.</p>
                    <p>When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or sharing knowledge with the developer community. I believe in writing clean, maintainable code and creating user-centered solutions.</p>
                    <p>My journey in tech started with curiosity and has evolved into a career I'm truly passionate about. I'm always eager to take on new challenges and collaborate with like-minded individuals to build innovative solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="experience">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Experience</h2>
            <div class="card animate-on-scroll">
                <div class="timeline">
                    <div class="timeline-item">
                        <h3>Construction Worker</h3>
                        <div class="company">
                            <img src="http://ispsc.edu.ph/file-manager/images/ispsc_logo_2.png" alt="Ilocos Sur Polytechnic State College logo" class="company-logo" onerror="this.src='https://via.placeholder.com/20'">
                            Manila Philippines
                        </div>
                        <div class="date">2025 - Present</div>
                        <p>Part time construction worker at Quezon City.</p>
                    </div>
                    <div class="timeline-item">
                        <h3>On The Job Trainnee at CTE Dean</h3>
                        <div class="company">
                            <img src="http://ispsc.edu.ph/file-manager/images/ispsc_logo_2.png" alt="College of Teacher Education logo" class="company-logo" onerror="this.src='https://via.placeholder.com/20'">
                            College of Teacher Education
                        </div>
                        <div class="date">February-May 2025</div>
                        <p>Assisted in administrative tasks and digital content management within the Dean's office, gaining exposure to professional environments.</p>
                    </div>
                    <div class="timeline-item">
                        <h3>Security Guard</h3>
                        <div class="company">
                            <img src="{{Storage::url('images/edun.jpeg')}}" alt="Ilocos Sur Polytechnic State College logo" class="company-logo" onerror="this.src='https://via.placeholder.com/20'">
                            EDUN Security Agency
                        </div>
                        <div class="date">2023 - 2024</div>
                        <p>Taking Charge with all company properties in plain view protecting/preserving it with utmost deligence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Education</h2>
            <div class="card animate-on-scroll">
                <div class="timeline">
                    <div class="timeline-item">
                        <h3>On-going Third Year College</h3>
                        <div class="company">
                            <img src="http://ispsc.edu.ph/file-manager/images/ispsc_logo_2.png" alt="Ilocos Sur Polytechnic State College logo" class="company-logo" onerror="this.src='https://via.placeholder.com/20'">
                            Ilocos Sur Polytechnic State College
                        </div>
                        <div class="date">2025 - 2026</div>
                        <p>Specializing in Web Development and Mobile Development. Researching "Improving User Experience in Web Applications through AI-Driven Personalization."</p>
                    </div>
                    <div class="timeline-item">
                        <h3>Secondary</h3>
                        <div class="company">
                            <img src="{{Storage::url('images/east.jpeg')}}" 
     alt="Pudoc West Integrated School logo" 
     class="company-logo" 
     onerror="this.src='https://via.placeholder.com/150'">

                            Pudoc West Integrated School
                        </div>
                        <div class="date">2021 - 2022</div>
                        <p>Graduated as a General Academic Strand student.</p>
                    </div>
                     <div class="timeline-item">
                        <h3>Primary</h3>
                        <div class="company">
                            <img src="{{Storage::url('images/east.jpeg')}}" 
     alt="Pudoc West Integrated School logo" 
     class="company-logo" 
     onerror="this.src='https://via.placeholder.com/150'">

                            Pudoc East Integrated School
                        </div>
                        <div class="date">2021 - 2022</div>
                        <p>Completed primary education at Pudoc West Integrated School.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Skills</h2>
            <div class="skills-grid animate-on-scroll">
                <div class="card skill-category">
                    <h3><span class="skill-icon">💻</span> Frontend Development</h3>
                    <div class="skill-item">
                        <span>React/Next.js</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 0%;" data-width="0%"></div></div>
                        <span>0%</span>
                    </div>
                    <div class="skill-item">
                        <span>JavaScript/TypeScript</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 0%;" data-width="20%"></div></div>
                        <span>20%</span>
                    </div>
                    <div class="skill-item">
                        <span>HTML/CSS/SASS</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 0%;" data-width="25%"></div></div>
                        <span>25%</span>
                    </div>
                </div>
                <div class="card skill-category">
                    <h3><span class="skill-icon">🔧</span> Backend Development</h3>
                    <div class="skill-item">
                        <span>Node.js/Express</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 0%;" data-width="25%"></div></div>
                        <span>25%</span>
                    </div>
                    <div class="skill-item">
                        <span>Python/Django</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 0%;" data-width="10%"></div></div>
                        <span>10%</span>
                    </div>
                    <div class="skill-item">
                        <span>Database Design</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 0%;" data-width="25%"></div></div>
                        <span>25%</span>
                    </div>
                </div>
                <div class="card skill-category">
                    <h3><span class="skill-icon">🛠️</span> Tools & Technologies</h3>
                    <div class="skill-item">
                        <span>Git/GitHub</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 0%;" data-width="25%"></div></div>
                        <span>25%</span>
                    </div>
                    <div class="skill-item">
                        <span>AWS/Cloud Services</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 0%;" data-width="0%"></div></div>
                        <span>0%</span>
                    </div>
                    <div class="skill-item">
                        <span>Docker/DevOps</span>
                        <div class="skill-bar"><div class="skill-progress" style="width: 0%;" data-width="0%"></div></div>
                        <span>0%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="interests">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Interests</h2>
            <div class="interests-grid animate-on-scroll">
                <div class="card interest-item">
                    <div class="interest-icon">🎨</div>
                    <h3>Design & UI/UX</h3>
                    <p>Passionate about creating beautiful and functional user interfaces that provide exceptional user experiences.</p>
                </div>
                <div class="card interest-item">
                    <div class="interest-icon">🚀</div>
                    <h3>Space Technology</h3>
                    <p>Fascinated by space exploration and how technology is pushing the boundaries of human achievement.</p>
                </div>
                <div class="card interest-item">
                    <div class="interest-icon">🤖</div>
                    <h3>Artificial Intelligence</h3>
                    <p>Exploring the potential of AI and machine learning to solve complex problems and improve lives.</p>
                </div>
                <div class="card interest-item">
                    <div class="interest-icon">📱</div>
                    <h3>Mobile Development</h3>
                    <p>Developing native and cross-platform mobile applications with focus on performance and user experience.</p>
                </div>
                <div class="card interest-item">
                    <div class="interest-icon">🌱</div>
                    <h3>Sustainability</h3>
                    <p>Using technology to create solutions for environmental challenges and promote sustainable practices.</p>
                </div>
                <div class="card interest-item">
                    <div class="interest-icon">🎵</div>
                    <h3>Music & Audio</h3>
                    <p>Creating digital audio experiences and exploring the intersection of technology and music production.</p>
                </div>
                <div class="card interest-item">
                    <div class="interest-icon">🎬</div>
                    <h3>Video Editing</h3>
                    <p>Crafting compelling visual stories through video editing, from concept to final production.</p>
                </div>
                <div class="card interest-item">
                    <div class="interest-icon">🔒</div>
                    <h3>Cyber Security</h3>
                    <p>Exploring methods and tools to protect digital systems and data from cyber threats and attacks.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Project Gallery</h2>
            <div class="gallery-grid animate-on-scroll">
                <a href="#" target="_blank" rel="noopener noreferrer" class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-Commerce Platform">
                    <div class="gallery-overlay">
                        <h3>E-Commerce Platform</h3>
                        <p>React, Node.js, MongoDB</p>
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mobile App Design">
                    <div class="gallery-overlay">
                        <h3>Mobile App Design</h3>
                        <p>React Native, Firebase</p>
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Dashboard Analytics">
                    <div class="gallery-overlay">
                        <h3>Dashboard Analytics</h3>
                        <p>D3.js, Express, PostgreSQL</p>
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="AI Chat Interface">
                    <div class="gallery-overlay">
                        <h3>AI Chat Interface</h3>
                        <p>Python, TensorFlow, Flask</p>
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Portfolio Website">
                    <div class="gallery-overlay">
                        <h3>Portfolio Website</h3>
                        <p>HTML, CSS, JavaScript</p>
                    </div>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Social Media App">
                    <div class="gallery-overlay">
                        <h3>Social Media App</h3>
                        <p>React, GraphQL, Node.js</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    </x-layout> 

    <script>
        
        // Simple script to handle scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            // Handle menu toggle for mobile
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');
            const nav = document.querySelector('nav'); // Get the nav element

            menuToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
            });

            // Close mobile menu when clicking a link
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                });
            });

            // Scroll animation handler
            const animateElements = document.querySelectorAll('.animate-on-scroll');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                    }
                });
            }, {
                threshold: 0.1
            });

            animateElements.forEach(element => {
                observer.observe(element);
            });

            // Animate skill bars on scroll
            const skillBars = document.querySelectorAll('.skill-progress');
            const skillBarObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && entry.target.style.width === '0px') { // Check if it hasn't animated yet
                        const width = entry.target.getAttribute('data-width');
                        entry.target.style.width = width;
                    }
                });
            }, {
                threshold: 0.5
            });

            skillBars.forEach(bar => {
                bar.style.width = '0px'; // Ensure initial state is 0
                skillBarObserver.observe(bar);
            });

            // Typing effect for hero subtitle
            const subtitle = document.querySelector('.hero .subtitle');
            if (subtitle) { // Check if subtitle exists before animating
                const text = subtitle.textContent;
                subtitle.textContent = '';

                let i = 0;
                const typeWriter = () => {
                    if (i < text.length) {
                        subtitle.textContent += text.charAt(i);
                        i++;
                        setTimeout(typeWriter, 50);
                    }
                };
                setTimeout(typeWriter, 1000);
            }

            // Add some interactive particles (simple version)
            const createParticle = () => {
                const particle = document.createElement('div');
                particle.style.position = 'fixed';
                particle.style.width = '4px';
                particle.style.height = '4px';
                particle.style.background = 'rgba(99, 102, 241, 0.6)';
                particle.style.borderRadius = '50%';
                particle.style.pointerEvents = 'none';
                particle.style.zIndex = '999';
                particle.style.left = Math.random() * window.innerWidth + 'px';
                particle.style.top = '100vh';

                document.body.appendChild(particle);

                const animation = particle.animate([
                    { transform: 'translateY(0) rotate(0deg)', opacity: 1 },
                    { transform: `translateY(-100vh) rotate(360deg)`, opacity: 0 }
                ], {
                    duration: Math.random() * 3000 + 2000,
                    easing: 'linear'
                });

                animation.onfinish = () => particle.remove();
            };

            // Create particles occasionally
            setInterval(createParticle, 2000);

            // Dynamic Active Navigation Link on Scroll
            const sections = document.querySelectorAll('section');
            const navLinksElements = document.querySelectorAll('.nav-links a');

            const highlightNavOnScroll = () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - nav.offsetHeight;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });

                navLinksElements.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').includes(current)) {
                        link.classList.add('active');
                    }
                });
            };

            window.addEventListener('scroll', highlightNavOnScroll);
            highlightNavOnScroll(); // Call on load to set initial active section
        });
    
    </script>
</body>
</html>