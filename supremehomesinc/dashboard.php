<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
include('config.php');
?>


<header>
    <div class="container">
        <h1>Supreme Homes Inc.</h1>
        <p>Your trusted partner in real estate.</p>
        <br></br>
        <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>
<link rel="stylesheet" href="css/style.css">
<h1>Dashboard!</h1>
<p>Welcome to your dashboard! Here are the available properties:</p>

<h2>Rentals</h2>
<ul>
    <div class="container">
        <img src="images\building.2.jpg" alt="images\building.2.jpg" width="340" height="160">
        <p>Home 2</p>
        <p>Price: $3,800</p>
        <p>Modern apartment with 2 bedrooms, a city view, and a modern kitchen</p>
        <p>Location: Kilimani</p>
    </div>
    <div class="container">
        <img src="images\building.3.webp" alt="images\building.3.webp" width="340" height="160">
        <p>Home 3</p>
        <p>Price: $1,700</p>
        <p>Luxurious villa with 5 bedrooms, a private pool, and a large backyard</p>
        <p>Location: Lavington</p>
    </div>
</ul>

<h2>For Sale</h2>
<ul>
    <div class="container">
        <img src="images\building.5.jpg" alt="images\building.5.jpg" width="340" height="160">
        <p>Home 4</p>
        <p>Price: $1,980</p>
        <p>Cozy cottage with 2 bedrooms, a small garden, and a fireplace</p>
        <p>Location: Runda</p>
    </div>
    <br></br>
    <div class="container">
        <img src="images\building.4.jpg" alt="images\building.4.jpg" width="340" height="160">
        <p>Home 5</p>
        <p>Price: $1,230</p>
        <p>Penthouse with stunning city views, 4 bedrooms, and a large balcony</p>
        <p>Location: Karen</p>
    </div>
    <main>
        <section id="form">
            <div class="container">
                <h2>Pick Your Home</h2>
                <form action="submit_form.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>


                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <br></br>

                    <label for="service">Select Home:</label>
                    <select id="service" name="service">
                        <option value="service2">Home 2</option>
                        <option value="service3">Home 3</option>
                        <option value="service4">Home 4</option>
                        <option value="service5">Home 5</option>
                    </select>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="1" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>

    <form action="logout.php" method="post">
    <input type="submit" value="Logout">
    </form>

    <footer>
        <div class="container">
            <p>&copy; 2024 Supreme Homes Inc. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

   



