<?php
// index.php

// Set the content-type to HTML
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joan Miro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
            margin-top: 30px;
        }
        .gallery {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .gallery img {
            max-width: 100%;
            height: auto;
            border: 3px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Joan Miro</h1>
    <div class="gallery">
        <img src="https://uploads5.wikiart.org/images/joan-miro/the-smile-of-the-flamboyant-wings.jpg!Large.jpg" alt="The Smile of the Flamboyant Wings">
        <img src="https://uploads8.wikiart.org/images/joan-miro/maternity.jpg!Large.jpg" alt="Maternity">
    </div>
</body>
</html>
