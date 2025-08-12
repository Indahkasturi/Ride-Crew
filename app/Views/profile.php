<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #f8f9fb;
        margin: 0;
        color: #222;
      }
      .section-inner {
        max-width: 820px;
        margin: 0 auto;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        padding: 32px 20px 20px 20px;
        margin-bottom: 28px;
      }
      .section-header {
        text-align: left;
        margin-bottom: 22px;
      }
      .section-header h2 {
        font-size: 1.7rem;
        margin: 0 0 4px 0;
        font-weight: 700;
        color: #1a5a9a;
      }
      .section-header small {
        font-size: 0.98rem;
        color: #888;
        font-weight: 500;
      }
      .two-col {
        display: flex;
        gap: 22px;
        flex-wrap: wrap;
      }
      .two-col > div {
        flex: 1 1 320px;
        font-size: 1.01rem;
        color: #444;
        line-height: 1.7;
      }
      .card-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: row;
        gap: 14px;
        justify-content: center;
      }
      .card {
        background: #f6f8fa;
        border-radius: 8px;
        box-shadow: 0 1px 4px rgba(0,0,0,0.04);
        padding: 14px 16px;
        min-width: 180px;
        max-width: 220px;
        flex: 1 1 180px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        transition: box-shadow 0.2s;
      }
      .card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.09);
      }
      .card h3 {
        margin: 0 0 7px 0;
        font-size: 1rem;
        color: #CF7500;
        font-weight: 600;
      }
      .card p {
        margin: 0;
        color: #333;
        font-size: 0.95rem;
      }
      .contact-bar {
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 12px;
        margin: 0 auto 18px auto;
        padding: 0;
      }
      .contact-bar li {
        display: flex;
        align-items: center;
        background: none;
        border-radius: 50%;
        box-shadow: none;
        padding: 0;
        min-width: 0;
        position: relative;
      }
      .contact-icon {
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #eee;
        box-shadow: 0 1px 4px rgba(0,0,0,0.07);
        transition: background 0.2s;
        cursor: pointer;
        position: relative;
      }
      .contact-icon:hover {
        background: #e0e7ef;
      }
      .contact-bar a {
        display: block;
        text-align: center;
        font-size: 0.93rem;
        color: #CF7500;
        margin-top: 2px;
        font-weight: 500;
        text-decoration: none;
        transition: color 0.2s;
      }
      .contact-bar a:hover {
        color: #CF7500;
        text-decoration: underline;
      }
      .contact-bar li:hover .contact-tooltip {
        opacity: 1;
        pointer-events: auto;
      }
      .contact-tooltip {
        position: absolute;
        bottom: -38px;
        left: 50%;
        transform: translateX(-50%);
        background: #222;
        color: #fff;
        padding: 5px 12px;
        border-radius: 6px;
        font-size: 0.92rem;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s;
        z-index: 2;
      }
      @media (max-width: 700px) {
        .section-inner {
          padding: 10px 2px;
        }
        .two-col {
          flex-direction: column;
          gap: 10px;
        }
        .card-list {
          flex-direction: column;
          gap: 8px;
        }
        .contact-bar {
          gap: 8px;
        }
      }
    </style>
</head>
<body>
    <section id="profile">
      <div class="section-inner">
        <div class="section-header">
          <h2 style="color: #CF7500;">Profil</h2>
          <small>Pengalaman & Kelebihan</small>
        </div>
        <div class="two-col">
          <div>
            <p>Dengan pengalaman lebih dari satu dekade secara kolektif, Ride Crew terus memberikan layanan luar biasa dan solusi inovatif bagi komunitas pengendara motor.</p>
            <p>Keahlian kami mencakup manajemen acara, pelatihan keselamatan, dan kurasi produk premium, sehingga anggota mendapatkan nilai dan dukungan yang tiada tanding.</p>
          </div>
          <ul class="card-list">
            <li class="card">
              <h3>Rekam Jejak Terbukti</h3>
              <p>Berhasil menyelenggarakan lebih dari 50 acara eksklusif yang memperkuat komunitas yang solid dan aktif.</p>
            </li>
            <li class="card">
              <h3>Tim Ahli</h3>
              <p>Dipimpin oleh para profesional berpengalaman dengan pengetahuan mendalam di bidang logistik, standar keselamatan, dan pembinaan pengendara.</p>
            </li>
            <li class="card">
              <h3>Fokus Pelanggan</h3>
              <p>Berkomitmen memberikan pengalaman personal yang mengutamakan kepuasan anggota dan peningkatan berkelanjutan.</p>
            </li>
          </ul>
        </div>
      </div>
      <ul class="contact-bar">
        <li>
          <a href="https://instagram.com/ridecrew" target="_blank" rel="noopener noreferrer">
            <span class="contact-icon" style="background:#E1306C;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"/></svg>
            </span>
            <span class="contact-tooltip">Instagram: @ridecrew</span>
          </a>
        </li>
        <li>
          <a href="https://facebook.com/ridecrew" target="_blank" rel="noopener noreferrer">
            <span class="contact-icon" style="background:#1877F3;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h6v-7h-2v-3h2v-2c0-2.21 1.79-4 4-4h2v3h-2c-.55 0-1 .45-1 1v2h3l-.5 3H17v7h1a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/></svg>
            </span>
            <span class="contact-tooltip">Facebook: Ride Crew</span>
          </a>
        </li>
        <li>
          <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer">
            <span class="contact-icon" style="background:#25D366;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.52 3.48A10 10 0 1 0 3.48 20.52a10 10 0 0 0 17.04-17.04z"/><path d="M17 9.5a4.5 4.5 0 0 1-7.5 3.5l-2.5 1 1-2.5A4.5 4.5 0 0 1 17 9.5z"/></svg>
            </span>
            <span class="contact-tooltip">WhatsApp: +62 812-3456-7890</span>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/ridecrew" target="_blank" rel="noopener noreferrer">
            <span class="contact-icon" style="background:#1DA1F2;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.43.36a9.09 9.09 0 0 1-2.88 1.1A4.52 4.52 0 0 0 16.11 0c-2.5 0-4.52 2.02-4.52 4.52 0 .35.04.7.11 1.03A12.94 12.94 0 0 1 3.15.67a4.52 4.52 0 0 0 1.4 6.04A4.48 4.48 0 0 1 2.8 6.1v.06c0 2.18 1.55 4 3.8 4.42a4.52 4.52 0 0 1-2.04.08c.58 1.81 2.26 3.13 4.25 3.17A9.06 9.06 0 0 1 0 19.54a12.8 12.8 0 0 0 6.94 2.03c8.33 0 12.89-6.9 12.89-12.89 0-.2 0-.39-.01-.58A9.22 9.22 0 0 0 23 3z"/></svg>
            </span>
            <span class="contact-tooltip">Twitter: @ridecrew</span>
          </a>
        </li>
      </ul>
    </section>
</body>
</html>