<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Update</title>
        <style>
            body {
                font-family: 'Segoe UI', Arial, sans-serif;
                background: #f7f7fa;
                margin: 0;
                color: #222;
            }
            .form-container {
                max-width: 420px;
                margin: 40px auto;
                background: #f7f7fa;
                border-radius: 14px;
                border: 1px solid #e3e8f0;
                box-shadow: 0 2px 12px rgba(26,90,154,0.07);
                padding: 32px 24px 24px 24px;
            }
            form {
                display: flex;
                flex-direction: column;
                gap: 18px;
            }
            label {
                font-size: 1rem;
                color: #CF7500;
                font-weight: 600;
                margin-bottom: 6px;
            }
            input[type="text"],
            input[type="date"],
            input[type="file"] {
                padding: 10px;
                border-radius: 8px;
                border: 1px solid #c7d4e9;
                font-size: 1rem;
                background: #f6f8fa;
                margin-bottom: 4px;
                color: #222;
                box-shadow: 0 1px 4px rgba(26,90,154,0.06);
            }
            input[type="file"] {
                padding: 6px;
            }
            button[type="submit"] {
                background: #CF7500;
                color: #fff;
                font-weight: 600;
                border: none;
                border-radius: 8px;
                padding: 12px 0;
                font-size: 1.08rem;
                cursor: pointer;
                box-shadow: 0 1px 6px rgba(26,90,154,0.08);
                transition: background 0.2s, box-shadow 0.2s;
            }
            button[type="submit"]:hover {
                background: #CF7500;
                box-shadow: 0 2px 12px rgba(26,90,154,0.13);
            }
        </style>
</head>
<body>
        <div class="form-container">
            <form action="<?= base_url('gallery/update/' . $gallery['id']) ?>" method="post" enctype="multipart/form-data">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?= esc($gallery['name']) ?>" required>
                </div>
                <div>
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" value="<?= esc($gallery['date']) ?>" required>
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" value="<?= esc($gallery['image']) ?>" required>
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
</body>
</html>