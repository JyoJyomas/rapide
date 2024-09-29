<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="services2.css">
</head>
<body>
    
    <?php 
        include "navbar.php";    
    ?>  

    <div class="main-content">
        
    <div class="content">
        <div class ="sidenav">
            <i id="services">SERVICES</i> 
            <button class = "container" href="#brakes">BRAKES</button>
            <button class = "container" href="#oilchange">OIL CHANGE</button>
            <button class = "container" href="#tirechange">TIRES AND BATTERIES</button>
            <button class = "container" href="#suspension">SUSPENSION</button>
            <button class = "container" href="#cmaintenance">MAINTENANCE</button>
            <button class = "container" href="#packages">PACKAGES</button>
        </div>
    </div>

        <div class="book">
            <section class="section-one">
            <div class="book-here">BOOKING FORM</div>
                <form class="s1" action=".php" method="post">
                    <div class="form-group">
                        <div class="texts">
                            <div class="tall-text">Services</div>
                            <div class="small-text">*Price Inclusive of Labor</div>
                        </div>
                        <select id="service" name="service">
                            <option value="Choose">Choose your kind of service in BRAKES</option>
                            <option value="pad1">₱ 2,450 | PADS: Small </option>
                            <option value="pad2">₱ 2,850 | PADS: Medium </option>
                            <option value="pad3">₱ 3,250 | PADS: Large </option>
                            <option value="shoes1">₱ 2,450 | PADS: Small </option>
                            <option value="shoes2">₱ 2,850 | PADS: Medium </option>
                            <option value="shoes3">₱ 3,250 | PADS: Large </option>
                        </select>
                    </div>
                </form> 
            </section>

            <section class="section-two">
                <form class="s2" action=".php" method="post">
                    <div class="form-group1">
                        <div class="whole-g1">
                            <div class="tall-text">Customer Information</div>
                            <input type="text" placeholder="First Name">&nbsp;<input type="text" placeholder="Last Name">
                            <input type="tel" placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="11">&nbsp;<input type="text" placeholder="Email">
                            <input class="plate" type="tel" placeholder="Plate Number" maxlength="7">
                        </div>
                    </div>
                    <div class="form-group2">
                        <div class="tall-text">Vehicle</div>
                        <div class="whole-select">
                            <div class="select-here">
                                <select class="vc" name="vehicle" id="vehicle">
                                    <option value="Choose">Choose your vehicle type</option>
                                    <option>Audi</option>
                                    <option>BMW</option>
                                    <option>Chevrolet</option>
                                    <option>Daewoo</option>
                                    <option>Daihatsu</option>
                                    <option>Dodge</option>
                                    <option>Ford</option>
                                    <option>Foton</option>
                                    <option>Fuso</option>
                                    <option>Geely</option>
                                    <option>GMC</option>
                                    <option>Hino</option>
                                    <option>Honda</option>
                                    <option>Hummer</option>
                                    <option>Hyundai</option>
                                    <option>Infinity</option>
                                    <option>Isuzu</option>
                                    <option>Jac</option>
                                    <option>Jaguar</option>
                                    <option>Jeep</option>
                                    <option>KIA</option>
                                    <option>Land Rover</option>
                                    <option>Lexus</option>
                                    <option>Mazda</option>
                                    <option>Mercedes</option>
                                    <option>MG</option>
                                    <option>Mini Cooper</option>
                                    <option>Mitsubishi</option>
                                    <option>Nissan</option>
                                    <option>Opel</option>
                                    <option>Pugeot</option>
                                    <option>Porsche</option>
                                    <option>Proton</option>
                                    <option>Renault</option>
                                    <option>Ssangyong</option>
                                    <option>Subaru</option>
                                    <option>Suzuki</option>
                                    <option>Toyota</option>
                                    <option>Volkswagen</option>
                                    <option>Volvo</option>
                                </select>
                                <select class="yr" name="yearmodel" id="yearmodel">
                                    <option value="Choose">Choose year model</option>
                                    <option>2024</option>
                                    <option>2023</option>
                                    <option>2022</option>
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                    <option>2013</option>
                                    <option>2012</option>
                                    <option>2011</option>
                                    <option>2010</option>
                                    <option>2009</option>
                                    <option>2008</option>
                                    <option>2007</option>
                                    <option>2006</option>
                                    <option>2005</option>
                                    <option>2004</option>
                                    <option>2003</option>
                                    <option>2002</option>
                                    <option>2001</option>
                                    <option>2000</option>
                                    <option>1999</option>
                                    <option>1998</option>
                                    <option>1997</option>
                                    <option>1996</option>
                                    <option>1995</option>
                                    <option>1994</option>
                                    <option>1993</option>
                                    <option>1992</option>
                                </select>
                            </div>
                            <div class="oil">
                                <button type="button">Gas</button>
                                <button type="button">Diesel</button>
                            </div>
                        </div>
                    </div>
                            <div class="form-group3">
                                <div class="tall-text">Schedule your Appointment</div>
                                <input class="date" type="date" id="sdate" name="sdate">&nbsp;
                                <input class="time" type="time" id="stime" name="stime" min="09:00" max="18:00" placeholder="Schedule Time" required/>
                            </div>
                    <div class="form-group4">
                        <div class="tall-text">Payment Options</div>
                        <div class="pay-here">
                            <select class="pay1" name="pay" id="pay">
                                <option>Payment Option</option>
                                <option>Reserve | Pay 250 to Reserve your Slot</option>
                                <option>Pay Now | Get points to Redeem on your next Booking</option>
                                <option>Pay with points</option>
                            </select>
                            <div class="images">
                                <img src="photos/gcash.png">&nbsp;
                                <img src="photos/visa.png"> &nbsp;
                                <img src="photos/masterc.png">&nbsp;
                                <img src="photos/paypal.png">
                            </div>
                        </div>
                        <select class="pay2" name="pay" id="pay">
                                <option value="Choose">Mode of Payment</option>
                                <option value="GCash">GCash</option>
                                <option value="VISA">VISA</option>
                                <option value="Master Card">Master Card</option>
                                <option value="PayPal">PayPal</option>
                        </select>
                        &nbsp;
                        <input type="tel" placeholder="63+ |" pattern="[0-9]{10}" maxlength="12">
                    </div>
                </form> 
                
