<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $home = htmlspecialchars($_POST['home']);

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Home Submission</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <body>
        <header>
            <div class='container'>
                <h1>Supreme Homes Inc.</h1>
                <p>Your trusted partner in real estate.</p>
            </div>
        </header>
    
        <nav>
            <div class='container'>
                <ul>
                    <li><a href='index.html'>Home</a></li>
                    <li><a href='about.html'>About Us</a></li>
                    <li><a href='properties.html'>Properties</a></li>
                    <li><a href='rentals.html'>For Rent</a></li>
                    <li><a href='sales.html'>For Sale</a></li>
                    <li><a href='contact.php'>Contact Us</a></li>
                    <li><a href='signup.html'>Sign Up</a></li>
                    <li><a href='signin.html'>Login</a></li>
                </ul>
            </div>
        </nav>
    
        <main>
            <div class='container'>
                <h2>Home Submission</h2>
                <p>Thank you! You have selected <strong>$home</strong>.</p>
            </div>
        </main>
    
        <footer>
            <div class='container'>
                <p>&copy; 2024 Supreme Homes Inc. All rights reserved.</p>
            </div>
        </footer>
    </body>
    </html>";
}
?>
