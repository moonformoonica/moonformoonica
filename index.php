<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONICA'S PERSONAL WEB</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <style>
       @property --angle {
            syntax: '<angle>';
            initial-value: 0deg;
            inherits: false;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #1a0112ff;
            color: #ef4c9dc8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            position: relative;
            text-align: center;
            padding: 10px; 
            border-radius: 72px;
            box-shadow: 7px 7px 7px #ffb9deff;
            background-image: conic-gradient(from var(--angle), #f46ab6ff, #bd357eff, #fab0d8ff);
            animation: spin 3s linear infinite;
        }

        .content-wrapper {
            background-color: #efdae5ff;
            padding: 37px; 
            border-radius: 77px; 
        }

        .profile-pict {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 4px solid #ef4c9dc8;
        }

        h1 {
            margin: 0;
            font-size: 2.7em;
        }

        .text-color {
            color: #c14083ff;
        }

        .herData {
            margin-top: 10px;
            font-size: 1.3em;
            
        }

        .socmed-icons {
            margin-top: 25px;
        }

        .socmed-icons a {
            color: #c14083ff;
            font-size: 24px;
            margin: 0 15px;
            transition: color 0.3s ease;
        }

        .socmed-icons a:hover {
            color: #e584b8ff;
        }

        @keyframes spin {
            from {
                --angle: 0deg;
            }
            to {
                --angle: 360deg;
            }
        }
    </style>
</head>

<body>

    <div class="container">
    <div class="content-wrapper">
        <img src="nana.jpg" alt="Foto Profil Monica" class="profile-pict">

        <h1>
            <?php
            echo "<strong class='text-color'>Monica Khirani Triastary</strong>";
            ?>
        </h1>

        <p class="herData">
            <?php
            echo "102092400131 / Fakultas Rekayasa Industri / S1 Sistem Informasi";
            ?>
        </p>

        <div class="socmed-icons">
            <a href="https://www.instagram.com/monicakhtr/" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://github.com/moonformoonica" target="_blank" title="GitHub"><i class="fa-brands fa-github-alt"></i></a>
            <a href="https://medium.com/@starry777eyes" target="_blank" title="Medium"><i class="fa-brands fa-medium"></i></a>
            <a href="https://www.linkedin.com/in/monica-khirani-triastary-767a35302/" target="_blank" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        </div>
    </div>

</body>
</html>