<div class="summary-container">
    <h2>Booking Summary</h2>
    <div class="first-row">
        <div class="sched-box">
            <label>Schedule:</label>
        </div>
        <div class="date-box">
            <span>August 26, 2024</span>
        </div>
    </div>
    <div class="second-row">
        <div class="brand-box">
            <label>Vehicle:</label>
        </div>
        <div class="model-box">
            <span>Toyota Echo Verso 2022 - Diesel</span>
        </div>
    </div>
    <div class="info-row">
        <label>PMS DIESEL REGULAR EXPRESS</label>
        <span>| ₱ 2,350.00</span>
    </div>
    <div class="info-row">
        <label>Multi-point Inspection</label>
        <span>| ₱ 0.00</span>
    </div>
    <div class="info-row">
        <label>Supply Charge</label>
        <span>| ₱ 50.00</span>
    </div>
    <div class="info-row total">
        <label>Total</label>
        <span>| ₱ 2,400.00</span>
    </div>
    <div class="info-row points">
        <label>Your Points <small>(10% from your *Bill)</small></label>
        <span>| ₱ 240.00</span>
    </div>
    <div class="info-row points">
        <label>Total Points</label>
        <span>| ₱ 8,369.00</span>
    </div>
    <div class="button-row">
        <button class="home-button">Home</button>
        <button class="confirm-button">Confirm&nbsp;Booking</button>
    </div>
</div>
</section>
</div>
</div>
    <?php
       include 'Footer.php';
    ?>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarLinks = document.querySelectorAll('.sidebar a');

        sidebarLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (this.classList.contains('active')) {
                    this.classList.remove('active');
                } else {
                    sidebarLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });
    });
</script>