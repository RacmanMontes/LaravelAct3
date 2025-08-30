<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>sumbad — Resume</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    :root {
      --bg: #0f1221;
      --panel: #121630;
      --muted: #a4acc4;
      --text: #f7f8fc;
      --accent: #6c63ff;
      --accent-2: #4a44c9;
      --chip: rgba(255, 255, 255, 0.06);
      --border: rgba(255, 255, 255, 0.08);
      --shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
    }
    [data-theme="light"] {
      --bg: #f6f7fb;
      --panel: #ffffff;
      --muted: #5d6b8a;
      --text: #0e1320;
      --accent: #4b6bff;
      --accent-2: #324bd4;
      --chip: rgba(0, 0, 0, 0.04);
      --border: rgba(14, 19, 32, 0.08);
      --shadow: 0 10px 24px rgba(14, 19, 32, 0.1);
    }

    html, body { height: 100%; }
    body {
      margin: 0;
      background: radial-gradient(1000px 600px at 10% -10%, rgba(108,99,255,0.12), transparent),
                  radial-gradient(900px 600px at 110% 10%, rgba(74,68,201,0.12), transparent),
                  var(--bg);
      color: var(--text);
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      line-height: 1.6;
    }
    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 24px;
    }

    .toolbar {
      display: flex;
      gap: 12px;
      justify-content: flex-end;
      margin-bottom: 16px;
    }
    .btn {
      border: 1px solid var(--border);
      background: linear-gradient(180deg, var(--panel), color-mix(in oklab, var(--panel), #000 5%));
      color: var(--text);
      padding: 10px 14px;
      border-radius: 12px;
      font-weight: 600;
      cursor: pointer;
      box-shadow: var(--shadow);
      transition: transform .2s ease, background .2s ease, border-color .2s ease;
    }
    .btn:hover { transform: translateY(-2px); }
    .btn-primary {
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      border-color: transparent;
    }

    .resume {
      display: grid;
      grid-template-columns: 320px 1fr;
      gap: 22px;
    }

    .panel {
      background: color-mix(in oklab, var(--panel), #000 4%);
      border: 1px solid var(--border);
      border-radius: 22px;
      box-shadow: var(--shadow);
      overflow: hidden;
    }

    /* Sidebar */
    .sidebar { position: sticky; top: 24px; height: fit-content; }
    .profile {
      display: grid; place-items: center; text-align: center; padding: 28px 22px 18px;
      background: radial-gradient(600px 240px at 50% -10%, rgba(108,99,255,.18), transparent);
    }
    .avatar {
      width: 120px; height: 120px; border-radius: 22px;
      background: url('https://placehold.co/240x240/png') center/cover no-repeat;
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      margin-bottom: 14px;
    }
    .name { font: 700 28px/1.2 "Playfair Display", serif; letter-spacing: .3px; }
    .role { color: var(--muted); font-weight: 600; margin-top: 6px; }

    .section { padding: 20px 22px; border-top: 1px dashed var(--border); }
    .section:first-of-type { border-top: 0; }
    .section h3 { margin: 0 0 12px; font-size: 14px; letter-spacing: .14em; text-transform: uppercase; color: var(--muted); }

    .chip-list { display: flex; flex-wrap: wrap; gap: 8px; }
    .chip {
      padding: 6px 10px; border-radius: 999px; background: var(--chip); border: 1px solid var(--border);
      font-size: 12px; font-weight: 600; color: var(--text);
    }

    .link-list { display: grid; gap: 10px; }
    .link { display: flex; align-items: center; gap: 10px; color: var(--text); text-decoration: none; }
    .link i { width: 20px; text-align: center; color: var(--accent); }
    .link span { border-bottom: 1px dashed transparent; }
    .link:hover span { border-color: var(--accent); }

    .meta { color: var(--muted); font-size: 13px; }

    /* Main */
    .main { padding: 26px; }
    .hero {
      display: grid; grid-template-columns: 1fr auto; gap: 10px; align-items: start; margin-bottom: 6px;
    }
    .headline { font: 700 38px/1.1 "Playfair Display", serif; margin: 0; }
    .tagline { color: var(--muted); margin: 8px 0 0; }
    .hero-badges { display: flex; gap: 8px; }

    .badge {
      display: inline-flex; align-items: center; gap: 8px; padding: 8px 12px; border-radius: 12px; font-weight: 700;
      background: linear-gradient(135deg, color-mix(in oklab, var(--panel), #fff 4%), color-mix(in oklab, var(--panel), #000 8%));
      border: 1px solid var(--border);
    }
    .badge i { color: var(--accent); }

    .split { display: grid; grid-template-columns: 1fr; gap: 18px; }

    .card { border: 1px solid var(--border); border-radius: 18px; padding: 18px 18px; background: var(--panel); }
    .card h4 { margin: 0 0 6px; font-size: 18px; }

    /* Timeline */
    .timeline { position: relative; margin-left: 8px; }
    .timeline::before { content: ""; position: absolute; left: 12px; top: 0; bottom: 0; width: 2px; background: linear-gradient(var(--accent), transparent); opacity: .45; }
    .item { position: relative; padding-left: 36px; margin-bottom: 16px; }
    .item::before { content: ""; position: absolute; left: 6px; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: var(--accent); box-shadow: 0 0 0 4px color-mix(in oklab, var(--accent), #000 80%); }
    .item h5 { margin: 0 0 4px; font-size: 16px; }
    .item .meta { margin-bottom: 8px; }
    .item ul { margin: 8px 0 0 16px; }

    .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 14px; }
    .project { border: 1px solid var(--border); border-radius: 16px; padding: 14px; background: linear-gradient(180deg, var(--panel), color-mix(in oklab, var(--panel), #000 8%)); }
    .project h5 { margin: 0 0 8px; font-size: 16px; }

    .section-title { display:flex; align-items:center; justify-content:space-between; gap: 12px; margin: 18px 0 10px; }
    .section-title h3 { margin:0; color: var(--muted); letter-spacing: .14em; text-transform: uppercase; font-size: 13px; }
    .section-actions { display:flex; gap:8px; }
    .ghost-btn { background: transparent; border: 1px dashed var(--border); color: var(--muted); padding:6px 10px; border-radius: 10px; cursor: pointer; }

    /* Print */
    @media print {
      body { background: #fff; }
      .toolbar { display: none !important; }
      .resume { grid-template-columns: 300px 1fr; gap: 16px; }
      .panel, .card, .project { box-shadow: none !important; }
      a { color: #000 !important; text-decoration: none; }
    }

    /* Responsive */
    @media (max-width: 960px) {
      .resume { grid-template-columns: 1fr; }
      .sidebar { position: static; }
      .hero { grid-template-columns: 1fr; }
      .headline { font-size: 32px; }
    }
  </style>
</head>
<body>
    <x-layout>
    
  <div class="container" id="top">
    <div class="toolbar no-print">
      <button class="btn" id="themeToggle"><i class="fa-solid fa-circle-half-stroke"></i> Toggle Theme</button>
      <button class="btn" onclick="window.print()"><i class="fa-solid fa-file-arrow-down"></i> Print / Save PDF</button>
      <a class="btn btn-primary" href="#contact"><i class="fa-solid fa-paper-plane"></i> Contact</a>
    </div>

    <div class="resume">
      <!-- Sidebar -->
      <aside class="panel sidebar">
        <div class="profile">
          <img src="{{ asset('images/sumbad.jpg') }}" class="avatar"/>
          <div class="name">Lhenard Sumbad</div>
          <div class="role">Front End Web Developer</div>
        </div>

        <div class="section" id="contact">
          <h3>Contact</h3>
          <div class="link-list">
            <a class="link" href="mailto:sumbadlhenard1@gmail.com"><i class="fa-solid fa-envelope"></i><span>lhenardsumbad@example.com</span></a>
            <a class="link" href="tel:+639123456789"><i class="fa-solid fa-phone"></i><span>+63 9123456789</span></a>
            <a class="link" href="https://github.com/lhenard Sumbad"><i class="fa-brands fa-github"></i><span>github.com/lhenard Sumbad</span></a>
            <a class="link" href="https://www.youtube.com/@sumbad8352"><i class="fa-brands fa-youtube"></i><span>youtube.com/lhenard8352</span></a>
            <a class="link" href="https://www.tiktok.com/@lhenardsumbad"><i class="fa-brands fa-tiktok"></i><span>tiktok.com/@lhenard</span></a>
          </div>
        </div>

        <div class="section">
          <h3>Skills</h3>
          <div class="chip-list">
            <span class="chip">HTML5</span>
            <span class="chip">CSS3</span>
            <span class="chip">JavaScript</span>
            <span class="chip">PHP (Laravel)</span>
            <span class="chip">MySQL</span>
            <span class="chip">Bootstrap</span>
            <span class="chip">Tailwind</span>
            <span class="chip">Git & GitHub</span>
            <span class="chip">Responsive Design</span>
          </div>
        </div>

        <div class="section">
          <h3>Tools</h3>
          <div class="chip-list">
            <span class="chip">VS Code</span>
            <span class="chip">XAMPP</span>
            <span class="chip">Figma</span>
            <span class="chip">Photoshop</span>
            <span class="chip">Premiere Pro</span>
          </div>
        </div>

        <div class="section">
          <h3>Interests</h3>
          <div class="chip-list">
            <span class="chip">Coding</span>
            <span class="chip">Graphic Design</span>
            <span class="chip">Video Editing</span>
            <span class="chip">Photo Editing</span>
          </div>
        </div>
      </aside>

      <!-- Main -->
      <main class="panel main">
        <section class="hero">
          <div>
            <h1 class="headline">Frond End Developer & UI Enthusiast</h1>
            <p class="tagline">I craft performant, accessible web apps with clean UI and maintainable code. Passionate about PHP/Laravel backends, modern front‑end, and delightful details.</p>
          </div>
          <div class="hero-badges">
            <span class="badge"><i class="fa-solid fa-location-dot"></i> Philippines (UTC+8)</span>
          </div>
        </section>

        <div class="section-title">
          <h3>Experience</h3>
          <div class="section-actions">
            <button class="ghost-btn" data-toggle="exp">Collapse</button>
          </div>
        </div>
        <section id="experience" class="card">
          <div class="timeline">
            <div class="item">
              <h5>Freelance Web Developer — <span class="meta">2024 – Present</span></h5>
              <div class="meta">PHP (Laravel), MySQL, Bootstrap/Tailwind, XAMPP</div>
              <ul>
                <li>Built responsive e‑commerce front‑ends and admin dashboards with PHP/MySQL.</li>
                <li>Implemented user auth, product CRUD, and payment UI (GCash/Visa/PayMaya mock flows).</li>
                <li>Improved Lighthouse performance scores to 90+ via image optimization and code splitting.</li>
              </ul>
            </div>
            <div class="item">
              <h5>Student Projects — <span class="meta">2023 – 2024</span></h5>
              <div class="meta">JavaScript, PHP, MySQL, UI/UX</div>
              <ul>
                <li>Developed a Cellphone Repair Management System with booking, status tracking, and role‑based access.</li>
                <li>Created an ISPSC Student Smart Reviewer prototype with PDF parsing and quiz generation.</li>
              </ul>
            </div>
          </div>
        </section>

        <div class="section-title">
          <h3>Featured Projects</h3>
          <div class="section-actions">
            <button class="ghost-btn" data-toggle="proj">Collapse</button>
          </div>
        </div>
        <section id="projects" class="grid">
          <article class="project">
            <h5>Novra Cart — Clothing E‑commerce</h5>
            <p class="meta">PHP • MySQL • Bootstrap • AI features (chatbot & recommendations)</p>
            <ul>
              <li>Designed modern, animated storefront with category filtering and search.</li>
              <li>Admin panel for products, users, orders; image upload & validation.</li>
            </ul>
          </article>
          <article class="project">
            <h5>Cellphone Repair System</h5>
            <p class="meta">PHP • MySQL • Role‑based dashboard • Status tracking</p>
            <ul>
              <li>Customer booking, technician assignment, and stepwise repair statuses.</li>
              <li>Responsive UI with glassmorphism theme and accessibility in mind.</li>
            </ul>
          </article>
          <article class="project">
            <h5>ISPSC Smart Reviewer</h5>
            <p class="meta">JS • PDF parsing • Question generation</p>
            <ul>
              <li>Uploads lesson PDFs and generates quizzes aligned to content.</li>
              <li>Offline‑friendly prototype for fast study sessions.</li>
            </ul>
          </article>
        </section>

        <div class="section-title">
          <h3>Education</h3>
        </div>
        <section id="education" class="card">
          <div class="item" style="margin:0">
            <h5>BS in Information Technology (in progress)</h5>
            <div class="meta">ISPSC — 2022 – Present</div>
            <ul>
              <li>Focus on web development, databases, and human‑computer interaction.</li>
            </ul>
          </div>
        </section>

        <div class="section-title">
          <h3>Certifications & Awards</h3>
        </div>
        <section id="certs" class="grid">
          <div class="card">
            <h4>Responsive Web Design</h4>
            <p class="meta">freeCodeCamp — 2024</p>
          </div>
          <div class="card">
            <h4>JavaScript Algorithms</h4>
            <p class="meta">freeCodeCamp — 2024</p>
          </div>
          <div class="card">
            <h4>Top Project Showcase</h4>
            <p class="meta">Campus Hackathon — 2023</p>
          </div>
        </section>

        <div class="section-title">
          <h3>References</h3>
        </div>
        <section id="references" class="card">
          <p class="meta">Available upon request.</p>
        </section>
      </main>
    </div>
  </div>
</x-layout>  

  <script>
    const root = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const preferred = localStorage.getItem('resume-theme') || (matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
    if (preferred === 'light') document.body.setAttribute('data-theme', 'light');

    themeToggle.addEventListener('click', () => {
      const isLight = document.body.getAttribute('data-theme') === 'light';
      document.body.toggleAttribute('data-theme');
      if (isLight) localStorage.setItem('resume-theme', 'dark');
      else localStorage.setItem('resume-theme', 'light');
    });

    // Collapsible sections
    const map = { exp: document.getElementById('experience'), proj: document.getElementById('projects') };
    document.querySelectorAll('[data-toggle]').forEach(btn => {
      btn.addEventListener('click', () => {
        const key = btn.getAttribute('data-toggle');
        const el = map[key];
        const isHidden = el.style.display === 'none';
        el.style.display = isHidden ? '' : 'none';
        btn.textContent = isHidden ? 'Collapse' : 'Expand';
      });
    });
  </script>
</body>
</html>
