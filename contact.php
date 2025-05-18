<?php
// Contact.php

// Handle form submission
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $body    = htmlspecialchars(trim($_POST['message'] ?? ''));

    if ($name && $email && $subject && $body) {
        // You can replace this with actual email sending logic
        // mail($to, $subject, $body, "From: $email");
        $message = "Thank you, $name! Your message has been sent.";
    } else {
        $message = "Please fill in all fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact us for any inquiries or support.">
    <meta name="keywords" content="contact, support, inquiries">
    <meta name="author" content="Gurraoptimus">
    <meta name="copyright" content="Gurraoptimus Development">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#333">
    <link rel="icon" href="https://raw.githubusercontent.com/gurraoptimus/SnipeStack/gh-page/assets/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Contact Us</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f7fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 420px;
            margin: 60px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(44, 62, 80, 0.08);
            padding: 36px 32px 28px 32px;
        }
        h2 {
            text-align: center;
            color: #2a4365;
            margin-bottom: 24px;
        }
        label {
            display: block;
            margin-top: 18px;
            color: #2a4365;
            font-weight: 500;
        }
        input, textarea {
            width: 100%;
            padding: 10px 12px;
            margin-top: 7px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 1rem;
            background: #f8fafc;
            transition: border-color 0.2s;
        }
        input:focus, textarea:focus {
            border-color: #3182ce;
            outline: none;
            background: #fff;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        button {
            width: 100%;
            margin-top: 24px;
            padding: 12px 0;
            background: #2a4365;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #1a365d;
        }
        .message {
            margin: 0 0 18px 0;
            padding: 12px;
            border-radius: 6px;
            background: #e6fffa;
            color: #276749;
            text-align: center;
            font-weight: 500;
            border: 1px solid #b2f5ea;
        }
        .back-link {
            display: block;
            margin: 28px 0 0 0;
            color: #2a4365;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            text-align: center;
            transition: color 0.2s;
        }
        .back-link:hover {
            color: #3182ce;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <?php if ($message): ?>
            <div class="message"><?= $message ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" required>

            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="5" required></textarea>

            <button type="submit">Send</button>
        </form>
        <a href="javascript:history.back()" class="back-link">&larr; Back</a>
    </div>
     <footer style="text-align: center; margin-top: 40px; color: #666;">
        <p>&copy; <?php echo date("Y"); ?> Gurraoptimus Development. All rights reserved.</p>
    </footer>
</body>
</html>