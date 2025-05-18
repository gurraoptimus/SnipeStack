<?php
// about.php

// Basic About Page for a PHP Website
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { 
            font-family: 'Segoe UI', Arial, sans-serif; 
            margin: 0; 
            background: linear-gradient(120deg, #f0f4f8 0%, #e0e7ef 100%);
            min-height: 100vh;
        }
        .container { 
            max-width: 700px; 
            margin: 60px auto; 
            background: #fff; 
            padding: 40px 32px; 
            border-radius: 12px; 
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        h1 { 
            color: #2a4365; 
            font-size: 2.5rem; 
            margin-bottom: 18px;
            letter-spacing: 1px;
        }
        p { 
            color: #4a5568; 
            font-size: 1.15rem; 
            line-height: 1.7;
            margin-bottom: 16px;
        }
        @media (max-width: 600px) {
            .container {
                padding: 20px 8px;
            }
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body> 
   
    <div class="container">
        <h1>About Us</h1>
        <p>Welcome to our website! We are dedicated to providing quality content and services to our users.</p>
        <p>Our mission is to deliver valuable information and a great user experience. Thank you for visiting our About page.</p>
     <a href="javascript:history.back()" style="display:inline-block;margin:24px 0 0 32px;color:#2a4365;text-decoration:none;font-weight:500;font-size:1rem;">
        &larr; Back
    </a>
    </div>
    <footer style="text-align: center; margin: 60px auto 0 auto; color: #666; max-width: 700px; background: #f8fafc; padding: 24px 16px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.04); font-size: 1rem;">
        <p style="margin-bottom: 10px;">&copy; <?php echo date("Y"); ?> My PHP Website. All rights reserved.</p>
        <p style="margin-bottom: 10px;">
            Follow us on 
            <a href="https://twitter.com" target="_blank" style="color: #3182ce; text-decoration: none; margin: 0 6px;">Twitter</a> | 
            <a href="https://facebook.com" target="_blank" style="color: #3182ce; text-decoration: none; margin: 0 6px;">Facebook</a>
        </p>
        <p style="margin-bottom: 10px;">
            Contact us at 
            <a href="mailto:info@mywebsite.com" style="color: #3182ce; text-decoration: none;">info@mywebsite.com</a>
        </p>
        <p style="margin-bottom: 10px;">Disclaimer: This is a demo website. All content is fictional.</p>
        <p>
            <a href="#" style="color: #2a4365; text-decoration: underline; margin-right: 10px;">Privacy Policy</a> | 
            <a href="#" style="color: #2a4365; text-decoration: underline; margin-left: 10px;">Terms of Service</a>
        </p>
    </footer>
</body>
</html>