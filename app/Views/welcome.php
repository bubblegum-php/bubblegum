<?php
/**
 * @var array $request request data
 * @var array $data additional data
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubblegum Dark Theme</title>
</head>
<body>
    <header>
        <img src="https://raw.githubusercontent.com/bubblegum-php/gallery/d796997dba92c0e36dc49c59c600733cab5529e9/bubblegum_logo.svg" alt="Logo" class="logo">
    </header>
    <div class="top-container">
        <h1>Houston, we have no problems!</h1>
        <p>If you see this page, it’s a little reminder that everything is just fine! Keep building your dreams!</p>
    </div>

    <div class="row">
        <div class="container">
            <h1>Hello there, <?=$data['username']?>.</h1>
            <p><?=$data['message']?></p>
            <a href="<?=$data['link']?>" class="button">Do not press!</a>
        </div>
        <div class="container">
            <h1>About Bubblegum</h1>
            <p>Bubblegum is a lightweight, modular PHP framework that offers flexibility for both small-scale projects and complex applications.</p>
            <a href="https://github.com/bubblegum-php" class="button">Visit GitHub</a>
        </div>
        <div class="container">
            <h1>Support Developers</h1>
            <p>Great software is built by great teams. Let's support each other, innovate together, and turn challenges into opportunities!</p>
            <a href="https://buymeacoffee.com/lankryf" class="button">Buy them a coffee</a>
        </div>
    </div>
</body>
</html>
<style>
    body {
        background-color: #1e1e1e;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 20px;
        overflow-x: hidden;
        overflow-y: visible;
    }
    header {
        text-align: center;
        margin-bottom: 40px;
    }
    .logo {
        display: block;
        width: 150px;
        height: auto;
        margin: 0 auto;
        opacity: 0;
        transform: translateY(-20px);
        animation: fadeInUp 1s forwards 0.5s;
    }
    .logo:hover
    {
        scale: 1.03;
    }
    .row {
        display: flex;
        justify-content: space-around;
        align-items: stretch;
        flex-wrap: wrap;
    }
    .top-container, .container {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
        opacity: 0;
        border-radius: 20px;
        text-align: center;
    }
    .top-container {
        background: url('https://raw.githubusercontent.com/bubblegum-php/gallery/refs/heads/master/background.jpeg') no-repeat top;
        background-size: cover;
        padding: 20px;
        margin-bottom: 40px;
        max-width: 960px;
        margin-left: auto;
        margin-right: auto;
        color: white;
        transform: translateY(-20px);
        animation: fadeInUp 1s forwards 1s;
    }
    .top-container:hover, .container:hover {
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.8);
    }
    .container {
        background-color: #333;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
        padding: 40px;
        max-width: 480px;
        margin: 10px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transform: translateY(20px);
        animation: fadeInUp 1s forwards 1.5s;
    }

    /* Keyframes for fade-in and slide-up animation */
    @keyframes fadeInUp {
        to {
            opacity: 1; /* End fully visible */
            transform: translateY(0); /* End at original position */
        }
    }
    h1 {
        color: #ff99cc;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    p {
        color: #ccc;
        font-size: 1.2em;
        margin-bottom: 30px;
    }
    .button {
        background-color: #ff99cc;
        color: #1e1e1e;
        border: none;
        border-radius: 50px;
        padding: 10px 30px;
        font-size: 1.2em;
        cursor: pointer;
        text-decoration: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        transition: all 0.3s ease;
    }
    .button:hover {
        background-color: #ff66bb;
        color: white;
    }
    @media (max-width: 768px) {
        .row {
            flex-direction: column;
            align-items: center;
        }
    }
</style>