<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Membership.css">
    <script src="https://kit.fontawesome.com/67eed877b8.js" crossorigin="anonymous"></script>
    <title>Membership | Rapidé </title>
</head>

<body style = "background-color: #FABC3F">
    <?php
       include 'navbar.php';
    ?>
<div class="memcon">
    <div class="centered-box">
        <h1><strong>Apply for Membership</strong></h1>
        <!--Personal Information -->
        <section class="personal-info">
            <p class="section-title"><strong>Personal Information</strong></p>
            <div class="input-container">
                <div class="input-box">
                    <input type="text" class="personal-input-field" placeholder="First Name" required>
                    <input type="text" class="personal-input-field" placeholder="Last Name" required>
                    <input type="text" class="personal-input-field" placeholder="Phone Number" required>
                    <input type="email" class="personal-input-field" placeholder="Email Address" required>
                    <input type="text" class="personal-input-field" placeholder="Address" required>
                </div>
            </div>
        </section>
            <!--Create Password -->
            <section class="create-password">
                <p class="section-title"><strong>Create Password</strong></p>
                <div class="input-container">
                    <div class="input-box">
                        <input type="password" class="password-input-field" placeholder="Password">
                        <input type="password" class="password-input-field" placeholder="Re-type Password">
                    </div>
                </div>
            </section>
            <!--Payment Information -->
            <section class="payment-info">
                <p class="section-title"><strong>Payment Information</strong></p>
                <div class="input-payment">
                    <p class="subtext"><strong>E-Wallet Name</strong></p>
                    <input type="text" class="input-text" required>
                    <p class="subtext"><strong>E-Wallet Number</strong></p>
                    <input type="text" class="input-text" required>
                    <p class="subtext"><strong>Cardholder Name</strong></p>
                    <input type="text" class="input-text" required>
                    <p class="subtext"><strong>Cardholder Number</strong></p>
                    <input type="text" class="input-text" required>
                    <p class="subtext"><strong>CCV</strong></p>
                    <input type="text" class="input-text" required>
                    <p class="subtext"><strong>Expiration Date</strong></p>
                    <input type="text" class="input-text" placeholder="mm/yyyy" autocomplete="off" required>
                </div>
            </section>
            <!--Checkbox-->
            <label>
                <p class="terms-title"><strong>Terms & Conditions</strong></p>
                <input type="checkbox">
                <span class="terms-text">I agree to the <span class="terms">terms and conditions.</span></span>
            </label>
            <!--Verification -->
            <section class="verification-line">
                <p style ="font-family:Montserrat";><strong>Verification</strong></p>
                <p class="subtext"><strong>Provide any of the following documents to verify your<br>application.</br></strong></p>
                <div class="primary-line">
                    <p style ="font-family:Montserrat";><strong>PRIMARY</strong></p>
                    <div class="subtext">
                        <p>*OR/RC</p>
                        <p>*Driver's License</p>
                        <p>*Passport</p>
                        <p>*PhilHealth ID</p>
                    </div>
                    <div class="secondary-line">
                        <p style ="font-family:Montserrat";><strong>SECONDARY</strong></p>
                        <p class="subtext">*Person Holding the Primary ID</p>
                    </div>
                </div>
            </section>
            <!--File upload -->
            <div class="file-upload-container">
                <input type="file" class="upload-box">
                <input type="file" class="upload-box">
            </div>
            <!--Membership -->
            <div class="perks-line">
                <p><strong>Membership&nbsp;Perks</strong></p>
                <div class="inner-box"></div>
                <div class="services-line">
                    <p>
                        <strong class="spaced-items">Services&nbsp;Discounts</strong>
                        <strong class="spaced-items">Services&nbsp;Scheduling</strong>
                        <strong class="spaced-items">Loyalty&nbsp;Points</strong>
                        <strong class="spaced-items">Priority&nbsp;Service</strong>
                    </p>
                    <p id="price">₱&nbsp;3,500&nbsp;/&nbsp;annual</p>
                </div>
            </div>
            <div class="sub-submit">
                <button class="submit-btn" id="submit">SUBMIT</button>
            </div>
        </div>
    </div>
    <?php
       include 'Footer.php';
    ?>
</body>
</html>