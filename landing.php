<?php
$page = 'Sell';
$pageDesc = '""';
include 'includes/header.php';
$page = 'Sell';
?>

<main>
    <style>
    .header-main nav .navbar-brand img {
        width: 200px;
        height: 95px;
        filter: brightness(1.5) invert(3) !important;
        object-fit: contain;
        object-fit: cover;
    }

    .form-banner {
        position: relative;
        background-color: #fff;
        color: #000;
        border-radius: 25px;
        padding: 30px 20px;
        width: 80%;
        box-shadow: 0 0 17px rgb(0 0 0 / 20%);
    }

    .form-banner .input-field {
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        padding: 8px 15px;
        margin-bottom: 8px;
        border-radius: 0;
        font-size: 14px;
        margin: 0 0 35px 0;
        border-radius: 30px;
    }
    </style>
    <style>
    /*.home-banner .form-banner::before{*/
    /*  content: '';*/
    /*  position: absolute;*/
    /*  background-image: url(../images/form-before-img.png);*/
    /*  bottom: 0;*/
    /*  right: 100%;*/
    /*  height: 380px;*/
    /*  width: 170px;*/
    /*  background-size: contain;*/
    /*  background-repeat: no-repeat;*/
    /*  background-position: center right;*/
    /*  transform: translateY(80px);*/
    /*}*/
    .form-banner .tag-img {
        position: absolute;
        right: 0;
        top: -30px;
        z-index: 1;
        width: 175px;
    }

    .form-banner form {
        padding-top: 15px;
    }

    .form-banner .input-field {
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        padding: 8px 15px;
        margin-bottom: 8px;
        border-radius: 0;
        font-size: 14px;
        margin: 0 0 35px 0;
        border-radius: 30px;
    }

    .form-banner .input-field label {
        color: #666;
    }

    .form-banner .input-field input,
    .form-banner .input-field textarea {
        display: block;
        width: 100%;
        border: none;
        outline: none;
        padding: 3px 0;
        color: #000;
    }

    .home-banner .form-banner .input-field textarea {
        height: 60px;
        resize: none;
    }

    .home-banner .form-banner .button-field {
        padding-top: 20px;
        display: block;
    }

    .home-banner .form-banner .button-field button {
        padding: 5px;
        width: 100%;
    }

    .accordion-item {
        border-bottom: 1px solid #ccc;
    }

    .accordion-item-header {
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        padding: 30px 0px;
    }

    .accordion-item-header.active img {
        transform: rotate(360deg);
    }

    .accordion-item-header h2 {
        font-family: "Montserrat", sans-serif;
        font-size: 18px;
        font-weight: 500;
        line-height: 24px;
    }

    .accordion-item-header img {
        height: 15px;
        width: 15px;
        object-fit: contain;
        transform: rotate(180deg);
        transition: transform 0.2s ease;
    }

    .accordion-item-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    .accordion-item-body-content {
        padding: 5px 80px 30px 0px;
        display: flex;
        flex-direction: column;
        gap: 35px;
    }

    .accordion-item-body-content p {
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
    }

    .header-main nav .navbar-brand img {
        width: 200px;
        height: 95px;
        filter: brightness(1.5) invert(3) !important;
        object-fit: contain;
        object-fit: cover;
    }
    </style>s
    <section class="Team abouts-teams" id="tems-gap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="tecture-motive">
                        <!-- <h4>Team</h4> -->
                        <h2>Meet our Real Estates Professional</h2>
                        <p>Our team is 100% committed to help you achieve your dreams and goals,
                            with our experts accompanying you&nbsp;from search to settlement, anytime and
                            anywhere.&nbsp; We are a
                            local Melbourne real estate one-stop shop,&nbsp;
                            providing a full range of services to Australian and international clients.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="custom-profile">
                        <img src="images/profile/profile-1.png" class="img-fluid" alt="img">
                        <h4>Ryan Fong</h4>
                        <a href="#">
                            view detail
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="custom-profile">
                        <img src="images/profile/profile-3.png" class="img-fluid" alt="img">
                        <h4>Charles Lam</h4>
                        <a href="#">
                            view detail
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="custom-profile">
                        <img src="images/profile/profile-2.png" class="img-fluid" alt="img">
                        <h4>Praveen Kumar</h4>
                        <a href="#">
                            view detail
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="custom-profile">
                        <img src="images/profile/profile-4.png" class="img-fluid" alt="img">
                        <h4>Catherine Cheah</h4>
                        <a href="#">
                            view detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="landing-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="form-banner">
                        <h5 class="form-heading">we are here for you<br>
                            <span>Fill Out The Form! </span>
                        </h5>
                        <hr>
                        <form action="process.php" method="POST">
                            <div class="input-field">
                                <label for="">Name</label>
                                <input type="text" name="Name">
                            </div>
                            <div class="input-field">
                                <label for="">Email</label>
                                <input type="email" name="Email">
                            </div>
                            <div class="input-field">
                                <label for="">Phone</label>
                                <input type="tel" name="Phone">
                            </div>
                            <div class="input-field">
                                <label for="">Message</label>
                                <textarea name="Message"></textarea>
                            </div>

                            <div class="button-field">
                                <button class="button-theme" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <div class="refunded">
                        <h5>contact with us</h5>
                        <h2>reach out to us via contact details</h2>
                        <p>Our team is 100% committed to help you achieve your dreams and goals, with our experts
                            accompanying you from search to settlement, anytime and anywhere. We are a local Melbourne
                            real estate one-stop shop, providing a full range of services.</p>
                    </div>
                    <div class="row">

                        <div class="col-12 col-md-6">
                            <div class="text-form">
                                <span>1</span>
                                <h4>Client Centric Approach</h4>
                                <p>Lorem ipsum dolor sit amet elit, sed do
                                    eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.</p>

                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="text-form">
                                <span>2</span>
                                <h4>Integrity & Transparency</h4>
                                <p>Lorem ipsum dolor sit amet elit, sed do
                                    eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
 

    <section class="sellpage-place buypsge9763">
        <div class="container">
            <div class="row g-5">


                <div class="col-12 col-md-4">
                    <div class="buy-custom-place">
                        <img src="images/sell/buy-56.png" class="img-fluid" alt="img">
                        <a href="#">For Sale</a>
                    </div>
                    <div class="custom-place-1 buy-page-951">
                        <h4 class="sing-sell">110/25-33 Wills Street, Melbourne VIC 3000</h4>
                        <p><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp;Wills Court, 25-33, Wills Street,
                            Melbourne, City of Melbourne, Victoria, 3000, Australia</p>
                        <h5 class="sing-sell">From $375,000- $395,000</h5>
                        <ul>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>1 bed</span></li>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>2 bed</span></li>
                            <li><img src="images/icon/square.png" class="img-fluid" alt="img"><span>1200 sqft</span>
                            </li>
                        </ul>
                        <div class="sell-place-holder buy-pageeees-951">

                            <ul>
                                <li><span>for sell</span></li>
                                <li>
                                    <ul>
                                        <li><a href="#"><img src="images/icon/next-tap.png" alt="img"></a></li>
                                        <li><a href="#"><img src="images/icon/copypest.png" alt="img"></a></li>
                                        <li>
                                            <a href="#"><img src="images/icon/heart.png" class="img-fluid"
                                                    alt="img"></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="buy-custom-place">
                        <img src="images/sell/buy-56.png" class="img-fluid" alt="img">
                        <a href="#">For Sale</a>
                    </div>
                    <div class="custom-place-1 buy-page-951">
                        <h4 class="sing-sell">110/25-33 Wills Street, Melbourne VIC 3000</h4>
                        <p><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp;Wills Court, 25-33, Wills Street,
                            Melbourne, City of Melbourne, Victoria, 3000, Australia</p>
                        <h5 class="sing-sell">From $375,000- $395,000</h5>
                        <ul>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>1 bed</span></li>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>2 bed</span></li>
                            <li><img src="images/icon/square.png" class="img-fluid" alt="img"><span>1200 sqft</span>
                            </li>
                        </ul>
                        <div class="sell-place-holder buy-pageeees-951">

                            <ul>
                                <li><span>for sell</span></li>
                                <li>
                                    <ul>
                                        <li><a href="#"><img src="images/icon/next-tap.png" alt="img"></a></li>
                                        <li><a href="#"><img src="images/icon/copypest.png" alt="img"></a></li>
                                        <li>
                                            <a href="#"><img src="images/icon/heart.png" class="img-fluid"
                                                    alt="img"></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="buy-custom-place">
                        <img src="images/sell/buy-56.png" class="img-fluid" alt="img">
                        <a href="#">For Sale</a>
                    </div>
                    <div class="custom-place-1 buy-page-951">
                        <h4 class="sing-sell">110/25-33 Wills Street, Melbourne VIC 3000</h4>
                        <p><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp;Wills Court, 25-33, Wills Street,
                            Melbourne, City of Melbourne, Victoria, 3000, Australia</p>
                        <h5 class="sing-sell">From $375,000- $395,000</h5>
                        <ul>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>1 bed</span></li>
                            <li><img src="images/icon/bed.png" class="img-fluid" alt="img"><span>2 bed</span></li>
                            <li><img src="images/icon/square.png" class="img-fluid" alt="img"><span>1200 sqft</span>
                            </li>
                        </ul>
                        <div class="sell-place-holder buy-pageeees-951">

                            <ul>
                                <li><span>for sell</span></li>
                                <li>
                                    <ul>
                                        <li><a href="#"><img src="images/icon/next-tap.png" alt="img"></a></li>
                                        <li><a href="#"><img src="images/icon/copypest.png" alt="img"></a></li>
                                        <li>
                                            <a href="#"><img src="images/icon/heart.png" class="img-fluid"
                                                    alt="img"></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>









            </div>
        </div>
    </section>


    <section class="Enquiry">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="main-enquiry">
                        <h2>Make an Enquiry</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi.</p>
                            <ul>
                                <li><button>I'm thinking of selling</button></li>
                                <li><button class="center">I need a property manager</button></li>
                                <li><button>General enquiry</button></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sell-page-lopper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="loter">
                        <img src="images/sell/seling-expection.png" class="img-fluid" alt="img">
                        <h2>Explore</h2>
                        <ul>
                            <li>the pioneer mission</li>
                            <li>Services</li>
                            <li>Careers</li>
                            <li>Foundation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include 'includes/footer.php';
    $page = 'Sell';
    ?>
</main>