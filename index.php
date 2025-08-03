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
    <link rel="icon" href="https://raw.githubusercontent.com/gurraoptimus/SnipeStack/gh-page/assets/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>SnipeStack</title>
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
    // Basic PHP Website Example
    // This is a simple PHP script that generates a web page with some fun elements.
    echo "<h1>Welcome to My PHP Website</h1>";
    echo "<nav>
        <a href=\"\">Home</a> |
        <a href=\"about.php\">About</a> |
        <a href=\"contact.php\">Contact</a> |
        <a href=\"/static/services.php\">Services</a> |
        <a href=\"/static/donate.php\">Donate</a> |
        <a href=\"/static/login.php\">Login</a> |
        <a href=\"/static/signup.php\">SignUp</a> |
        <a href=\"http://localhost\">&lt;-back</a>
    </nav>";
    echo "<p>This is a simple PHP-powered web page.</p>";

    // Display current date and time
    echo '<p>Current date and time: <span id="live-time">' . date("Y-m-d H:i:s") . '</span></p>';
    ?>
    <script>
    function updateTime() {
        const now = new Date();
        const pad = n => n.toString().padStart(2, '0');
        const formatted = now.getFullYear() + '-' +
            pad(now.getMonth() + 1) + '-' +
            pad(now.getDate()) + ' ' +
            pad(now.getHours()) + ':' +
            pad(now.getMinutes()) + ':' +
            pad(now.getSeconds());
        document.getElementById('live-time').textContent = formatted;
    }
    setInterval(updateTime, 1000);
    </script>
    <?php

    // Example of a PHP variable
    $user = "Visitor";
    echo "<p>Hello, $user!</p>";

    // Display a real live funny joke about developers
    // Fetch a random programming joke from JokeAPI (can be single or two-part)
    $joke = "Why do programmers prefer dark mode? Because light attracts bugs!"; // fallback
    $emoji = "😂"; // fallback emoji

    $jokeApiUrl = "https://v2.jokeapi.dev/joke/Programming?type=any";
    $response = @file_get_contents($jokeApiUrl);
    if ($response !== false) {
        $data = json_decode($response, true);
        if (isset($data['type']) && $data['type'] === 'single' && isset($data['joke'])) {
            $joke = htmlspecialchars($data['joke']);
        } elseif (isset($data['type']) && $data['type'] === 'twopart' && isset($data['setup'], $data['delivery'])) {
            $joke = htmlspecialchars($data['setup']) . "<br><strong>" . htmlspecialchars($data['delivery']) . "</strong>";
        }
    }

    // Fun developer-related emojis
    $emojis = ["😂", "🤓", "💻", "🧑‍💻", "👨‍💻", "👩‍💻", "🖥️", "🐛", "🚀", "🤖", "😅"];
    $emoji = $emojis[array_rand($emojis)];

    echo "<div class='joke'>{$emoji} {$joke}</div>";
    echo "<span class='emoji'>{$emoji}</span>";
    ?>

    <footer style="text-align: center; margin-top: 40px; color: #666; background: #222; padding: 30px 0 20px 0;">
        <p style="color: #bbb; margin-bottom: 18px;">&copy; <?php echo date("Y"); ?> Gurraoptimus Development. All rights reserved.</p>
        <div style="margin-bottom: 10px;">
            <p style="margin-bottom: 10px;">Disclaimer: This is a demo website. All content is fictional.</p>
            <p style="margin-bottom: 10px;">
            Follow us on 
            <a href="https://x.com/gurraoptimus" target="_blank" style="color: #ffd700; text-decoration: none; margin: 0 6px;">X</a> | 
            <a href="https://facebook.com/" target="_blank" style="color: #ffd700; text-decoration: none; margin: 0 6px;">Facebook</a>
        </p>
            <a href="/template/faq.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">FAQ</a> |
            <a href="/template/privacy.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Privacy Policy</a> |
            <a href="/template/terms.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Terms of Service</a> |
            <a href="/template/feedback.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Feedback</a> |
            <a href="/template/support.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Support</a> |
            <a href="/template/careers.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Careers</a> |
            <a href="/template/news.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">News</a> |
            <a href="/template/events.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Events</a> |
            <a href="/template/tutorials.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Tutorials</a> |
            <a href="/template/partners.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Partners</a> |
            <a href="/template/community.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Community</a> |
            <a href="/template/resources.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Resources</a> |
            <a href="/template/blog.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Blog</a> |
            <a href="/template/newsletters.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Newsletters</a> |
            <a href="/template/sponsorship.php" style="color: #ffd700; text-decoration: none; margin: 0 10px;">Sponsorship</a>
        </div>
    </footer>
</body>
</html>