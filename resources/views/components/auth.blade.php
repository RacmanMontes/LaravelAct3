<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cellphone Repair</title>
    <link rel="icon" href="path/to/your/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
:root {
    --primary-color: #6c63ff;
    --secondary-color: #4a44c9;
    --text-light: #ffffff;
    --glass-border: rgba(255, 255, 255, 0.1);
    --bg-dark: #0f0f23;
}
html, body {
    margin: 0;
    padding: 0;
    background: var(--bg-dark);
    width: 100%;
    height: 100%;
    box-sizing: border-box;
}
/* Navigation */
nav {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background: rgba(15, 15, 35, 0.1);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid var(--glass-border);
    transition: all 0.3s ease;
    height: 60px; /* Fixed nav height */
}

nav.scrolled {
    background: rgba(15, 15, 35, 0.9);
}

.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 1rem;
    max-width: 1200px;
    margin: 0 auto;
    height: 100%; /* Fill nav height */
}

.nav-links {
    align-items: center;
    display: flex;
    list-style: none;
    gap: 2rem;
    flex-wrap: nowrap; /* Prevent wrapping */
}

.nav-links a {
  align-items: center;
    color: var(--text-light);
    text-decoration: none;
    transition: color 0.3s ease;
    position: relative;
    font-weight: 700;
    white-space: nowrap; /* Prevent link text wrap */
}

.nav-links li a {
    display: flex;
    align-items: center;
    justify-content: center; 
    height: 60px;     /* force match navbar height */
    line-height: normal !important; /* ignore inherited line-height */
}


.nav-links a::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background: var(--primary-color);
    transition: width 0.3s ease;
}

.nav-links a:hover::after,
.nav-links a.active::after {
    width: 100%;
}

.nav-links a.active {
    color: var(--primary-color);
    font-weight: 700;
}

.menu-toggle {
    display: none;
    background: none;
    border: none;
    color: var(--text-light);
    font-size: 1.5rem;
    cursor: pointer;
}

/* Hero Section */
.hero h1 {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    font-family:  serif;
}

.hero p {
    font-size: 1.2rem;
    max-width: 600px;
    margin-bottom: 2rem;
}

.btn {
    display: inline-block;
    padding: 0.8rem 2rem;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* Responsive Design */
@media (max-width: 768px) {
    .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 70px; /* Matches fixed nav height */
        left: 0;
        width: 100%;
        background: rgba(15, 15, 35, 0.95);
        backdrop-filter: blur(10px);
        padding: 1rem 0;
        text-align: center;
    }

    .nav-links.active {
        display: flex;
    }

    .menu-toggle {
        display: block;
    }

    .hero h1 {
        font-size: 2.5rem;
    }
}


       footer {
  background: linear-gradient(135deg, #0f0f23, #1a1a40);
  color: #aaa;
  padding: 3rem 1rem 1rem;
  margin-top: 3rem;
  border-top: 1px solid var(--glass-border);
}

.footer-columns {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 40px;
  max-width: 1200px;
  margin: auto;
}

.footer-col h3 {
  color: var(--text-light);
  margin-bottom: 1rem;
  font-size: 1.1rem;
  font-weight: 600;
  border-left: 3px solid var(--primary-color);
  padding-left: 8px;
}

.footer-col p {
  color: #bbb;
  line-height: 1.7;
  font-size: 0.95rem;
}

.footer-col ul {
  list-style: none;
  padding: 0;
}

.footer-col ul li {
  margin-bottom: 10px;
}

.footer-col ul li a {
  color: #bbb;
  text-decoration: none;
  transition: color 0.3s ease, padding-left 0.3s ease;
  display: inline-block;
}

.footer-col ul li a:hover {
  color: var(--primary-color);
  padding-left: 5px;
}

.social-links {
  display: flex;
  gap: 12px;
  margin-top: 10px;
}

.social-links a {
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid var(--glass-border);
  border-radius: 50%;
  color: var(--text-light);
  font-size: 1rem;
  transition: all 0.3s ease;
}

.social-links a:hover {
  background: var(--primary-color);
  color: #fff;
  transform: translateY(-3px);
}

.footer-bottom {
  text-align: center;
  margin-top: 3rem;
  padding-top: 1.5rem;
  font-size: 0.85rem;
  color: #777;
  border-top: 1px solid var(--glass-border);
}


    </style>
</head>
<body>
    <header>
    <nav id="navbar">
        <div class="nav-container">
            <div class="logo">
               
                    <i class="fas fa-mobile-alt" style="font-size: 2rem; color: var(--primary-color); margin-right: 10px;"></i>
                    <span style="font-weight: 700; font-size: 1.7rem; color: var(--text-light);">Cellphone Repair</span>
                
            </div>
            <ul class="nav-links">
                <li><a href="{{route('home')}}"></a></li>

                <li><a href="{{route('lagrana')}}"></a></li>
               
                <li><a href="{{route('manzano')}}"></a></li>
                <li><a href="{{route('sumbad')}}"></a></li>
                <li><a href="{{route('montes')}}"></a></li>
            </ul>
            <button class="menu-toggle">☰</button>
        </div>
    </nav>
</header>


    <main>
        {{ $slot }}
    </main>

  <footer>
  <div class="footer-columns">
    <div class="footer-col">
      <h3>About Us</h3>
      <p>
        We specialize in professional cellphone repair services, ensuring
        quality and customer satisfaction.
      </p>
    </div>

    <div class="footer-col">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('lagrana')}}">Lagrana</a></li>
        <li><a href="{{route('manzano')}}">Manzano</a></li>
        <li><a href="{{route('sumbad')}}">Sumbad</a></li>
        <li><a href="{{ route('montes') }}">Montes</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h3>Contact</h3>
      <div class="social-links">
        <a href="mailto:racmanmontes@example.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
        <a href="https://www.facebook.com/Montes.Racman.N" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://github.com/RacmanMontes" aria-label="GitHub"><i class="fab fa-github"></i></a>
        <a href="https://www.youtube.com/@racmanmontes8352" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="https://www.tiktok.com/@racmanmontes" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 Cellphone Repair. All rights reserved.</p>
  </div>
</footer>



    <script>
        // JavaScript for navbar transparency on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>