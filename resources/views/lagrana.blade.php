<!doctype html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Resume — Christian Lagrana</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #0f1724;
      --card: #0b1220;
      --muted: #94a3b8;
      --accent: #7c3aed;
      --glass: rgba(255,255,255,0.04);
      --maxw: 950px;
      color-scheme: dark;
    }
    [data-theme="light"] {
      --bg: #ffffff;
      --card: #f2f2f2;
      --muted: #444;
      --accent: #4f46e5;
      color-scheme: light;
    }

    * { box-sizing: border-box; }
    html, body {
      height: 100%;
      margin-top:100px ;
      font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      background: linear-gradient(180deg, var(--bg), #02050a);
      color: #e6eef8;
    }
    [data-theme="light"] body {
      background: #fff;
      color: #0b1220;
    }

    .wrap {
  max-width: var(--maxw);
  margin: 50px auto;   /* top & bottom = 50px, left & right = auto */
  padding: 24px;
}

    .resume {
      display: grid;
      grid-template-columns: 320px 1fr;
      gap: 22px;
      background: var(--glass);
      border-radius: 14px;
      padding: 22px;
      box-shadow: 0 6px 30px rgba(2,6,23,0.6);
    }

    /* Left column */
    .profile { background: var(--card); padding: 20px; border-radius: 12px; }
    .avatar { width: 110px; height: 110px; border-radius: 12px; object-fit: cover; border: 3px solid rgba(255,255,255,0.06); display: block; margin: 0 auto; }
    h1 { margin: 14px 0 4px; font-size: 22px; }
    .title { color: var(--muted); font-weight: 600; margin-bottom: 8px; }
    .contact { margin-top: 12px; font-size: 14px; color: var(--muted); }
    .contact p { margin: 8px 0; display: flex; gap: 8px; align-items: center; }
    .skill { background: var(--glass); padding: 8px; border-radius: 8px; margin-bottom: 8px; }
    .skills-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }

    /* Right column */
    .content { padding: 18px; background: var(--glass); border-radius: 12px; }
    .section { margin-bottom: 18px; }
    .section h3 { margin: 0 0 8px; font-size: 16px; color: #fff; }
    .muted { color: var(--muted); font-size: 14px; }
    .job, .edu { padding: 10px; border-radius: 8px; background: var(--glass); margin-bottom: 10px; }
    .job h4 { margin: 0; font-size: 15px; }
    .job .meta, .edu .meta { font-size: 13px; color: var(--muted); margin-top: 6px; }

    /* Header actions */
    .actions { display: flex; gap: 8px; justify-content: flex-end; margin-bottom: 12px; }
    .btn { padding: 8px 12px; border-radius: 9px; background: transparent; border: 1px solid rgba(255,255,255,0.06); cursor: pointer; font-weight: 600; }
    .btn.primary { background: linear-gradient(90deg,var(--accent),#4f46e5); border: none; color: white; }

    @media print {
      body { background: white; color: black; }
      .wrap { margin: 0; padding: 0; }
      .resume { box-shadow: none; border-radius: 0; grid-template-columns: 260px 1fr; }
      .actions { display: none; }
    }
    @media (max-width:880px) {
      .resume { grid-template-columns: 1fr; }
      .actions { justify-content: space-between; }
    }

    .tag { display: inline-block; padding: 6px 8px; border-radius: 999px; background: rgba(255,255,255,0.03); font-size: 13px; margin-right: 6px; }
    footer { margin-top: 18px; color: var(--muted); font-size: 13px; text-align: center; }
  </style>
</head>
<body>

    <x-layout>
  <div class="wrap">
    <div class="actions">
      <button class="btn" id="toggleTheme" aria-label="Toggle theme">Toggle theme</button>
      <button class="btn" id="copyEmail" aria-label="Copy email">Copy email</button>
      <button class="btn primary" id="downloadPDF" aria-label="Download PDF">Save / Print (PDF)</button>
    </div>

    <main class="resume" id="resumeRoot">
      <aside class="profile">
        <img class="avatar" src="images/lagrana.jpg" alt="Christian Lagrana">
        <h1 id="name">Christian Lagrana</h1>
        <div class="title" id="role">Backend Developer</div>
        <div class="contact">
          <p><strong>Email:</strong> <span id="email">lagrana@gmail.com</span></p>
          <p><strong>Phone:</strong> <span id="phone">+63 912 345 6789</span></p>
          <p><strong>Website:</strong> <a id="website" href="https://cellphonerepair.com" target="_blank">cellphonerepair.com</a></p>
        </div>
        <hr>
        <div class="section">
          <h3>Skills</h3>
          <div class="skills-grid">
            <div class="skill">HTML</div><div class="skill">CSS</div><div class="skill">JavaScript</div><div class="skill">PHP</div><div class="skill">MySQL</div><div class="skill">Git</div>
          </div>
        </div>
      </aside>

      <section class="content">
        <div class="section">
          <h3>Professional Summary</h3>
          <p class="muted" id="summary">Result-driven developer with 3+ years of experience building responsive web apps. Skilled in PHP, MySQL, HTML, CSS, JavaScript.</p>
        </div>

        <div class="section">
          <h3>Experience</h3>
          <div class="job"><h4>Frontend Developer — Novra Cart</h4><div class="meta">Apr 2024 — Present</div><p class="muted">Improved performance by 28%, integrated search & animations.</p></div>
          <div class="job"><h4>Web Developer — TechFix</h4><div class="meta">Jan 2022 — Mar 2024</div><p class="muted">Built booking system, dashboards, and payment integrations.</p></div>
        </div>

        <div class="section">
          <h3>Education</h3>
          <div class="edu"><strong>B.Sc. in IT</strong><div class="meta">ISPSC — 2018–2022</div><p class="muted">Relevant coursework: Web Development, Databases, Software Design.</p></div>
        </div>

        <footer>Made with ❤️ • Edit this file to customize</footer>
      </section>
    </main>
  </div>

  <script>
    const emailEl = document.getElementById('email');
    const copyBtn = document.getElementById('copyEmail');
    const downloadBtn = document.getElementById('downloadPDF');
    const toggleThemeBtn = document.getElementById('toggleTheme');
    const htmlEl = document.documentElement;

    copyBtn.addEventListener('click', ()=>{
      navigator.clipboard.writeText(emailEl.textContent.trim())
        .then(()=> copyBtn.textContent='Copied!')
        .catch(()=> copyBtn.textContent='Failed');
      setTimeout(()=> copyBtn.textContent='Copy email',1200);
    });

    downloadBtn.addEventListener('click', ()=> window.print());
    toggleThemeBtn.addEventListener('click', ()=> {
      htmlEl.dataset.theme = htmlEl.dataset.theme === "light" ? "dark" : "light";
    });
  </script>
  </x-layout>
</body>
</html>
