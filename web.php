<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f2f2f2;
            text-align: center;
            padding: 20px 0;
        }
        .container {
            text-align: center;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        img {
            width: 300px;
            height: 150px;
            border-radius: 10%;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555;
        }

        p {
            color: #777;
        }
        
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>HI! WELCOME MY PORTOFOLIO</h1>
    </header>
    <div class="container">
        <?php
        // Informasi biodata
        $name = "HI! I AM ALFFYA";
        $job = "WEB DESIGN";
        $bio = " PASINO [ PASUKAN ISTRI YUNO!!!] ";
        $image = "yunoo.jpg";
        $instagram_link = "https://instagram.com/lfyafennd?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"; // Ganti dengan link profil Instagram Anda
        $youtube_link = "https://youtube.com/@inmkitge2310.html";
        ?>

        <img src="<?php echo $image; ?>" alt="Portfolio Image">
        <h2><?php echo $name; ?></h2>
        <h3><?php echo $job; ?></h3>
        <p><?php echo $bio; ?></p>
        <a href="<?php echo $instagram_link; ?>" target="_blank">ig: @lfyafennd</a>
        <a href="<?php echo $youtube_link; ?>" target="_blank">|| yt: @inmkitge2310</a>
    </div>
    </div>
    <footer>
        <p>&copy; 2023 alffya pcr yuno </p>
    </footer>
</body>
</html>
