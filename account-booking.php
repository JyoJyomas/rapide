<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/67eed877b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="account-booking.css">
    <title>Rapidé account</title>
</head>
<?php
    include 'navbar.php';
?>
<body>
    <main>
        <section> <!-- first part contains the account name and points -->
            <div class="account-box">
                <div class="account-icon">
                    <img src="photos/user.png" alt="user">
                </div>
                <div class="account-name">
                    <h2>Hi, User</h2>
                </div>
                <div class="account-points">
                    <img src="photos/medal.png" alt="points">
                    <p>Your current points: 8,369</p>
                </div>
            </div>
        </section>
        <section> <!-- second part contains the booking cards and history cards -->
            <div class="transaction">
                <ul class="bokhis">
                    <li><a class="underline active" href="account-booking.php">Booking</a></li>
                    <p> | </p>
                    <li><a class="underline" href="account-history.php">History</a></li>
                </ul>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <img src="photos/brakes2.png" alt="brakes">
                        <div class="card-info">
                            <h1>Brakes Services</h1>
                            <p><span>Variation:</span> Brake clean and adjust</p>
                            <p><span>Date:</span> August 25 2024</p>
                            <p><span>Time:</span> 3:00 PM</p>
                        </div>
                    </div>
                    <div class="action">
                        <p>₱300</p>
                        <button onclick="confirmCancel()">Cancel</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img src="photos/change-oil2.png" alt="card2">
                        <div class="card-info">
                            <h1>Change Oil Service</h1>
                            <p><span>Variation:</span> Diesel, Premium</p>
                            <p><span>Date:</span> Feb 14 2024</p>
                            <p><span>Time:</span> 10:00 PM</p>
                        </div>
                    </div>
                    <div class="action">
                        <p>₱300</p>
                        <button onclick="confirmCancel()">Cancel</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img src="photos/maintenance2.png" alt="card3">
                        <div class="card-info">
                            <h1>Maintenance Service</h1>
                            <p><span>Variation:</span> Basic Tune-up</p>
                            <p><span>Date:</span> Sept 25 2024</p>
                            <p><span>Time:</span> 4:00 PM</p>
                        </div>
                    </div>
                    <div class="action">
                        <p>₱300</p>
                        <button onclick="confirmCancel()">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

<script>
    const links = document.querySelectorAll('.underline');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            /* e.preventDefault(); // Prevent default action of the link */

            // Remove 'active' class from all links
            links.forEach(item => {
                item.classList.remove('active');
            });

            // Add 'active' class to the clicked link
            this.classList.add('active');
        });
    });
    function confirmCancel() {
        var result = confirm("Are you sure you want to cancel?");
        if (result) {
            // If the user clicks "OK", you can add additional logic here
            alert("You have confirmed the cancellation.");
        } else {
            // If the user clicks "Cancel", no action is taken
            alert("Cancellation aborted.");
        }
    }
</script>
<!-- <script>
    // JavaScript to capture rating selection
document.addEventListener('DOMContentLoaded', () => {
    const ratingStars = document.querySelectorAll('.rating input');
    const ratingValueDisplay = document.getElementById('rating-value');

    ratingStars.forEach(star => {
        star.addEventListener('change', () => {
            ratingValueDisplay.textContent = star.value; // Update displayed rating value
            console.log(`Selected Rating: ${star.value}`); // You can handle the value here, e.g., send to server
        });
    });
});
</script> -->