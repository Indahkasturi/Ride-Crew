
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="contact" style="display: flex; flex-direction: column; align-items: center; justify-content: flex-start; min-height: 100vh; padding-top: 80px;">
  <div class="contact-card">
      <div class="section-header">
        <h2>Kontak</h2>
        <small>Hubungi Kami</small>
      </div>
      <div class="contact-desc">
        Untuk pertanyaan seputar kemitraan, keanggotaan, atau layanan kami, silakan hubungi kami melalui media sosial berikut:
      </div>
      <ul class="contact-list">
        <li>
          <span class="contact-icon" style="background:#E1306C;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"/></svg>
          </span>
          <strong>Instagram:</strong> <a href="https://instagram.com/ridecrew" target="_blank" rel="noopener noreferrer">@ridecrew</a>
        </li>
        <li>
          <span class="contact-icon" style="background:#1877F3;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h6v-7h-2v-3h2v-2c0-2.21 1.79-4 4-4h2v3h-2c-.55 0-1 .45-1 1v2h3l-.5 3H17v7h1a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/></svg>
          </span>
          <strong>Facebook:</strong> <a href="https://facebook.com/ridecrew" target="_blank" rel="noopener noreferrer">Ride Crew</a>
        </li>
        <li>
          <span class="contact-icon" style="background:#25D366;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.52 3.48A10 10 0 1 0 3.48 20.52a10 10 0 0 0 17.04-17.04z"/><path d="M17 9.5a4.5 4.5 0 0 1-7.5 3.5l-2.5 1 1-2.5A4.5 4.5 0 0 1 17 9.5z"/></svg>
          </span>
          <strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer">+62 812-3456-7890</a>
        </li>
        <li>
          <span class="contact-icon" style="background:#1DA1F2;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.43.36a9.09 9.09 0 0 1-2.88 1.1A4.52 4.52 0 0 0 16.11 0c-2.5 0-4.52 2.02-4.52 4.52 0 .35.04.7.11 1.03A12.94 12.94 0 0 1 3.15.67a4.52 4.52 0 0 0 1.4 6.04A4.48 4.48 0 0 1 2.8 6.1v.06c0 2.18 1.55 4 3.8 4.42a4.52 4.52 0 0 1-2.04.08c.58 1.81 2.26 3.13 4.25 3.17A9.06 9.06 0 0 1 0 19.54a12.8 12.8 0 0 0 6.94 2.03c8.33 0 12.89-6.9 12.89-12.89 0-.2 0-.39-.01-.58A9.22 9.22 0 0 0 23 3z"/></svg>
          </span>
          <strong>Twitter:</strong> <a href="https://twitter.com/ridecrew" target="_blank" rel="noopener noreferrer">@ridecrew</a>
        </li>
      </ul>
      <div class="contact-note">
        Kami siap merespon pesan Anda secepat mungkin melalui platform tersebut.
      </div>
  </div>
</section>
 
</body>
</html>

<style>
  :root {
    --light:#F4F4F4;
    --amber:#F0A500;
    --amber-deep:#CF7500;
    --ink:#1A1C20;
  }

  .contact-card {
    background: #fff;
    align-items: center;
    border-radius:18px;
    box-shadow:0 8px 32px -8px rgba(0,0,0,.18);
    max-width:500px;
    width:100%;
    padding:44px 36px 36px;
    border-top:7px solid var(--amber-deep);
    border-bottom:3px solid var(--amber);
    position:relative;
    animation: fadeIn .7s;
    transition:box-shadow .2s;
  }
  .contact-card:hover {
    box-shadow:0 12px 10px -8px rgba(0,0,0,.22);
  }
  @keyframes fadeIn { from { opacity:0; transform:translateY(30px);} to { opacity:1; transform:translateY(0);} }
  .section-header { text-align:center; margin-bottom:32px; }
  .section-header h2 { margin:0; font-size:2.2rem; font-weight:800; color:var(--ink); letter-spacing:1px; }
  .section-header small { color:var(--amber-deep); font-weight:600; letter-spacing:1px; }
  .contact-desc { margin-bottom:22px; color:var(--ink); font-size:1.09rem; }
  .contact-list { list-style:none; padding:0; margin:0 0 22px; }
  .contact-list li { display:flex; align-items:center; gap:14px; margin-bottom:18px; font-size:1.08rem; }
  .contact-list a { color:var(--amber-deep); font-weight:600; transition:.2s; }
  .contact-list a:hover { color:var(--amber); text-decoration:underline; }
  .contact-icon {
    width:38px; height:38px; border-radius:50%; display:flex; align-items:center; justify-content:center;
    background:var(--amber); color:#fff; font-size:1.2rem; box-shadow:0 2px 8px -2px var(--amber-deep);
    flex-shrink:0;
  }
  .contact-note { text-align:center; color:var(--amber-deep); font-size:1rem; margin-top:16px; font-style:italic; }
  
</style>
