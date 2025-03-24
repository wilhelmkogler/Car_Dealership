<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>KWheels - Home</title>
    <link rel="icon" type="image/x-icon" href="img/autoink/car-check.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/home.css">


</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">KWHEELS</a>
            </div>
            <ul class="links">
                <li><a href="autoink.php">Cars for Sale</a></li>
                <li><a href="berles.html">Rent a Car</a></li>
                <li><a href="#whyus">About Us</a></li>
                <li><a href="kapcsolatesfaq.html">Contact</a></li>
            </ul>
            <a href="profil.php" class="action_btn"><i class="fa fa-user"></i> My Account</a>
            <div class="toggle_btn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="autoink.php">Cars for Sale</a></li>
            <li><a href="berles.html">Rent a Car</a></li>
            <li><a href="index.php#whyus">About Us</a></li>
            <li><a href="kapcsolatesfaq.html">Contact</a></li>
            <li><a href="profil.php" class="action_btn">My Account</a></li>
        </div>


        <div class="section_first">
            <h1>K</h1>
            <h1>W</h1>
            <h1>H</h1>
            <h1>E</h1>
            <h1>E</h1>
            <h1>L</h1>
            <h1>S</h1>
        </div>
    </header>



    <div class="section_second">
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="img/home/pic2.webp" alt="" style="width:100%">
                    <div class="container">
                        <h2>Looking to Buy a Car?</h2>
                        <p>Browse our available vehicles and find the one that suits you best. Once you've made your choice, get in touch with us and visit our dealership.</p>
                        <button class="button" onclick="document.location='autoink.php'">Explore</button>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/home/pic3.webp" alt="" style="width:100%">
                    <div class="container">
                        <h2>Prefer Renting?</h2>
                        <p>If you're not ready to buy, we also offer rental options. Check them out before making your final decision.</p>
                        <button class="button" onclick="document.location='berles.html'">See Options</button>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/home/pic4.webp" alt="" style="width:100%">
                    <div class="container">
                        <h2>Thinking About Financing?</h2>
                        <p>You can also finance your car purchase. Use our calculator to estimate your monthly payments in just a few clicks.</p>
                        <button class="button" onclick="document.location='#calculator_link'">Try It Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="whyus" class="section_third">
        <div class="container">
            <div class="column-1">
                <h1>K</h1>
                <h1>W</h1>
                <h1>H</h1>
                <h1>E</h1>
                <h1>E</h1>
                <h1>L</h1>
                <h1>S</h1>
            </div>
            <div class="column-2">
                <h2>Why Choose KWheels?</h2>
                <p>
                    KWheels is the perfect choice for all your car needs. Our platform makes it easy to browse through our available cars for purchase, with convenient filtering and sorting options. By creating an account and logging in, you can add your favorite cars to your personal garage for easy access.

                    Not only can you buy a car from us, but you also have the option to rent one. The rental process is fully transparent, allowing you to track each step, just like when purchasing a vehicle. If you're considering financing, our user-friendly loan calculator helps you plan your monthly payments effortlessly.

                    Have questions? Feel free to reach out, or check our FAQ section for helpful information. At KWheels, we provide all these services in one place, making your car buying and renting experience smooth and hassle-free.
                </p>
                <div>
                    <button type="button" onclick="document.location='kapcsolatesfaq.html'">Contact Us</button>
                    <button type="button" onclick="document.location='profil.php'">My Account</button>
                </div>
            </div>
        </div>
    </div>


    <h2 id="kinalat">What We Offer</h2>

    <div class="section_about">

        <div class="container" id="new">
            <h2>New Car (Showroom)</h2>
            <ul>
                <li id="hd">Pros:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Modern technology and features</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Manufacturer warranty</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher reliability and lower maintenance</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> That "new car" smell and experience</li>
                </ul>
                <li id="hd">Cons:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher purchase price</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Faster depreciation in the first few years</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher insurance costs</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher taxes and registration fees</li>
                </ul>
            </ul>
        </div>

        <div class="container" id="used">
            <h2>Used Car</h2>
            <ul>
                <li id="hd">Pros:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Lower purchase price</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Less depreciation</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Wider selection of models and types</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> More room for price negotiation</li>
                </ul>
                <li id="hd">Cons:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher risk of hidden issues</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Shorter or no warranty</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher maintenance and repair costs</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Limited financing options</li>
                </ul>
            </ul>
        </div>

        <div class="container" id="rental">
            <h2>Car Rental</h2>
            <ul>
                <li id="hd">Pros:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Regular maintenance and servicing by the rental company</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> No depreciation worries</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Convenient for trips and short-term needs</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Opportunity to try out new models</li>
                </ul>
                <li id="hd">Cons:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> More expensive in the long run compared to buying</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Mileage limitations</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Security deposit required</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Rental costs can increase with extra features</li>
                </ul>
            </ul>
        </div>

        <div class="container" id="gas_diesel">
            <h2>Petrol/Diesel Car</h2>
            <ul>
                <li id="hd">Pros:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Lower purchase price</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Longer range on a full tank</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> More options available on the market</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Longer-lasting engines</li>
                </ul>
                <li id="hd">Cons:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher fuel costs</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher emissions</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Less fuel efficiency</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Harder to start in cold weather</li>
                </ul>
            </ul>
        </div>

        <div class="container" id="electric">
            <h2>Electric Car</h2>
            <ul>
                <li id="hd">Pros:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Instant torque and acceleration</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Various incentives and tax benefits</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Home charging options</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Environmentally friendly choice</li>
                </ul>
                <li id="hd">Cons:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher purchase price</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Limited driving range</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Longer charging time</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Battery degradation over time</li>
                </ul>
            </ul>
        </div>

        <div class="container" id="hybrid">
            <h2>Hybrid Car</h2>
            <ul>
                <li id="hd">Pros:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Better fuel efficiency</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Longer range than fully electric cars</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Lower fuel costs in city driving</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> More eco-friendly than traditional cars</li>
                </ul>
                <li id="hd">Cons:</li>
                <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher purchase price</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> More complex drivetrain, potentially higher maintenance costs</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Battery replacement may be needed sooner</li>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i> Higher insurance costs</li>
                </ul>
            </ul>
        </div>

    </div>



    <div class="section_question" id="message">
        <div class="faq">
            <div class="kep">
                <h2>Have a Question?</h2>
            </div>
            <div class="container">
                <div class="message">
                    <form id="contactForm" action="sendmail.php" method="POST">
                        <h2>Write to Us</h2>
                        <table>
                            <tr>
                                <td>
                                    <input type="text" id="fullname" placeholder="Name..." name="fullname" autocomplete="off" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="email" placeholder="Email..." autocomplete="off" id="email" name="email" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <textarea id="message" name="message" placeholder="Your Question..." rows="4" required></textarea>
                                </td>
                            </tr>
                        </table>

                        <button type="submit" name="submitContact">Send Question</button>
                    </form>
                </div>
                <div class="szoveg">
                    <h2>Check Our FAQ</h2>
                    <p>If you have any questions about our services, take a look at our Frequently Asked Questions section. You might find the answers you're looking for there.</p>
                    <button type="button" onclick="document.location='kapcsolatesfaq.html#faq'">Frequently Asked Questions</button>
                </div>
            </div>
        </div>
    </div>




    <div id="calculator_link" class="section_calculator">
        <h2>Loan Calculator</h2>

        <table class="calc_table">
            <tbody>
                <tr style="margin-bottom: 0px;">
                    <td>
                        <div class="container-box">
                            <label for="teljesAr">Car Price (€):</label><br>
                            <input type="number" id="teljesAr" name="teljesAr" value="">
                        </div>
                    </td>
                    <td>
                        <div class="container-box">
                            <label for="kamatLab">Interest Rate (%):</label><br>
                            <input type="number" id="kamatLab" name="kamatLab" value="">
                        </div>
                    </td>
                </tr>

                <tr style="margin-bottom: 0px;">
                    <td>
                        <div class="container-box">
                            <label for="letet">Down Payment (€):</label><br>
                            <input type="number" id="letet" name="letet" value=""><br>
                            <input type="radio" id="10percent" name="letetMertek" value="10">
                            <label for="10percent" style="font-size: 1.2rem;">10%</label>
                            <input type="radio" id="20percent" name="letetMertek" value="20">
                            <label for="20percent" style="font-size: 1.2rem;">20%</label>
                            <input type="radio" id="30percent" name="letetMertek" value="30">
                            <label for="30percent" style="font-size: 1.2rem;">30%</label>
                        </div>
                    </td>
                    <td>
                        <div class="container-box">
                            <label for="rangeInput">Loan Term: <span id="rangeValue">36</span> (<span id="yearsValue">3</span> years)</label><br>
                            <input type="range" min="12" max="120" value="36" step="12" id="rangeInput">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="calc_table_footer">
            <p>Monthly Payment:</p><br>
            <p id="torlesztoP">0</p>
            <p>€</p><br>

            <button type="button" onclick="calculateHaviTorleszto()">Calculate</button>
        </div>
    </div>


    <div class="scroll-top-wrapper">
        <button class="scroll-top" title="Vissza az oldal tetejére" onclick="scrollToTop()">&#9650;</button>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Our Company</h4>
                    <ul>
                        <li><a href="autoink.php">Cars for Sale</a></li>
                        <li><a href="berles.html">Rent a Car</a></li>
                        <li><a href="index.php#whyus">About Us</a></li>
                        <li><a href="kapcsolatesfaq.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Car Selection</h4>
                    <ul>
                        <li><a href="index.php#uj">New (Showroom)</a></li>
                        <li><a href="index.php#hasznalt">Used</a></li>
                        <li><a href="index.php#elektromos">Electric</a></li>
                        <li><a href="index.php#hybrid">Hybrid</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="profil.php">My Account</a></li>
                        <li><a href="index.php#calculator_link">Loan Calculator</a></li>
                        <li><a href="index.php#message">Send a Question</a></li>
                        <li><a href="kapcsolatesfaq.html#faq" title="Frequently Asked Questions">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Social Media</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/koglerwilhelm/"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-snapchat"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="rights">
        <h5>KWheels © 2025. All rights reserved.</h5>
    </div>



    <script src="javascript/home.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var messageText = "<?= $_SESSION['status'] ?? '';  ?>";
        if (messageText != '') {
            Swal.fire({
                title: "Thank You for Your Question!",
                text: messageText,
                icon: "success",
                confirmButtonText: "Close"

            });
            <?php unset($_SESSION['status']); ?>
        }
    </script>





</body>

</html>