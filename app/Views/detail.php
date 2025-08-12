<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Galeri</title>
    <style>

        .gallery-detail {
            max-width: 600px;
            margin: 0 auto;
            margin-top: 25px;
            background: #fff;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: center;
        }

        .gallery-detail img {
            width: 100%;
            max-width: 400px;
            border-radius: 8px;
            margin-bottom: 16px;
        }

        .gallery-detail h2 {
            margin: 12px 0 8px;
            color: #1a5a9a;
        }

        .gallery-detail p {
            color: #555;
            font-size: 0.95rem;
        }

        .not-found {
            text-align: center;
            margin-top: 50px;
            font-size: 1.1rem;
            color: #c00;
        }
    </style>
</head>
<body>

<?php if ($gallery): ?>
    <div class="gallery-detail">
        <img src="/<?= $gallery['image'] ?>" alt="<?= esc($gallery['name']) ?>">
        <h2><?= esc($gallery['name']) ?></h2>
        <p><?= esc($gallery['date']) ?></p>
    </div>
<?php else: ?>
    <div class="not-found">
        <p>Data tidak ditemukan.</p>
    </div>
<?php endif; ?>

</body>
</html>
