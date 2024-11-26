<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banned</title>
    <style>
    <?php 
        $images = ["/./images/s9d6er.png", "/./images/egvrf0.jpg"];
        $randomImage = $images[array_rand($images)];
    ?>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container img {
            max-width: 100%;
            height: auto;
        }
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('<?php echo $randomImage; ?>') no-repeat;
            background-size: 100% 100%;
            display: none;
            justify-content: center;
            align-items: center;
            animation: flash 0.300s infinite;
            background-repeat: repeat;
            z-index: 1000;
        }
        @keyframes flash {
            0%, 50% {
            filter: invert(0);
        }
            50.1%, 100% {
            filter: invert(1);
    }
}
        a {
            color: #007BFF;
            text-decoration: none;
            cursor: pointer;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
              font-family: 'Inter', sans-serif;
              padding: 10px 20px;
              background-color: #4285f4;
              border: none;
              border-radius: 5px;
              color: #fff;
              font-size: 16px;
              cursor: pointer;
        }
        .footer {
            font-size: 14px;
            color: #666;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/./images/searchify_logo.svg" alt="Searchify Logo" width="400px">
        <small><h1>Your IP address <span style="color:red"><?php echo $_SERVER['REMOTE_ADDR']; ?></span> has been blocked.</h1></small>
        <p>Think this was done in error?</p>
            <button id="contactLink">Contact us</button>
    </div>

    <div class="footer">
        &copy; <?php echo date('Y'); ?> - Searchify. All rights reserved.
    </div>

    <div id="overlay"></div>
    <audio id="sound" preload loop src="/./sounds/z4naiu.mp3"></audio>
    <script>
    let userClickedButton = false;

        document.getElementById('contactLink').addEventListener('click', function() {
            document.getElementById('overlay').style.display = 'flex';
            document.getElementById('sound').play();
            userClickedButton = true;
        });

        window.addEventListener('beforeunload', function (event) {
            if (userClickedButton) {
                event.preventDefault();
                event.returnValue = 'Are you sure you want to leave this page?';
            }
        });
    </script>
</body>
</html>
