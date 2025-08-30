<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Resume — [Your Name]</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --muted:#94a3b8;
      --accent:#7c3aed;
      --glass: rgba(255,255,255,0.04);
      --maxw:950px;
      color-scheme: dark;
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin-top:100px;font-family:Inter,system-ui,-apple-system,'Segoe UI',Roboto,'Helvetica Neue',Arial; background:linear-gradient(180deg,var(--bg),#02050a); color:#e6eef8}
    .wrap{max-width:var(--maxw);margin:28px auto;padding:24px}

    /* Resume card */
    .resume{display:grid;grid-template-columns:320px 1fr;gap:22px;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));border-radius:14px;padding:22px;box-shadow:0 6px 30px rgba(2,6,23,0.6)}

    /* Left column */
    .profile{background:var(--card);padding:20px;border-radius:12px;min-height:280px}
    .avatar{width:110px;height:110px;border-radius:12px;object-fit:cover;border:3px solid rgba(255,255,255,0.06);display:block;margin:0 auto}
    h1{margin:14px 0 4px;font-size:22px}
    .title{color:var(--muted);font-weight:600;margin-bottom:8px}
    .contact{margin-top:12px;font-size:14px;color:var(--muted)}
    .contact p{margin:8px 0;display:flex;gap:8px;align-items:center}
    .skill{background:linear-gradient(90deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:8px;border-radius:8px;margin-bottom:8px}
    .skills-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px}

    /* Right column */
    .content{padding:18px;background:linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.01));border-radius:12px}
    .section{margin-bottom:18px}
    .section h3{margin:0 0 8px;font-size:16px;color:#fff}
    .muted{color:var(--muted);font-size:14px}
    .job{padding:10px;border-radius:8px;background:var(--glass);margin-bottom:10px}
    .job h4{margin:0;font-size:15px}
    .job .meta{font-size:13px;color:var(--muted);margin-top:6px}
    .edu{padding:10px;border-radius:8px;background:var(--glass);margin-bottom:10px}

    /* Header actions */
    .actions{display:flex;gap:8px;justify-content:flex-end;align-items:center;margin-bottom:12px}
    .btn{padding:8px 12px;border-radius:9px;background:transparent;border:1px solid rgba(255,255,255,0.06);cursor:pointer;font-weight:600}
    .btn.primary{background:linear-gradient(90deg,var(--accent),#4f46e5);border:none;color:white}
    .btn.ghost{background:transparent}

    /* Print styles */
    @media print{
      body{background:white;color:black}
      .wrap{margin:0;padding:0}
      .resume{box-shadow:none;border-radius:0;grid-template-columns:260px 1fr}
      .actions{display:none}
    }

    /* Responsive */
    @media (max-width:880px){
      .resume{grid-template-columns:1fr;}
      .actions{justify-content:space-between}
    }

    /* small helpers */
    .tag{display:inline-block;padding:6px 8px;border-radius:999px;background:rgba(255,255,255,0.03);font-size:13px;margin-right:6px}
    .progress{height:8px;background:rgba(255,255,255,0.04);border-radius:999px;overflow:hidden}
    .progress > i{display:block;height:100%;background:linear-gradient(90deg,var(--accent),#4f46e5)}

    footer{margin-top:18px;color:var(--muted);font-size:13px;text-align:center}
  </style>
</head>
<body>
    <x-layout>
  <div class="wrap">
    <div class="actions">
      <div style="display:flex;gap:8px;align-items:center">
        <button class="btn ghost" id="toggleTheme" title="Toggle theme">Toggle theme</button>
        <button class="btn" id="copyEmail">Copy email</button>
      </div>
      <div>
        <button class="btn" id="downloadPDF">Save / Print (PDF)</button>
      </div>
    </div>

    <main class="resume" id="resumeRoot">
      <aside class="profile">
        <img class="avatar" src="{{ asset('images/lagrana.jpg')}}" alt="avatar">
        <h1 id="name">Christian Lagrana</h1>
        <div class="title" id="role">Back end Developer</div>
        <div class="contact">
          <p><strong>Email:</strong>&nbsp;<span id="email">lagrana@gmail.com</span></p>
          <p><strong>Phone:</strong>&nbsp;<span id="phone">+63 912 345 6789</span></p>
          <p><strong>Website:</strong>&nbsp;<a id="website" href="#">cellphonerepair.com</a></p>
        </div>
        <hr style="border:none;border-top:1px solid rgba(255,255,255,0.03);margin:14px 0">
        <div class="section">
          <h3>Skills</h3>
          <div class="skills-grid">
            <div class="skill">HTML</div>
            <div class="skill">CSS</div>
            <div class="skill">JavaScript</div>
            <div class="skill">PHP</div>
            <div class="skill">MySQL</div>
            <div class="skill">Git</div>
          </div>
        </div>

        <div class="section">
          <h3>Languages</h3>
          <div class="tag">English</div><div class="tag">Filipino</div>
        </div>

        <div class="section">
          <h3>Interests</h3>
          <p class="muted">UI design, open-source, photography, coffee</p>
        </div>
      </aside>

      <section class="content">
        <div style="display:flex;justify-content:space-between;gap:12px;align-items:start">
          <div>
            <h2 style="margin:0" id="headline">Professional Summary</h2>
            <p class="muted" style="margin-top:8px;max-width:70%" id="summary">Result-driven frontend developer with 3+ years of experience building responsive, accessible web apps. Skilled in HTML, CSS, JavaScript and PHP. Passionate about UX and building performant interfaces.</p>
          </div>
        </div>

        <div class="section">
          <h3>Experience</h3>
          <div class="job">
            <h4>Frontend Developer — Novra Cart</h4>
            <div class="meta">Apr 2024 — Present • Remote</div>
            <p class="muted">Built responsive components, improved page performance by 28%, integrated client-side search and animation-driven UI.</p>
          </div>

          <div class="job">
            <h4>Web Developer — TechFix</h4>
            <div class="meta">Jan 2022 — Mar 2024 • Tagudin, PH</div>
            <p class="muted">Worked on repair booking system, admin dashboards, and payment integrations. Implemented secure file uploads and CRUD admin panels using PHP and MySQL.</p>
          </div>
        </div>

        <div class="section">
          <h3>Education</h3>
          <div class="edu">
            <strong>B.Sc. in Information Technology</strong>
            <div class="meta">ISPSC — 2018 — 2022</div>
            <p class="muted">Relevant coursework: Web Development, Databases, Software Design.</p>
          </div>
        </div>

        <div class="section">
          <h3>Projects</h3>
          <div class="job">
            <h4>Novra Cart (E-commerce)</h4>
            <div class="meta">PHP • MySQL • Bootstrap • JS</div>
            <p class="muted">E-commerce store with category-based listings, cart using localStorage, admin panel, and offline-friendly chatbot integration.</p>
          </div>
          <div class="job">
            <h4>ISPSC Student Tech Support</h4>
            <div class="meta">Python • NLP • PDF Processing</div>
            <p class="muted">cellphone repair and also board </p>
          </div>
        </div>

        <div class="section">
          <h3>Certificates & Awards</h3>
          <p class="muted">Best Capstone Project — ISPSC (2022). Web Dev Certificate (2021).</p>
        </div>

        <footer>Made with ❤️ • Edit this file to customize your details</footer>
      </section>
    </main>
  </div>
  </x-layout>

  <script>
    // Small interactive helpers
    const emailEl = document.getElementById('email');
    const copyBtn = document.getElementById('copyEmail');
    const downloadBtn = document.getElementById('downloadPDF');
    const toggleThemeBtn = document.getElementById('toggleTheme');
    const root = document.documentElement;

    copyBtn.addEventListener('click', ()=>{
      navigator.clipboard?.writeText(emailEl.textContent.trim())
        .then(()=>{copyBtn.textContent='Copied!'; setTimeout(()=>copyBtn.textContent='Copy email',1200)})
        .catch(()=>{copyBtn.textContent='Copy fail'; setTimeout(()=>copyBtn.textContent='Copy email',1200)})
    })

    downloadBtn.addEventListener('click', ()=>{
      // Use the browser print dialog — user can choose "Save as PDF"
      window.print();
    })

    toggleThemeBtn.addEventListener('click', ()=>{
      // Very small theme toggle that inverts colors
      const isDark = getComputedStyle(root).getPropertyValue('--bg').trim().length>0;
      if(root.style.getPropertyValue('--bg')){
        root.style.removeProperty('--bg'); root.style.removeProperty('--card'); root.style.removeProperty('--muted'); root.style.removeProperty('--accent');
        document.body.style.background = '#fff'; document.body.style.color = '#0b1220';
      } else {
        root.style.setProperty('--bg','#0f1724');
        root.style.setProperty('--card','#0b1220');
        root.style.setProperty('--muted','#94a3b8');
        root.style.setProperty('--accent','#7c3aed');
        document.body.style.background = 'linear-gradient(180deg,var(--bg),#02050a)'; document.body.style.color = '#e6eef8';
      }
    })

    // Quick demo: prefill some fields from localStorage (so user can edit in-place)
    function saveSnapshot(){
      const snapshot = {
        name: document.getElementById('name').textContent,
        role: document.getElementById('role').textContent,
        email: document.getElementById('email').textContent,
        phone: document.getElementById('phone').textContent,
        website: document.getElementById('website').textContent,
        summary: document.getElementById('summary').textContent
      };
      localStorage.setItem('resume_snapshot', JSON.stringify(snapshot));
    }
    function loadSnapshot(){
      try{
        const s = JSON.parse(localStorage.getItem('resume_snapshot'));
        if(!s) return;
        document.getElementById('name').textContent = s.name || 'Christian Lagrana';
        document.getElementById('role').textContent = s.role || 'Tech Support';
        document.getElementById('email').textContent = s.email || 'lagrana@gmail.com';
        document.getElementById('phone').textContent = s.phone || '+63 912 345 6789';
        document.getElementById('website').textContent = s.website || 'cellphonerepair.com';
        document.getElementById('summary').textContent = s.summary || '';
      }catch(e){/*ignore*/}
    }
    // Save every 10s
    setInterval(saveSnapshot,10000);
    loadSnapshot();

    // Allow quick editing: double click any text to edit inline
    document.querySelectorAll('#resumeRoot [id]').forEach(el=>{
      el.addEventListener('dblclick', ()=>{
        const prev = el.textContent;
        const input = document.createElement('input');
        input.type='text'; input.value = prev; input.style.width='100%'; input.style.font='inherit'; input.style.padding='6px';
        el.replaceWith(input);
        input.focus();
        input.addEventListener('blur', ()=>{ el.textContent = input.value || prev; input.replaceWith(el); });
        input.addEventListener('keydown', (e)=>{ if(e.key==='Enter') input.blur(); });
      })
    })
  </script>
</body>
</html>
