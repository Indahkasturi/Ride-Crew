<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.gallery-card-actions a.btn {
			position: relative;
			z-index: 10;
			pointer-events: auto;
		}

		.gallery-grid {
			display: flex;
			flex-wrap: wrap;
			gap: 22px;
			justify-content: center;
			margin-bottom: 18px;
		}

		.gallery-card {
			background: #f7f7fa;
			border-radius: 12px;
			border: 1px solid #e3e8f0;
			box-shadow: 0 1px 6px rgba(26, 90, 154, 0.06);
			padding: 22px 22px 16px 22px;
			width: 300px;
			display: flex;
			flex-direction: column;
			align-items: center;
			transition: box-shadow 0.2s, border-color 0.2s, background 0.2s;
		}

		.gallery-card:hover {
			box-shadow: 0 4px 14px rgba(26, 90, 154, 0.13);
			border-color: #bfc7d1;
			background: #eef3fa;
		}

		.gallery-card img {
			width: 240px;
			height: 240px;
			object-fit: cover;
			border-radius: 8px;
			box-shadow: 0 1px 4px rgba(0, 0, 0, 0.06);
			transition: transform 0.2s cubic-bezier(.25, .8, .25, 1), box-shadow 0.2s;
		}

		.gallery-card:hover img {
			transform: scale(1.02);
			box-shadow: 0 4px 12px rgba(26, 90, 154, 0.13);
			z-index: 2;
		}

		.gallery-card h3 {
			font-size: 0.98rem;
			margin: 10px 0 2px 0;
			color: #1a5a9a;
			font-weight: 600;
			text-align: center;
			letter-spacing: 0.2px;
		}

		.gallery-card p {
			font-size: 0.92rem;
			color: #888;
			margin: 0;
			text-align: center;
			font-weight: 400;
			letter-spacing: 0.1px;
		}

		@media (max-width: 700px) {
			.section-inner {
				padding: 12px 2px;
			}

			.gallery-grid {
				gap: 10px;
			}

			.gallery-card {
				width: 100%;
				max-width: 400px;
			}

			.gallery-card img {
				width: 100%;
				height: 220px;
			}
		}
	</style>
</head>

<body>
	<section id="gallery">
		<div class="section-inner">
			<div class="section-header" style="justify-content: space-between; flex-wrap: wrap;">
				<div>
					<h2>Gallery</h2>
					<small>Moments</small>
				</div>
				<div class="cta-group">
					<a href="<?= base_url('gallery/formAdd') ?>" class="btn">+ Tambah Gambar</a>
				</div>
			</div>

			<div class="gallery-grid">
				<?php foreach ($gallery as $item): ?>
					<div class="gallery-card" style="height: 420px;">
						<a href="<?= site_url('detail/' . $item['id']) ?>" style="text-decoration: none; color: inherit;">
							<img src="<?= base_url($item['image']) ?>" alt="<?= esc($item['name']) ?>">
							<h3><?= esc($item['name']) ?></h3>
							<p><?= esc($item['date']) ?></p>
						</a>

						<div class="gallery-card-actions" style="margin-top: auto;">
							<a href="<?= site_url('gallery/formUpdate/' . $item['id']) ?>" class="btn">Update</a>
						</div>

						<div class="gallery-card-actions" style="margin-top: auto;">
							<a href="<?= site_url('gallery/delete/' . $item['id']) ?>" class="btn">Delete</a>
						</div>

					</div>
				<?php endforeach; ?>
			</div>


			<?php if (empty($gallery)): ?>
				<p style="text-align:center; margin-top: 40px; font-size: 1.1rem; color: #999;">Belum ada data galeri.</p>
			<?php endif; ?>
		</div>
	</section>


</body>

</html>