<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="products" class="strip-dark" style="min-height:100vh; display:flex; padding-top:70px; box-sizing:border-box;">
  <div class="section-inner">
    <div class="section-header">
      <h2>Produk / Layanan</h2>
      <small>Penawaran Profesional</small>
    </div>
    <div class="products-grid">
      <div class="product">
        <span>PRODUK</span>
       <a href="<?= base_url('product?product_category=sale') ?>"> <h3>Penjualan Perlengkapan Motor</h3> </a>
        <p style="color: black;">Menjual perlengkapan riding seperti helm, jaket, sarung tangan, dan boots dengan kualitas terbaik.</p>
      </div>
      <div class="product">
        <span>LAYANAN</span>
        <a href="<?= base_url('product?product_category=rent') ?>"> <h3>Sewa Perlengkapan Motor</h3> </a>
        <p style="color: black;">Menyewakan perlengkapan riding lengkap untuk kebutuhan touring dan event dengan harga terjangkau.</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>