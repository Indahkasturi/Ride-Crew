<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #f7f7fa;
        margin: 0;
        color: #222;
      }
      .section-inner {
        max-width: 900px;
        margin: 0 auto;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 12px rgba(26,90,154,0.07);
        padding: 36px 24px 24px 24px;
        margin-bottom: 32px;
      }
      .section-header {
        text-align: center;
        margin-bottom: 28px;
      }
      .section-header h2 {
        font-size: 2rem;
        margin: 0 0 6px 0;
        font-weight: 700;
        color: #1a5a9a;
      }
      .section-header small {
        font-size: 1rem;
        color: #888;
        font-weight: 500;
      }
      .clients {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
        justify-content: center;
        margin-top: 10px;
      }
      .client {
        background: #f6f8fa;
        border-radius: 10px;
        box-shadow: 0 1px 6px rgba(0,0,0,0.05);
        padding: 18px 16px 12px 16px;
        width: 160px;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: box-shadow 0.2s;
      }
      .client:hover {
        box-shadow: 0 4px 16px rgba(0,0,0,0.10);
      }
      .client img {
        width: 80px;
        height: 80px;
        object-fit: contain;
        border-radius: 8px;
        background: #fff;
        margin-bottom: 10px;
        box-shadow: 0 1px 4px rgba(0,0,0,0.06);
      }
      .client-name {
        font-size: 1rem;
        color: #1a5a9a;
        font-weight: 600;
        text-align: center;
        letter-spacing: 0.2px;
      }
      @media (max-width: 700px) {
        .section-inner {
          padding: 12px 2px;
        }
        .clients {
          gap: 12px;
        }
        .client {
          width: 100%;
          max-width: 320px;
        }
        .client img {
          width: 100px;
          height: 100px;
        }
      }
    </style>
</head>
<body>
    	 <section id="clients" class="strip-dark">
    <div class="section-inner">
      <div class="section-header">
        <h2 style="color: #F0A500;">Clients</h2>
        <small>Trusted Relations</small>
      </div>
      <div class="clients">
        <div class="client">
          <img src="https://www.adidas.co.id/media/logo/adidas-logo.png" />
          <div class="client-name">Adidas</div>
        </div>
        <div class="client">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHVgSISwM9A9WhH7aV2RKjSOJT7ML-aB6yPA&s" alt="Engineering Lab Logo" />
          <div class="client-name">BRI</div>
        </div>
        <div class="client">
          <img src="https://images.samsung.com/is/image/samsung/assets/id/about-us/brand/logo/mo/360_197_1.png?$720_N_PNG$" alt="Logistics Co Logo" />
          <div class="client-name">Samsung</div>
        </div>
        <div class="client">
          <img src="https://logos-world.net/wp-content/uploads/2020/10/Yamaha-Symbol.png" alt="Insurance Ally Logo" />
          <div class="client-name">Yamana Motor</div>
        </div>
        <div class="client">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8zB5CwcR1FSy3iEtsA9nSjXHn00ywjRZInA&s" alt="Safety Gear Logo" />
          <div class="client-name">Roti Boy</div>
        </div>
        <div class="client">
          <img src="https://images.seeklogo.com/logo-png/53/1/pocari-sweat-logo-png_seeklogo-537191.png" alt="Fuel Network Logo" />
          <div class="client-name">Pocari Sweat</div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>