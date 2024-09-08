<?php
$php = "My first web-page on PHP";
$header = <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$php</title>
    <style>
    html, body{
        box-sizing: border-box;
        margin: 0;
    </style>
</head>
<body>
EOD;
$body = <<<EOD
<nav style = 'background: #ddd; width: 100vw; height: 90px'>
<h1 style='text-align: center; font-size: 64px; margin: 0; padding-top: 5px; font-family: "Verdana"'>$php</h1>
</nav>
<main style='margin: 80px'>
<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png' style='display:block; margin: 0 auto; width: 400px;'>
<br/>
<h2 style='font-size: 36px; font-family: "Verdana"'>About PHP</h2>
<p style='font-size: 18px'">PHP, or "Hypertext Preprocessor," is a powerful and versatile server-side scripting language that is widely used for web development. Designed to create dynamic and interactive web pages, PHP allows developers to embed code directly into HTML, making it easy to generate content on the fly. With its open-source nature, PHP is supported by a large community, which contributes to a wealth of resources, frameworks, and libraries that enhance its capabilities. It seamlessly integrates with various databases, such as MySQL and PostgreSQL, enabling the development of data-driven applications. Whether you are building a simple website or a complex web application, PHP provides the tools and flexibility needed to bring your vision to life. Its ease of learning and extensive documentation make it an ideal choice for both beginners and experienced developers alike.</p>
</main>
EOD;
$footer = <<<EOD
</body>
</html>
EOD;
$page = "$header\n$body";
echo $page;
