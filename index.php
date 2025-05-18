<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A simple PHP website with a fun twist.">
    <meta name="keywords" content="PHP, web development, fun, jokes, emojis">
    <meta name="author" content="gurraoptimus">
    <meta name="copyright" content="gurraoptimus development">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#333">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>SnipStack</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 40px;
        }
        nav {
            background: #333;
            padding: 15px 0;
            text-align: center;
            margin-bottom: 30px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 18px;
            font-size: 18px;
            transition: color 0.2s;
        }
        nav a:hover {
            color: #ffd700;
        }
        p {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 18px 24px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            color: #444;
            font-size: 18px;
        }
        .joke {
            background: #e0ffe0;
            color: #226622;
            border-left: 6px solid #44cc44;
            margin: 30px auto;
            max-width: 500px;
            padding: 16px 22px;
            font-style: italic;
            font-size: 19px;
        }
        .emoji {
            font-size: 32px;
            text-align: center;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    echo "<h1>Welcome to My PHP Website</h1>";
    echo "<nav>
        <a href=\"\">Home</a> |
        <a href=\"about.php\">About</a> |
        <a href=\"contact.php\">Contact</a> |
        <a href=\"services.php\">Services</a> |
        <a href=\"donate.php\">Donate</a> |
        <a href=\"login.php\">Login</a> |
        <a href=\"register.php\">Register</a> |
        link to <a href=\"https://www.gurraoptimus.se\" target=\"_blank\">External Site</a>
    </nav>";
    echo "<p>This is a simple PHP-powered web page.</p>";

    // Display current date and time
    echo "<p>Current date and time: " . date("Y-m-d H:i:s") . "</p>";

    // Example of a PHP variable
    $user = "Visitor";
    echo "<p>Hello, $user!</p>";

    // Add some fun: display a random joke
    $jokes = [
        "Why do programmers prefer dark mode? Because light attracts bugs!",
        "Why did the PHP developer go broke? Because he used echo instead of print!",
        "How many programmers does it take to change a light bulb? None, that's a hardware problem.",
        "Why do Java developers wear glasses? Because they don't see sharp.",
        "What do you call a group of 8 Hobbits? A Hobbyte."
    ];
    $randomJoke = $jokes[array_rand($jokes)];
    echo "<div class='joke'>😂 $randomJoke</div>";

    // Add a random emoji for extra fun
    $emojis = ["🎉", "🚀", "😎", "🤖", "🌈", "🍕", "🐘"];
    $randomEmoji = $emojis[array_rand($emojis)];
    echo "<span class='emoji'>$randomEmoji</span>";
    ?>

    <footer style="text-align: center; margin-top: 40px; color: #666; background: #222; padding: 30px 0 20px 0;">
        <p style="color: #bbb; margin-bottom: 18px;">&copy; <?php echo date("Y"); ?> Gurraoptimus Development. All rights reserved.</p>
        <div style="margin-bottom: 10px;">
            <p style="margin-bottom: 10px;">Disclaimer: This is a demo website. All content is fictional.</p>
            <p style="margin-bottom: 10px;">
            Follow us on 
            <a href="https://twitter.com" target="_blank" style="color: #ffd700; text-decoration: none; margin: 0 6px;">Twitter</a> | 
            <a href="https://facebook.com" target="_blank" style="color: #ffd700; text-decoration: none; margin: 0 6px;">Facebook</a>
        </p>
            <a href="faq.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">FAQ</a> |
            <a href="privacy.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Privacy Policy</a> |
            <a href="terms.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Terms of Service</a> |
            <a href="feedback.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Feedback</a> |
            <a href="support.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Support</a> |
            <a href="careers.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Careers</a> |
            <a href="news.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">News</a> |
            <a href="events.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Events</a> |
            <a href="tutorials.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Tutorials</a> |
            <a href="partners.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Partners</a> |
            <a href="community.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Community</a> |
            <a href="resources.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Resources</a> |
            <a href="blog.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Blog</a> |
            <a href="newsletters.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Newsletters</a> |
            <a href="sponsorship.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Sponsorship</a>
        </div>
    </footer>
</body>
</html>