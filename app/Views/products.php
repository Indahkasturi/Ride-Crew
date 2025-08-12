<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .products-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 32px;
        justify-content: center;
      }
      .product {
  width: 260px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
  padding: 24px 16px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  min-height: 420px;
      }
      .product-image {
        width: 200px;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
      }
      .product-image img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      }
      .product span {
        font-size: 13px;
        color: #888;
        margin-bottom: 8px;
        font-weight: bold;
        letter-spacing: 1px;
      }
      .product h3 {
        font-size: 20px;
        margin: 0 0 10px 0;
        font-weight: 600;
      }
      .product p {
        font-size: 15px;
        color: #444;
        margin: 0;
      }
    </style>
       <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
 
</head>
<body>
       
    <section id="products">
      <div class="section-inner">
        <div class="section-header">
          <h2>Produk / Layanan</h2>
          <small>Penawaran Profesional</small>
        </div>
        <div class="products-grid">
          <?php foreach ($products as $product): ?>
            <div class="product">
              <div class="product-image" style="width:100%;text-align:center;margin-bottom:10px;">
                <img src="<?= $product['product_image'] ?>" alt="<?= esc($product['product_name']) ?>" style="max-width:200px;max-height:200px;object-fit:cover;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">
              </div>
              <span><?= strtoupper($product['product_category']) ?></span>
              <h3><?= esc($product['product_name']) ?></h3>
              <p><?= esc($product['product_description']) ?></p>
              <div style="flex:1 1 auto"></div>
              <a href="https://wa.me/+<?= esc($product['PhoneNumber']) ?>" style="width:100%;display:flex;justify-content:center;margin-top:auto;">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" style="width:90%;">buy</button>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
</body>
</html>