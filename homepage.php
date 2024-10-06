
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <script src="https://kit.fontawesome.com/67eed877b8.js" crossorigin="anonymous"></script>
    <title>Home | Rapide</title>
</head>
<body style = "background-color: #FABC3F">
    <?php
        include 'navbar.php';
    ?>
    <section>
        <h1 id = "exp">Experience the Rapide way!</h1>
            <div class ="slider">
                <input type="radio" name="slider" id="slide1" checked>
                <input type="radio" name="slider" id="slide2">
                <input type="radio" name="slider" id="slide3">
                <input type="radio" name="slider" id="slide4">
                <input type="radio" name="slider" id="slide5">
                <div id="slides">
                    <div id="overflow">
                        <div class="inner">
                            <div class="slide slide_1">
                                <div class="slide-content">
                                    <h2>Maintenance</h2>
                                    <p class = "text1">Rapidé offers general maintenance services to  ensure that your car runs well</p>
                                    <p class = "text2">PRICE STARTS AT: <b>₱ 250</b></p>
                                    <a href= "services.php" target = "_blank" ><button class="btn1">Check Offered Services</button></a>
                                </div>
                            </div>
                            <div class="slide slide_2">
                                <div class="slide-content">
                                    <h2>Brakes</h2>
                                    <p class = "text1">The foremost area of safety, Rapidé offers brake pads, shoes and other brakes services.</p>
                                    <p class = "text2">PRICE STARTS AT:<b> ₱ 2,450</b></p>
                                    <a href="services.php" target = "_blank"><button class="btn1">Check Offered Services</button></a>
                                </div>
                            </div>
                            <div class="slide slide_3">
                                <div class="slide-content">
                                    <h2>Oil Change</h2>
                                    <p class = "text1">Rapidé Express Oil Change is comprehensive preventive maintenance to check,</p>
                                    <p class = "text1_1">inspect, flush, fill and clean essential systems and components of your vehicle.</p>
                                    <p class = "text2">PRICE STARTS AT:<b> ₱ 1,500</b></p>
                                    <a href="services.php" target = "_blank"><button class="btn1">Check Offered Services</button></a>
                                </div>
                            </div>
                            <div class="slide slide_4">
                                <div class="slide-content">
                                    <h2>Tires and Batteries</h2>
                                    <p class = "text1">Your vehicle’s body and soul. We'll make sure you'll get </p>
                                    <p class = "text1_1">the best tires and batteries fit for your vehicle brand. </p>
                                    <p class = "text2">PRICE STARTS AT:<b>₱ 200</b> </p>
                                    <a href="services.php" target = "_blank" ><button class="btn1">Check Offered Services</button></a>
                                </div>
                            </div>
                            <div class="slide slide_5">
                                <div class="slide-content">
                                    <h2>AC Services and Repair</h2>
                                    <p class = "text1">Ensures the safety and functionality of your vehicle</p>
                                    <p class = "text2">PRICE STARTS AT:<b> ₱ 550</b></p>
                                    <a href="services.php" target = "_blank" ><button class="btn1">Check Offered Services</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div id="controls">
                        <label for="slide1"></label>
                        <label for="slide2"></label>
                        <label for="slide3"></label>
                        <label for="slide4"></label>
                        <label for="slide5"></label>
                    </div>
                    <div id="bullets">
                        <label for="slide1"></label>
                        <label for="slide2"></label>
                        <label for="slide3"></label>
                        <label for="slide4"></label>
                        <label for="slide5"></label>
                    </div>
            </div>
    </section>

    <section>
        <h1 id = "pkg">Want to try our Package?</h1>
        <p id = "pkg2">*FREE SAFETY INSPECTION for every package<br>*Prices may vary</p>
        <div class ="container">
            <div class = "package-container">
                <div class = "express">
                    <p id = "name">EXPRESS PACKAGE</p>
                    <p id = "mil">Recommended Mileage:</p>
                    <p ><b id = "km">5,000 </b> <i id = "kms">kms </i> <i id = "oil">*regular oil</i></p>
                    <div class = "details">
                        <div class ="fuel1">
                            <p id ="gas">GAS</p>
                            <p id = "psa"><i>Price Starts at:</i></p>
                            <p id = "price">₱ 1,500</p>
                            <p id = "inc">4L Oil <br>Oil Filter</p>
                            <div class = "button-container">
                              <a href="services.php" target = "_blank"><button class="btn2" style="margin-top: 91px;">Book</button></a>   
                            </div>
                        </div>
                        
                        <div class ="fuel">
                            <p id ="gas">DIESEL</p>
                            <p id = "psa"><i>Price Starts at:</i></p>
                            <p id = "price">₱ 2,350</p>
                            <p id = "inc">6L Oil <br>Oil Filter</p>
                            <div class = "button-container">
                                <a href="services.php" target = "_blank"><button class="btn2" style="margin-top: 91px;">Book</button></a>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>

            <div class = "package-container">
                <div class = "plus">
                    <p id = "name">PLUS PACKAGE</p>
                    <p id = "mil">Recommended Mileage:</p>
                    <p ><b id = "km">10,000 </b> <i id = "kms">kms </i> <i id = "oil" >*regular oil</i></p>
                    <div class = "details">
                        <div class ="fuel1">
                            <p id ="gas">GAS</p>
                            <p id = "psa"><i>Price Starts at:</i></p>
                            <p id = "price">₱ 2,450</p>
                            <p id = "inc">4L Oil <br>Oil Filter<br> Sparkplugs <i style="font-size: small;">(regular)</i><br> Tire Rotation</p>
                            <br>
                            <div class = "button-container">
                                <a href="services2.php" target = "_blank"><button class="btn2" style="margin-top: 27px;">Book</button></a>
                            </div>
                        </div>
                        
                        <div class ="fuel">
                            <p id ="gas">DIESEL</p>
                            <p id = "psa"><i>Price Starts at:</i></p>
                            <p id = "price">₱ 3,100</p>
                            <p id = "inc">6L Oil <br> Oil Filter<br> Engine Flush<br> Break Clean<br> Break Adjust</p>
                            <div class = "button-container">
                                <a href="services2.php" target = "_blank"><button class="btn2">Book</button></a>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>

            <div class = "package-container">
                <div class = "premium">
                    <p id = "name">PREMIUM PACKAGE</p>
                    <p id = "mil">Recommended Mileage:</p>
                    <p ><b id = "km">20,000 </b> <i id = "kms">kms </i> <i id = "oil">*regular oil</i></p>
                    <div class = "details">
                        <div class ="fuel1">
                            <p id ="gas">GAS</p>
                            <p id = "psa"><i>Price Starts at:</i></p>
                            <p id = "price">₱ 3,650</p>
                            <p id = "inc">4L Oil <br>Oil Filter<br> Sparkplugs <i style="font-size: small;">(regular)</i> <br>Air Filter <br> Engine Flush</p>
                            <div class = "button-container">
                                <a href="services2.php" target = "_blank"><button class="btn2">Book</button></a>
                            </div>
                        </div>
                        <div class ="fuel">
                            <p id ="gas">DIESEL</p>
                            <p id = "psa"><i>Price Starts at:</i></p>
                            <p id = "price">₱ 4,600</p>
                            <p id = "inc">6L Oil <br>Oil Filter <br> Engine Flush<br> Air Filter <br>Fuel Filter</p>
                            <div class = "button-container">
                                <a href="services2.php" target = "_blank"><button class="btn2">Book</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>           
            </div>
        </div> 
    </section>  
    
    <section id="products">
        <h1 id = "ptrn">Available Products On-Site</h1>
        <p id = "ptrn2">In partnership with Petron Products</p>
        <div class = "container">        
            <div class ="ptrn-container">   
                <div class = "ptrn2-container">
                    <img class = "ptrnpic" src="photos/petron1.png">
                    <div class = "petron">
                        <p id = "ptrname"> <b>REV-X RX600 SYNTHETIC BLEND Diesel Engine Oil SAE 10W-40 </b> </p>
                    </div>
                </div>           
            </div>
            <div class ="ptrn-container">   
                <div class = "ptrn2-container">
                    <img class = "ptrnpic" src="photos/petron2.png">
                        <div class = "petron">
                            <p id = "ptrname" > <b>PETRON SPRINT 4T SR450 PREMIUM MULTI-GRADE (ENDURO) SAE 20W-50 </b> </p>
                        </div>
                </div>
            </div>
            <div class ="ptrn-container">   
                <div class = "ptrn2-container">
                <img class = "ptrnpic" src="photos/petron3.png">
                    <div class = "petron">
                        <p id = "ptrname" style = "font-size:medium;   padding-bottom: 1px;"> <b >PETRON BLAZE RACING BR400 PREMIUM MULTIGRADE GASOLINE ENGINE OIL (ULTRON TOURING) SAE 15W-40</b> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img class = "abtbg" src="photos/rapide.jpg" alt="rapide bg">

    <section class = "belowabt" id="about">
        <img  src="photos/miko.png" alt="miko">
        <div class = "advhis">
            <div id = "advantage">
                <h1 id = "adv">Advantages</h1>
                <p id ="inf">Rapidé’s quality assurance can be summed up in these words: CASA-quality services at affordable prices. Our team of skilled technicians, coupled with state of the art equipment, allow us to fulfil this vision. This vision is what we now refer to as the Rapidé Way, and it’s something that separates us from every other competitor out there. Curious about the #RapidéWay and what makes it so good? Come and experience it for yourself!</pinf>
            </div>
        
            <div id = "history">
                <h1 id = "hist">History</h1>
                <p id ="inf">Rapidé is born of a joint venture with Midas International. Being the largest auto service center chain in the world, Midas provided the basis for Rapidé’s systems and procedures. This is among the things that helped us come up with the Rapidé Way. And it’s something that we’re proud of to this day. For 20 years, the Rapidé brand has stood the test of time. Here at Rapidé, your satisfaction is our guarantee.</pinf>
            </div>  
        </div>
    </section> 
    <?php
        include 'footer.php';
    ?>
<script>
        let currentSlide = 1;
    const totalSlides = 5;  
    const intervalTime = 3000;

    function changeSlide() {
        currentSlide++;
        if (currentSlide > totalSlides) {
            currentSlide = 1;
        }
        document.getElementById(`slide${currentSlide}`).checked = true;
    }
    setInterval(changeSlide, intervalTime);
</script>
</body>
</html>
