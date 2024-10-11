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

    <div class="centered-box">
        <h1><strong>Apply for Membership</strong></h1>

        <!--Personal Information -->
        <section class="personal-info">
            <div class="pi">Personal Information</div>
            <div class="form-group1">
                <div class="whole-g1">
                    <input type="text" placeholder="First Name">&nbsp;<input type="text" placeholder="Last Name">
                    <input type="tel" placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="11">&nbsp;<input type="text" placeholder="Email">
                    <input class="address" type="text" placeholder="Address">
                </div>
            </div>
        </section>
        
        <!--Create Password--> 
        <section class="create-password">
            <div class="cp">Create Password</div>
            <div class="input-container">
                <div class="input-box">
                    <input type="password" class="password-input-field" placeholder="Password">
                    <input type="password" class="password-input-field" placeholder="Re-type Password">
                </div>
            </div>
        </section>

        <!--Payment Information-->
        <section class="payment-info">
            <div class="po">Payment Options</div>
            <div class="pay">
                <div class="input-payment">
                    <p class="subtext"><strong>E-Wallet Name</strong></p>
                    <input type="text" class="input-here" required>
                    <p class="subtext"><strong>Cardholder Number</strong></p>
                    <input type="text" class="input-here" required>
                    <p class="subtext"><strong>CVV (Card Verification Value)</strong></p>
                    <input type="text" class="input-here" required>
                </div>
                <div class="input-payments">
                    <p class="subtext"><strong>E-Wallet Number</strong></p>
                    <input type="text" class="input-here" required>
                    <p class="subtext"><strong>Cardholder</strong></p>
                    <input type="text" class="input-here" required>
                    <p class="subtext"><strong>Expiration Date</strong></p>
                    <input type="text" class="input-here" placeholder="mm/yyyy" autocomplete="off" required>
                </div>
            </div>
        </section>
            
        <!--Verification-->
        <section class="verifile">
            <div class="allpay">
                <div class="veri">
                    <p class ="ver"><strong>Verification</strong></p>
                    <p class="subtext"><strong>Provide any of the following documents to verify your<br>application.</br></strong></p>
                </div>

                <div class="pands">
                    <div class="primary-line">
                        <p style ="font-family:Montserrat";><strong>PRIMARY</strong></p>
                        <div class="subtext">
                            <p>*OR/RC</p>
                            <p>*Driver's License</p>
                            <p>*Passport</p>
                            <p>*PhilHealth ID</p>
                        </div>
                    </div>
                    <div class="secondary-line">
                        <p style ="font-family:Montserrat";><strong>SECONDARY</strong></p>
                        <p class="subtext">*Person Holding the Primary ID</p>
                    </div>
                </div>
                        
                <div class="drop-zone" id="drop-zone">
                    <p>Drag & Drop your file here or</p>
                    <button class="upload-button" id="upload-button">Upload File</button>
                </div>
                <input type="file" id="file-input">
 
            </div>
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
        </section>
         <!--Terms and conditions-->
        <section class ="tc">    
            <p class="terms-title"><strong>Terms & Conditions</strong></p>
            <label class="termscon">
                <br>
                <input type="checkbox" class="check terms-text">
                    I agree to the <span class="terms"> terms and conditions.</span>
            </label>
        </section>
        <div class="sub-submit">
            <button class="submit-btn" id="submit">SUBMIT</button>
        </div>
    </div>
<?php
    include 'footer.php';
?>
</body>
</html>

<script>
const dropZone = document.getElementById('drop-zone');
        const uploadButton = document.getElementById('upload-button');
        const fileInput = document.getElementById('file-input');

        //drag-and-drop functionality
        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.classList.add('dragover');
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.classList.remove('dragover');
        });

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.classList.remove('dragover');
            const file = e.dataTransfer.files[0];
            handleFile(file);
        });

        //manual upload 
        uploadButton.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', () => {
            const file = fileInput.files[0];
            handleFile(file);
        });

        function handleFile(file) {
            dropZone.innerHTML = '';

            //file preview box
            const previewBox = document.createElement('div');
            previewBox.classList.add('preview-box');

            if (file && file.type.startsWith('image/')) {
                //if image
                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                previewBox.appendChild(img);
            } else if (file) {
                // if other file type
                const text = document.createElement('p');
                text.textContent = `File: ${file.name}`;
                previewBox.appendChild(text);
            }

            dropZone.appendChild(previewBox);
            dropZone.appendChild(uploadButton);
        }
</script>